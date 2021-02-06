@extends('master')
@section('header', 'Daftar Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="judul" name="judul"
                            placeholder="Judul Buku" readonly value="{{$buku->judul}}">
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-5">
                        <input type="text" class="form-control input-default" id="kategori" name="kategori"
                            placeholder="Kategori" readonly value="{{$buku->kategori}}">
                    </div>
                    <label class="col-sm-2 col-form-label text-center">Tahun Terbit</label>
                    <div class="col-sm-3">
                        <input type="number" min="1945" class="form-control input-default" id="tahun" name="tahun"
                            placeholder="Tahun" readonly value="{{$buku->tahun}}">
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="penerbit" name="penerbit"
                            placeholder="Penerbit Buku" readonly value="{{$buku->penerbit}}">
                    </div>
                </div>
                <div class=" form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="pengarang" name="pengarang"
                            placeholder="Pengarang Buku" readonly value="{{$buku->pengarang}}">
                    </div>
                </div>
                <br>
                <hr>
                <div class=" form-group row">
                    <div class="col-sm-10">
                        <a type="button" class="btn btn-danger" href="{{'/buku'}}" style="decoration:none;">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection