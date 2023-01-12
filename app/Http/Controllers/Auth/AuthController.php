<?php

namespace App\Http\Controllers\Auth;
use App\Models\Auth;
use App\Models\Newsletter;


use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;


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


        $result = Auth::query()->where('email',$email)->first();

        if (!empty($result)) {
            $errMsg = "Die E-Mail ist bereits bei uns registriert";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'registration']);
        }


        $passwort_hashed = password_hash($password,PASSWORD_DEFAULT);

        $user = new Auth();
        $user->gender = $gender;
        $user->forename = $forename;
        $user->surname = $surname;
        $user->email = $email;
        $user->password = $passwort_hashed;
        $user->save();

        if (!empty($checkbox)) {
            Newsletter::query()->where('email',$email)->firstOrCreate([
                'email' => $email
            ]);
        }
        return \redirect()->action([AuthController::class,'login']);

    }
    public function login_verification(Request $rd) {
        $email = $rd->input('email');
        $password = $rd->input('password');

        if (!filter_var($email,FILTER_VALIDATE_EMAIL) || empty(Auth::query()->where("email",$email)->first())) {
            $errMsg = "E-Mail-Adresse oder Passwort falsch";
            session()->put('errMsg',$errMsg);
            return \redirect()->action([AuthController::class,'login']);
        }

        $user_data = Auth::query()->where("email",$email)->first();
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
