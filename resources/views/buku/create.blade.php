@extends('master')

@section('konten')
<div class="mt-3">
<div class="col-lg-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Buku</h4>
                <div class="basic-form">
                    <form action="/buku" method="POST">
                        @csrf
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Judul</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan Judul Buku">
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
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
                        <!-- <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input type="password" class="form-control" placeholder="Password">
                            </div>
                        </div>
                        <fieldset class="form-group">
                            <div class="row">
                                <label class="col-form-label col-sm-2 pt-0">Radios</label>
                                <div class="col-sm-10">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" value="option1" checked="checked">
                                        <label class="form-check-label">First radio</label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="gridRadios" value="option2">
                                        <label class="form-check-label">Second radio</label>
                                    </div>
                                    <div class="form-check disabled">
                                        <input class="form-check-input" type="radio" name="gridRadios" value="option3" disabled="disabled">
                                        <label class="form-check-label">Third disabled radio</label>
                                    </div>
                                </div>
                            </div>
                        </fieldset>
                        <div class="form-group row">
                            <div class="col-sm-2">Checkbox</div>
                            <div class="col-sm-10">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox">
                                    <label class="form-check-label">Example checkbox</label>
                                </div>
                            </div>
                        </div> -->
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