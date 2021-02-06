<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class DashboardController extends Controller
{
    public function islogin(){
        if (Session::get('login')) {
            return true;
        } else {
            return false;
        }
    }

    public function index(){
    	if ($this->islogin()) {
            return view('dashboard');
        } else {
            Session::flash('message', 'Login');
            return view('loginform');
        }
    }
}