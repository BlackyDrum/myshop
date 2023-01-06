<?php

namespace App\Http\Controllers\Auth;

require_once($_SERVER['DOCUMENT_ROOT'].'/../app/Models/Auth.php');
require_once($_SERVER['DOCUMENT_ROOT'].'/../app/Models/Newsletter.php');


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class AuthController extends BaseController {
    public function login() {
        if (session()->get('login')) {
            return \redirect()->action([ProfileController::class,'showProfile']);
        }

        return view('auth.login', [
            'errMsg' => session()->pull('errMsg')
        ]);
    }

    public function registration() {
        if (session()->get('login')) {
            return \redirect()->action([ProfileController::class,'showProfile']);
        }

        return view('auth.registration', [
            'errMsg' => session()->pull('errMsg')
        ]);
    }

    public function registration_verification(Request $rd) {
        $gender = $rd->input('gender') ?? NULL;
        $forename = $rd->input('forename') ?? NULL;
        $surname = $rd->input('surname') ?? NULL;
        $email = $rd->input('email') ?? NULL;
        $password = $rd->input('password') ?? NULL;
        $checkbox = $rd->input('checkbox') ?? NULL;

        if (!$gender || !$forename || !$surname || !$email || !$password) {
            $errMsg = "Es ist ein Fehler aufgetreten";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'registration']);
        }
        if ($gender != 'f' && $gender != 'm') {
            $errMsg = "Es ist ein Fehler aufgetreten";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'registration']);
        }
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)) {
            $errMsg = "Bitte geben Sie eine gültige E-Mail-Adresse ein";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'registration']);
        }
        if (strlen($password) < 6) {
            $errMsg = "Mind. 6 Zeichen für das Passwort";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'registration']);
        }

        $isNotInDatabase = \Auth::checkIfEmailIsInDatabase($email);

        if (!$isNotInDatabase) {
            $errMsg = "Die E-Mail ist bereits bei uns registriert";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'registration']);
        }

        $passwort_hashed = password_hash($password,PASSWORD_DEFAULT);


        \Auth::insertUserIntoDatabase($gender,$forename,$surname,$email,$passwort_hashed);
        if (!empty($checkbox)) {
            \Newsletter::insertMailIntoDatabase($email);
        }
        return \redirect()->action([AuthController::class,'login']);

    }
    public function login_verification(Request $rd) {
        $email = $rd->input('email');
        $password = $rd->input('password');

        if (!filter_var($email,FILTER_VALIDATE_EMAIL) || \Auth::checkIfEmailIsInDatabase($email)) {
            $errMsg = "E-Mail-Adresse oder Passwort falsch";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'login']);
        }
        $user_data = (\Auth::getUserData($email))[0];
        if (!password_verify($password,$user_data->password)) {
            $errMsg = "E-Mail-Adresse oder Passwort falsch";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'login']);
        }

        session()->put('login',true);
        session()->put('uid',$user_data->id);
        session()->put('name',$user_data->forename);
        session()->put('admin',$user_data->admin);


        return \redirect()->action([HomeController::class,'index']);
    }

    public function sign_out() {
        session()->flush();
        session_regenerate_id();
        return \redirect()->action([HomeController::class,'index']);
    }
}
