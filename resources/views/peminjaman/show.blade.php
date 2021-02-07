@extends('master')
@section('header', 'Peminjaman Buku')
@section('konten')

@foreach($names as $a)
@php
$name = $a->name;
@endphp
@endforeach

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="kategori" name="kategori"
                            value="{{ $name }}" readonly>
                    </div>
                </div>
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered zero-configuration">
                        <thead>
                            <tr class="text-center">
                                <th width="3%">No</th>
                                <th>Judul Buku</th>
                                <th width="15%">Tanggal Pinjam</th>
                                <th width="15%">Tanggal Kembali</th>
                                <th width="15%">Lama Pinjam</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pinjam_detail as $key => $pinjam)
                            <tr>
                                <td class="text-center"> {{ $key + 1}} </td>
                                <td>{{ $pinjam->judul }} </td>
                                <td class="text-center">{{ $pinjam->tanggal_pinjam }}</td>
                                <td class="text-center">{{ $pinjam->tanggal_kembali }}</td>
                                <td class="text-center">{{ $pinjam->lama_pinjam }} hari</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <br>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a type="button" class="btn btn-danger" href="{{'/pinjam'}}"
                            style="decoration:none;">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection