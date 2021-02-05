@extends('master')

@section('konten')
<div class="mt-3">
<div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Profil {{$profil->id}} </h4>
                <div class="basic-form">
                    <form action="/profil/{{$profil->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Lengkap</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value ="{{ old('nama_lengkap', $profil->nama_lengkap) }}" placeholder="Nama Lengkap">
                                @error('nama_lengkap')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="alamat" name="alamat" value ="{{ old('alamat', $profil->alamat) }}" placeholder="alamat">
                                @error('alamat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nomor HP</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nomorhp" name="nomorhp" value ="{{ old('nomorhp', $profil->nomorhp) }}" placeholder="Nomor HP">
                                @error('nomorhp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-dark">Update</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection