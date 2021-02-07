<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
use App\Users;
use DB;
use Session;


class ProfilController extends Controller
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

    public function index () {
        if ($this->granted()){
            $data['user'] = Users::where('id', Session::get('id'))->get();
            $data['profil'] = Profil::where('users_id', Session::get('id'))->get();
            return view('profil.index', $data);
        }else {
            return $this->noakses();
        }
    }
    
    public function update($profil_id, Request $request){
        if ($this->granted()){
            $update = Users::where('id', $profil_id)
                ->update([
                    "name" => $request["nama"],
                ]);
            if (Profil::where('users_id', $profil_id)->exists()) {
                Profil::where('id', $profil_id)
                    ->update([
                        "alamat" => $request['alamat'],
                        "nomorhp" => $request['nomorhp'],
                    ]);
            } else {
                Profil::create([
                    "alamat"=> $request["alamat"],
                    "nomorhp"=> $request["nomorhp"],
                    "users_id"=> $profil_id,
                ]);
            }
            if (isset($update)) {
                Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
            return redirect ('/profil');
        }else {
            return $this->noakses();
        }
    }

    
    public function create () {
        return view('profil.create');
    }
    public function store(Request $request){
        // dd($request->all());
        $request->validate ([
            "nama_lengkap"=>"required",
            "alamat"=>"required"
        ]);

        $profil = Profil::create([
            "nama_lengkap"=> $request["nama_lengkap"],
             "alamat"=> $request["alamat"],
             "nomorhp"=> $request["nomorhp"]            
        ]);
        
        return redirect ('/profil')->with('sukses', 'Data berhasil diinput');
    }

    
    public function show ($profil_id){
           $profil = Profil::find($profil_id);
        //    dd($profil);                                 
        return view('profil.show', compact('profil'));
    }
    public function edit ($profil_id) {
        // $tanya = DB::table('pertanyaan')->where('id', $pertanyaan_id)->first(); //query builder 
        $profil = Profil::find($profil_id);                                   //ORM Model
        return view('profil.edit', compact('profil'));
    }
    public function destroy ($profil_id) {
        Profil::destroy($profil_id);
        return redirect ('/profil')->with('sukses', 'Data berhasil diHAPUS');
    }

}