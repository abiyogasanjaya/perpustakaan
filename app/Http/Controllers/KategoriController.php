<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Kategori;
use Session;

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
            "kategori"=>"required"
        ]);

        if (Kategori::where('kategori', '=', $request->kategori)->exists()) {
            Session::flash('message','Peringatan');
        } else {
            $kategori = Kategori::create([
                "kategori"=> $request["kategori"]       
            ]);
            if ($kategori->save()) {
                Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
        }
        return redirect ('/kategori');
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
        return view('kategori.show', compact('kategori'));
        //    dd($profil);                                 
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
        if (Kategori::where('kategori', '=', $request->kategori)->exists()) {
            Session::flash('message','Peringatan');
        } else {
            $update = Kategori::where('id', $id)->update([
                "kategori"=> $request["kategori"]
            ]);
            if (isset($update)) {
                Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
        }
        return redirect ('/kategori');
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
        $hapus = Kategori::destroy($id);
        if (isset($hapus)) {
            Session::flash('message','Hapus');
        } else {
            Session::flash('message','Gagal');
        }
        return redirect ('/kategori');
    }
}