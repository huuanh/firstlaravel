<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SessionController extends Controller
{
    //
    public function login() {
        return view('sessions.login');
    }

    public function logout() {

    }
}
