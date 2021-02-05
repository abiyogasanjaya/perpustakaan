@extends('master')

@section('konten')
<div class="mt-3">
<h3> {{ $profil->nama_lengkap }} </h3> 
<p> {{ $profil->alamat }} </p>
<p> {{ $profil->nomorhp }} </p>
</div>
@endsection