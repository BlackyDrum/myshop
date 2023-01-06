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
use Illuminate\Support\Facades\DB;

class HomeController extends BaseController
{
    public function index() {
        $errMsg = $_SESSION['errMsg'] ?? NULL;
        $successMsg = $_SESSION['successMsg'] ?? NULL;
        unset($_SESSION['errMsg']);
        unset($_SESSION['successMsg']);
        return view('home',[
            'errorMsg' => $errMsg,
            'successMsg' => $successMsg
        ]);
    }

    public function newsletter(Request $rd) {
        sleep(1);
        $user_mail = $rd->input('newsletter-mail');
        if (empty($user_mail) || !filter_var($user_mail,FILTER_VALIDATE_EMAIL)) {
            $errorMsg = "Es ist ein Fehler aufgetreten. Bitte geben Sie eine gültige E-Mail-Adresse ein";
            $_SESSION['errMsg'] = $errorMsg;
            return \redirect()->action([HomeController::class,'index']);
        }
        DB::beginTransaction();
        $isNotInDatabase = \Newsletter::checkIfEmailIsInDatabase($user_mail);
        if ($isNotInDatabase) {
            \Newsletter::insertMailIntoDatabase($user_mail);
            DB::commit();
            $successMsg = "Sie haben sich erfolgreich für unseren Newsletter angemeldet";
            $_SESSION['successMsg'] = $successMsg;
        }
        else {
            DB::rollBack();
            $errorMsg = "Sie haben sich bereits mit dieser E-Mail-Adresse registriert";
            $_SESSION['errMsg'] = $errorMsg;
        }
        return \redirect()->action([HomeController::class,'index']);
    }
}
