@extends('master')

@section('konten')
<div class="mt-3">
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kategori</h4>
                <div class="basic-form">
                    <form action="/kategori" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Kategori</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama Kategori">
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<!--                         
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penerbit </label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" placeholder="penerbit">
                                @error('penerbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pengarang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pengarang" name="pengarang" placeholder="pengarang">
                                @error('pengarang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun" name="tahun" placeholder="tahun">
                                @error('tahun')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                         -->
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark">Tambahkan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection