<?php
namespace App\Http\Controllers;


use App\Http\Controllers\Auth\AuthController;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

class ProfileController extends BaseController {
    public function showProfile() {
        if (!session()->get('login')) {
            return \redirect()->action([AuthController::class,'login']);
        }
    }
}
