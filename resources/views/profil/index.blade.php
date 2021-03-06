@extends('master')
@section('header', 'Profil Pengguna')
@section('konten')

@php
$id = Session::get('id');
$name = "";
$email = "";
$alamat = "";
$nomorhp = "";
@endphp

@foreach ($user as $user)
@php
$name = $user->name;
$email = $user->email;
@endphp
@endforeach

@foreach($profil as $profil)
@php
$alamat = $profil->alamat;
$nomorhp = $profil->nomorhp;
@endphp
@endforeach

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form action="/profil/{{$id}}" method="post">
                @csrf
                @method('PUT')
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
                <br>
                <hr>
                <div class="form-group row">
                    <div class="col-md-10" style=" display:flex">
                        <button type="button" id="update_btn" class="btn btn-primary" onclick="updateprofil()"
                            style="decoration:none;">Perbaharui
                            Profil</button>
                        <button type="button" id="batal_btn" class="btn btn-danger" onclick="batalupdate()"
                            style="decoration:none; display:none;">Batal</button>
                        &nbsp;
                        <button type="submit" id="simpan_btn" class="btn btn-primary"
                            style="decoration:none; display:none;">Simpan Perubahan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@section('js')
<script>
function updateprofil() {
    var perbaharui = document.getElementById("update_btn");
    var batal = document.getElementById("batal_btn");
    var simpan = document.getElementById("simpan_btn");
    perbaharui.style.display = "none";
    batal.style.display = "block";
    simpan.style.display = "block";
    document.getElementById("nama").readOnly = false;
    document.getElementById("alamat").readOnly = false;
    document.getElementById("nomorhp").readOnly = false;
}

function batalupdate() {
    var perbaharui = document.getElementById("update_btn");
    var batal = document.getElementById("batal_btn");
    var simpan = document.getElementById("simpan_btn");
    perbaharui.style.display = "block";
    batal.style.display = "none";
    simpan.style.display = "none";
    document.getElementById("nama").readOnly = true;
    document.getElementById("alamat").readOnly = true;
    document.getElementById("nomorhp").readOnly = true;
}
</script>
@endsection