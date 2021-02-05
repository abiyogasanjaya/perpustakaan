@extends('master')

@section('konten')
<div class="mt-3">
<h3> {{ $buku->judul }} </h3> 
<p> {{ $buku->pengarang }} </p>
<p> {{ $buku->penerbit }} </p>
</div>
@endsection