<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    //
    protected $table = "kategoris";

    protected $guarded = [];
    public function buku()
    {
        return $this->hasMany('App\Buku','kategori_id','id');
    }
}