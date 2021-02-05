<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
class KategoriController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $kategori = Kategori::all();
        return view('kategori.index', compact ('kategori'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('kategori.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate ([
            "nama"=>"required"
            // "penerbit"=>"required"
        ]);

        $kategori = Kategori::create([
            "nama"=> $request["nama"]
            //  "penerbit"=> $request["penerbit"],
            //  "pengarang"=> $request["pengarang"], 
            //  "tahun"=> $request["tahun"]            
        ]);
        
        return redirect ('/kategori')->with('sukses', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $kategori = Kategori::find($id);
        //    dd($profil);                                 
        return view('kategori.show', compact('kategori'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kategori = Kategori::find($id);                                   //ORM Model
        return view('kategori.edit', compact('kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $update = Kategori::where('id', $id)->update([
            "nama"=> $request["nama"]
            //  "penerbit"=> $request["penerbit"],
            //  "pengarang"=> $request["pengarang"], 
            //  "tahun"=> $request["tahun"]  
        ]);

        return redirect ('/kategori')->with('sukses', 'Data berhasil DiUPDATE');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Kategori::destroy($id);
        return redirect ('/kategori')->with('sukses', 'Data berhasil diHAPUS');
    }
}
