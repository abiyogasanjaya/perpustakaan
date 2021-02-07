@extends('master')
@section('header', 'Daftar Pengguna')
@section('konten')

@foreach ($user as $user)
@php
$name = $user->name;
$email = $user->email;
$role = $user->level_user;
@endphp
@endforeach

@php
if($role === '1'){
$rule = "Administrator";
} else {
$rule = "Anggota";
}
$alamat = '';
$nomorhp = '';
@endphp

@foreach($profil as $profil)
@php
$alamat = $profil->alamat;
$nomorhp = $profil->nomorhp;
@endphp
@endforeach

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="nama" name="nama" value="{{$name}}"
                            readonly require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="email" name="email" value="{{$email}}"
                            readonly require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default"
                            placeholder="~ Belum ditentukan pengguna ~" id="alamat" name="alamat" value="{{$alamat}}"
                            readonly require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Nomor Hp/Telp</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control input-default"
                            placeholder="~ Belum ditentukan pengguna ~" id="nomorhp" name="nomorhp" value="{{$nomorhp}}"
                            readonly require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Role User</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="role" name="role" value="{{$rule}}"
                            readonly require>
                    </div>
                </div>
                <br>
                <hr>
                <div class="form-group row">
                    <div class="col-md-10" style=" display:flex">
                        <a type="button" class="btn btn-danger" href="{{'/pengguna'}}"
                            style="decoration:none;">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection