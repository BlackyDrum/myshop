<?php
use Illuminate\Support\Facades\DB;

class Auth {
    public static function checkIfEmailIsInDatabase($user_mail) : bool {
        $result = DB::select('SELECT * FROM users WHERE email=?',[$user_mail]);
        return empty($result);
    }
    public static function insertUserIntoDatabase($gender,$forename,$surname,$email,$password) {
        DB::insert('INSERT INTO users(surname,forename,email,password,gender) VALUES (?,?,?,?,?)',[$surname,$forename,$email,$password,$gender]);
    }
    public static function getUserData($email) {
        $result = DB::select('SELECT * FROM users WHERE email=?',[$email]);
        return $result;
    }

}
