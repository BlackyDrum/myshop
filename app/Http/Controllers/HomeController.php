<?php
namespace App\Http\Controllers;

require_once($_SERVER['DOCUMENT_ROOT'].'/../app/Models/Newsletter.php');

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;

class HomeController extends BaseController
{
    public function index() {
        return view('home',[
            'errorMsg' => NULL
        ]);
    }

    public function newsletter(Request $rd) {
        $user_mail = $rd->input('newsletter-mail');
        $errorMsg = NULL;
        if (empty($user_mail) || !filter_var($user_mail,FILTER_VALIDATE_EMAIL)) {
            $errorMsg = "Es ist ein Fehler aufgetreten. Bitte geben Sie eine gültige E-Mail-Adresse ein";
            return \redirect('/')->with('errorMsg',$errorMsg);
        }
        $isNotInDatabase = \Newsletter::checkIfEmailIsInDatabase($user_mail);
        if ($isNotInDatabase) {
            \Newsletter::insertMailIntoDatabase($user_mail);
        }
        else {
            $errorMsg = "Sie haben sich bereits mit dieser E-Mail registriert";
        }
        return \redirect('/')->with('errorMsg',$errorMsg);


    }
}
