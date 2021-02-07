@extends('master')
@section('header', 'Dashboard')
@section('konten')

<div class="row">
    @if(Session::get('level_user') == 1)
    <div class="col-lg-12 col-sm-6">
        <div class="card gradient-1">
            <div class="card-body">
                <h3 class="card-title text-white">Total Peminjaman Buku</h3>
                <div class="d-inline-block">
                    <h1 class="text-white">
                        {{$pinjam}}
                    </h1>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-shopping-cart"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card gradient-2">
            <div class="card-body">
                <h3 class="card-title text-white">Total Buku</h3>
                <div class="d-inline-block">
                    <h1 class="text-white">
                        {{$buku}}
                    </h1>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-book"></i></span>
            </div>
        </div>
    </div>
    <div class="col-lg-6 col-sm-6">
        <div class="card gradient-3">
            <div class="card-body">
                <h3 class="card-title text-white">Total Anggota Perpustakaan</h3>
                <div class="d-inline-block">
                    <h1 class="text-white">
                        {{$users}}
                    </h1>
                    <p class="text-white mb-0"></p>
                </div>
                <span class="float-right display-5 opacity-5"><i class="fa fa-users"></i></span>
            </div>
        </div>
    </div>
    @elseif (Session::get('level_user') == 2)
    <div class="col-lg-12 col-sm-6">
        <div class="card">
            <div class="social-graph-wrapper widget-facebook">
                <span class="s-icon"><i class="fa fa-home"></i></span>
            </div>
            <div class="pt-3 pb-3 pl-0 pr-0 text-center">
                <h1 class="m-1 mt-3">Selamat Datang</h1>
                <h1 class="m-1">~ {{Session::get('nama')}} ~</h1>
            </div>
        </div>
    </div>
</div>
@endif
</div>

@endsection