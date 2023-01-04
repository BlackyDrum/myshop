<?php
use Illuminate\Support\Facades\DB;

class Newsletter {
    public static function checkIfEmailIsInDatabase($user_mail) : bool {
        $result = DB::select('SELECT * FROM newsletter WHERE email=?',[$user_mail]);
        return empty($result);
    }
    public static function insertMailIntoDatabase($user_mail) : void {
        DB::insert('INSERT INTO newsletter(email) VALUES (?)',[$user_mail]);
    }
}
