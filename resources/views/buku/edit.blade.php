@extends('master')
@section('header', 'Daftar Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form action="/buku/{{$buku->id}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="judul" name="judul"
                            placeholder="Judul Buku" value="{{$buku->judul}}" require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-5">
                        <select class="form-control" id="kategori" name="kategori" required>
                            <option value="{{$buku->id_kat}}" selected>{{$buku->kategori}}</option>
                            <option value="" disabled>-- Pilih Kategori --</option>
                            @foreach ($kategori as $kategori)
                            <option value="{{$kategori->id}}">{{$kategori->kategori}}</option>
                            @endforeach
                        </select>
                    </div>
                    <label class="col-sm-2 col-form-label text-center">Tahun Terbit</label>
                    <div class="col-sm-3">
                        <input type="number" min="1945" class="form-control input-default" id="tahun" name="tahun"
                            placeholder="Tahun" value="{{$buku->tahun}}" require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Penerbit</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="penerbit" name="penerbit"
                            placeholder="Penerbit Buku" value="{{$buku->penerbit}}" require>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Pengarang</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="pengarang" name="pengarang"
                            placeholder="Pengarang Buku" value="{{$buku->pengarang}}" require>
                    </div>
                </div>
                <br>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a type="button" class="btn btn-danger" href="{{'/buku'}}" style="decoration:none;">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection