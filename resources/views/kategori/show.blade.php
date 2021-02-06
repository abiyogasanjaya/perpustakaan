@extends('master')
@section('header', 'Kategori Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Nama Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control input-default" id="kategori" name="kategori"
                            value="{{ $kategori->kategori  }}" readonly>
                    </div>
                </div>
                <br>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a type="button" class="btn btn-danger" href="{{'/kategori'}}"
                            style="decoration:none;">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection