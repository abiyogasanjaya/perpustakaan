@extends('master')

@section('konten')
<div class="mt-3">
<div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Kategori {{$kategori->id}} </h4>
                <div class="basic-form">
                    <form action="/kategori/{{$kategori->id}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Kateogir</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="nama" name="nama" value ="{{ old('nama', $kategori->nama) }}" >
                                @error('nama')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
<!--                          -->
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