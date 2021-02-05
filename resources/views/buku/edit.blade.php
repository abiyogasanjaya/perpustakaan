@extends('master')

@section('konten')
<div class="mt-3">
<div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Buku {{$buku->id}} </h4>
                <div class="basic-form">
                    <form action="/buku/{{$buku->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Judul Buku</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="judul" name="judul" value ="{{ old('judul', $buku->judul) }}" placeholder="Buku">
                                @error('judul')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Penerbit</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="penerbit" name="penerbit" value ="{{ old('penerbit', $buku->penerbit) }}" placeholder="penerbit">
                                @error('penerbit')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Pengarang</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="pengarang" name="pengarang" value ="{{ old('pengarang', $buku->pengarang) }}" placeholder="pengarang">
                                @error('pengarang')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Tahun</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="tahun" name="tahun" value ="{{ old('tahun', $buku->tahun) }}" placeholder="tahun">
                                @error('tahun')
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