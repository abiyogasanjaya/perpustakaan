<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use Session;

class LoginController extends Controller
{
    //
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
            return view('loginform');
        }
    }

    public function dologin(Request $request){
        $user = $request->email;
        $pass = md5($request->password);
        $data = Users::where('email','=',$user)->get();
        if (!$data->isEmpty()) {
            foreach ($data as $p){
                if ($pass == $p->password) {
                    $request->session()->put('login',TRUE);
                    $request->session()->put('nama',$p->name);
                    $request->session()->put('level_user',$p->level_user);
                    $request->session()->put('id',$p->id);
                    $request->session()->put('email',$p->email);
                    // $berkas = tb_berkas::where('id_user','=',Session::get('id'))->get();
                    // foreach ($berkas as $key) {
                    //     $request->session()->put('foto',$key->foto);
                    // }
                    // Session::flash('message', 'SuksesLogin');
                } else {
                    // Session::flash('message', 'GagalLogin'); 
                }
            }
        } else {
            Session::flash('message', 'Salah'); 
        }
    	return redirect("dashboard");
    }

    public function dologout(){
        Session::flush();
        return redirect('/');
    }
}