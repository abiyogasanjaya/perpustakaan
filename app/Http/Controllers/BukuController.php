<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Buku;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $buku = Buku::all();
        return view('buku.index', compact ('buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('buku.create');
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
            "judul"=>"required"
            // "penerbit"=>"required"
        ]);

        $buku = Buku::create([
            "judul"=> $request["judul"],
             "penerbit"=> $request["penerbit"],
             "pengarang"=> $request["pengarang"], 
             "tahun"=> $request["tahun"]            
        ]);
        
        return redirect ('/buku')->with('sukses', 'Data berhasil diinput');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($buku_id)
    {
        //
        $buku = Buku::find($buku_id);
        //    dd($profil);                                 
        return view('buku.show', compact('buku'));
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
        $buku = Buku::find($id);                                   //ORM Model
        return view('buku.edit', compact('buku'));
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
        $update = Buku::where('id', $id)->update([
            "judul"=> $request["judul"],
             "penerbit"=> $request["penerbit"],
             "pengarang"=> $request["pengarang"], 
             "tahun"=> $request["tahun"]  
        ]);

        return redirect ('/buku')->with('sukses', 'Data berhasil DiUPDATE');
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
        Buku::destroy($id);
        return redirect ('/buku')->with('sukses', 'Data berhasil diHAPUS');
    }
}
