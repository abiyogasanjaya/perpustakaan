@extends('master')

@section('konten')

<div class="mt-3">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-body">
              @if (session('sukses'))
                <div class="alert alert-success">
                  {{ session('sukses') }}
                </div>
              @endif
              <a class="btn btn-primary mb-2" href="{{route('kategori.create')}}">Tambah Data </a>
                <div class="card-title">
                    <h4>Kategori</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Kategori</th>
                                <!-- <th>Penerbit </th>
                                <th>Pengarang</th>
                                <th>Tahun</th> -->
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($kategori as $key => $cat)
                            <tr>
                            <td> {{ $key + 1}} </td>
                            <td> {{ $cat->nama }} </td>
                            
                            <td style="display:flex">
                            <a href="/kategori/{{$cat->id}}" class="btn btn-success btn-sm">Tampil</a>
                            <a href="/kategori/{{$cat->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                                <form action="/kategori/{{$cat->id}}" method="POST">
                                    @csrf 
                                    @method('Delete')
                                    <input type="submit" value="Hapus" class="btn btn-danger btn-sm">
                                </form>
                            </td>
                            </tr>
                        @empty
                            <tr>
                            <td colspan=4> Tidak Ada Data </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection