<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $table = "users";
    protected $fillable = ['name','email','password','remember_token','level_user'];
    public function profil()
    {
        return $this->hasOne('App\Profil','users_id','id');
    }
    public function pinjam_user()
    {
        return $this->hasMany('App\Peminjaman','users_id','id');
    }
}