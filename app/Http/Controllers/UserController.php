<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class UserController extends Controller
{
    //
    public function user_logout(){
        session_start();
        session_unset(); 
        session_destroy();
        Auth::logout();
        return response()->json(['result' => "1"]);
    }
}
