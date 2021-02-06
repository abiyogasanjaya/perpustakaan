<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Buku;

class CetakController extends Controller
{
    public function listbuku () {
        $list = Buku::all();
        // dd($buku);
        $pdf = PDF::loadView('buku.cetak', compact('list'));
       
        return $pdf->download('listbuku.pdf');
    }
}
