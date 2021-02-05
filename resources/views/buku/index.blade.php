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
              <a class="btn btn-primary mb-2" href="{{route('buku.create')}}">Tambah Data </a>
                <div class="card-title">
                    <h4>Buku</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul Buku</th>
                                <th>Penerbit </th>
                                <th>Pengarang</th>
                                <th>Tahun</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($buku as $key => $book)
                            <tr>
                            <td> {{ $key + 1}} </td>
                            <td> {{ $book->judul }} </td>
                            <td> {{ $book->penerbit }} </td>
                            <td> {{ $book->pengarang }}</td>
                            <td> {{ $book->tahun }}</td>
                            <td style="display:flex">
                            <a href="/buku/{{$book->id}}" class="btn btn-success btn-sm">Tampil</a>
                            <a href="/buku/{{$book->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                                <form action="/buku/{{$book->id}}" method="POST">
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