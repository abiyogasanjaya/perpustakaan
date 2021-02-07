<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Users;
use DB;
use Session;

class PenggunaController extends Controller
{
    //
    public function noakses(){
        Session::flash('message', 'Login');
        return redirect('/');
    }
    public function granted(){
        if (Session::get('login')) {
            return true;
        } else {
            return false;
        }
    }

    public function index(){
        if ($this->granted()){
            $pengguna = DB::table('profils')
                    ->select('profils.*', 'users.id as userid' ,'users.name as name', 'users.email as email', 'users.password as password', 'users.level_user as level')
                    ->rightJoin('users', 'profils.users_id', '=', 'users.id')
                    ->get();
            return view('pengguna.index', compact('pengguna'));
        } else {
            return $this->noakses();
        }
    }

    public function show($pengguna_id)
    {
        //
        if ($this->granted()){
            $data['user'] = Users::where('id', $pengguna_id)->get();
            $data['profil'] = Profil::where('users_id', $pengguna_id)->get();
            return view('pengguna.show', $data);
        }else {
            return $this->noakses();
        }                               
    }

    public function destroy($id)
    {
        //
        $hapusUser = Users::destroy($id);
        $hapusProfil = Profil::destroy($id);
        if (isset($hapusProfil)) {
            Session::flash('message','Hapus');
        } else {
            Session::flash('message','Gagal');
        }
        return redirect ('/pengguna');
    }
}