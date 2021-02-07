<?php

namespace App\Http\Controllers;

//export Excell
use App\Exports\bukusExport;
use Maatwebsite\Excel\Facades\Excel;


use Illuminate\Http\Request;
use App\Buku;
use App\Kategori;
use Session;
use DB;

class BukuController extends Controller
{

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
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        if ($this->granted()){
            $buku = DB::table('bukus')
                    ->select('bukus.*', 'kategoris.kategori')
                    ->join('kategoris', 'bukus.id', '=', 'kategoris.id')
                    ->get();
            return view('buku.index', compact ('buku'));
        }else {
            return $this->noakses();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if ($this->granted()){
            $kategori = Kategori::all();
            return view('buku.create', compact('kategori'));
        }else {
            return $this->noakses();
        }
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
        if (Buku::where('judul', '=', $request->judul)
            ->where('kategori_id', '=', $request->kategori)
            ->where('penerbit', '=', $request->penerbit)
            ->where('pengarang', '=', $request->pengarang)
            ->where('tahun', '=', $request->tahun)
            ->exists()) {
            Session::flash('message','Peringatan');
        } else {
            $buku = Buku::create([
                "judul"=> $request["judul"],
                "kategori_id"=> $request["kategori"],
                "penerbit"=> $request["penerbit"],
                "pengarang"=> $request["pengarang"], 
                "tahun"=> $request["tahun"]            
            ]);
            if ($buku->save()) {
                Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
        }    
        return redirect ('/buku');
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
        if ($this->granted()){
            $buku = DB::table('bukus')
                        ->select('bukus.*', 'kategoris.kategori')
                        ->join('kategoris', 'kategoris.id', '=', 'bukus.kategori_id')
                        ->where('bukus.id', $buku_id)
                        ->first();                               
            return view('buku.show', compact('buku'));
        }else {
            return $this->noakses();
        }
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
        if ($this->granted()){
            $data['buku'] = DB::table('bukus')
                            ->select('bukus.*', 'kategoris.kategori', 'kategoris.kategori as id_kat')
                            ->join('kategoris', 'kategoris.id', '=', 'bukus.kategori_id')
                            ->where('bukus.id', $id)
                            ->first();
            $data ['kategori'] = Kategori::all();
            return view('buku.edit', $data);
        }else {
            return $this->noakses();
        }
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
        if (Buku::where('judul', '=', $request->judul)
            ->where('kategori_id', '=', $request->kategori)
            ->where('penerbit', '=', $request->penerbit)
            ->where('pengarang', '=', $request->pengarang)
            ->where('tahun', '=', $request->tahun)
            ->exists()) {
            Session::flash('message','Peringatan');
        } else {
            $update = Buku::where('id', $id)->update([
                "judul"=> $request["judul"],
                "kategori_id"=> $request["kategori"],
                "penerbit"=> $request["penerbit"],
                "pengarang"=> $request["pengarang"], 
                "tahun"=> $request["tahun"]            
            ]);
            if (isset($update)) {
                Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
        }    
        return redirect ('/buku');
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
        $hapus = Buku::destroy($id);
        if (isset($hapus)) {
            Session::flash('message','Hapus');
        } else {
            Session::flash('message','Gagal');
        }
        return redirect ('/buku');
    }

    public function export() 
    {
        return Excel::download(new bukusExport, 'listbuku.xlsx');
    }
}