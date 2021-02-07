<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Session;
use App\Users;
use App\Buku;
use App\Transaksi;

class TransaksiController extends Controller
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

    public function index()
    {
        //
        if ($this->granted()){
            $data['pinjam_admin'] = DB::table('peminjaman_tables')
                            ->select('peminjaman_tables.*', 'users.id as userid', 'users.name', DB::RAW('COUNT(peminjaman_tables.id) as total'))
                            ->join('users', 'peminjaman_tables.users_id', '=', 'users.id')
                            ->groupBy('peminjaman_tables.users_id')
                            ->get();
            $data['pinjam_user'] = DB::table('peminjaman_tables')
                            ->select('peminjaman_tables.*', 'bukus.judul', DB::RAW('DATEDIFF(tanggal_kembali, tanggal_pinjam) AS lama_pinjam'))
                            ->join('bukus', 'peminjaman_tables.bukus_id', '=', 'bukus.id')
                            ->where('peminjaman_tables.users_id', '=', Session::get('id'))
                            ->get();
            return view('peminjaman.index', $data);
        }else {
            return $this->noakses();
        }
    }

    public function show($id)
    {
        //
        if ($this->granted()){
            $data['names'] = Users::where('id', $id)->get();
            $data['pinjam_detail'] = DB::table('peminjaman_tables')
                            ->select('peminjaman_tables.*', 'bukus.judul', DB::RAW('DATEDIFF(tanggal_kembali, tanggal_pinjam) AS lama_pinjam'))
                            ->join('users', 'peminjaman_tables.users_id', '=', 'users.id')
                            ->join('bukus', 'peminjaman_tables.bukus_id', '=', 'bukus.id')
                            ->where('users_id', $id)
                            ->get();
            return view('peminjaman.show', $data);
        } else {
            return $this->noakses();
        }
    }

    public function create()
    {
        //
        if ($this->granted()){
            $data['users'] = Users::all();
            $data['bukus'] = Buku::all();
            return view('peminjaman.create', $data);
        }else {
            return $this->noakses();
        }
    }

    public function store(Request $request)
    {
        $tanggalPinjam = $request->tanggal_pinjam;
        $tanggalKembali = $request->tanggal_kembali;
        $CPinjam = date("Y-m-d", strtotime($tanggalPinjam));
        $CKembali = date("Y-m-d", strtotime($tanggalKembali));
        if ($request->type == 1) {
            $pinjam = Transaksi::create([
                "users_id" => $request["user"],
                "bukus_id" => $request["buku"],
                "tanggal_pinjam" => $CPinjam,
                "tanggal_kembali" => $CKembali
            ]);
            if ($pinjam->save()) {
                    Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
        } elseif ($request->type == 2) {
            $pinjam = Transaksi::create([
                "users_id" => Session::get('id'),
                "bukus_id" => $request["buku"],
                "tanggal_pinjam" => $CPinjam,
                "tanggal_kembali" => $CKembali
            ]);
            if ($pinjam->save()) {
                    Session::flash('message','Sukses');
            } else {
                Session::flash('message','Gagal');
            }
        }
        return redirect ('/pinjam');
    }
}