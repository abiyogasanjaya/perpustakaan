<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Buku;
use App\Transaksi;
use DB;
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
            $data['users'] = Users::where('level_user', '2')->count();
            $data['buku'] = Buku::count();
            $data['pinjam'] = Transaksi::count();
            return view('dashboard', $data);
        } else {
            Session::flash('message', 'Login');
            return view('loginform');
        }
    }
}