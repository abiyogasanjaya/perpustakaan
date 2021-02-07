<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = "bukus";

    protected $guarded = [];
    public function pinjam_buku()
    {
        return $this->hasMany('App\Peminjaman','bukus_id','id');
    }
}