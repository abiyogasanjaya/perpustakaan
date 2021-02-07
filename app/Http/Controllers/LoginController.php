<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Users;
use App\Buku;
use App\Transaksi;
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
            $data['users'] = Users::where('level_user', '2')->count();
            $data['buku'] = Buku::count();
            $data['pinjam'] = Transaksi::count();
            return view('dashboard', $data);
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

    public function register(){
        return view('registerform');
    }

    public function doregister(Request $request){
        if (Users::where('email', '=', $request->email)
                ->exists()) {
            Session::flash('message','Peringatan');
        } else {
            Users::create([ 
                "name"=> $request["nama"],
                "email"=> $request["email"],
                "password"=> md5($request["password"]),
                "remember_token"=> md5(date('Y-m-d H:i:s').rand(1000,9999)), 
                "level_user"=> 2           
            ]);
        }
        return redirect('/');
    }
}