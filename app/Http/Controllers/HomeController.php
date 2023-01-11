<?php
namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Newsletter;

class HomeController extends BaseController
{
    public function index(Request $request) {
        $errMsg = $request->session()->pull('errMsg') ?? NULL;
        $successMsg = $request->session()->pull('successMsg') ?? NULL;

        return view('home',[
            'errorMsg' => $errMsg,
            'successMsg' => $successMsg
        ]);
    }

    public function newsletter(Request $rd) {
        $user_mail = $rd->input('newsletter-mail');
        if (empty($user_mail) || !filter_var($user_mail,FILTER_VALIDATE_EMAIL)) {
            $errorMsg = "Es ist ein Fehler aufgetreten. Bitte geben Sie eine gültige E-Mail-Adresse ein";
            session()->put('errMsg',$errorMsg);
            return \redirect()->action([HomeController::class,'index']);
        }
        try {
            Newsletter::query()->where('email',$user_mail)->firstOrFail();
            $errorMsg = "Sie haben sich bereits mit dieser E-Mail-Adresse registriert";
            session()->put('errMsg',$errorMsg);
        }catch (ModelNotFoundException $exception) {
            $newsletter = new Newsletter();
            $newsletter->email = $user_mail;
            $newsletter->save();
            $successMsg = "Sie haben sich erfolgreich für unseren Newsletter angemeldet";
            session()->put('successMsg',$successMsg);
        }
        return \redirect()->action([HomeController::class,'index']);
    }
}
