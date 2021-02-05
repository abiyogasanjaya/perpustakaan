<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Profil;
class ProfilController extends Controller
{
    //
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
    public function index () {
        //dengan Model ORM 
        $profil = Profil::all();
        return view('profil.index', compact ('profil'));
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
    public function update($profil_id, Request $request){
        
        $update = Profil::where('id', $profil_id)->update([
            "nama_lengkap"=> $request["nama_lengkap"],
            "alamat"=> $request["alamat"],
            "nomorhp"=> $request["nomorhp"]
        ]);

        return redirect ('/profil')->with('sukses', 'Data berhasil DiUPDATE');
    }
    public function destroy ($profil_id) {
        Profil::destroy($profil_id);
        return redirect ('/profil')->with('sukses', 'Data berhasil diHAPUS');
    }

}
