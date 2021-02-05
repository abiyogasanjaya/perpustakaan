@extends('master')
@section('header', 'Daftar Buku')
@section('konten')
<div class="card">
    <div class="card-body">
        <div class="email-left-box">
            <a href="{{route('buku.create')}}" class="btn btn-primary btn-block">Tambah Data
                Buku</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered zero-configuration">
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Penerbit </th>
                        <th>Pengarang</th>
                        <th>Tahun</th>
                        <th width="5%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($buku as $key => $book)
                    <tr>
                        <td class="text-center"> {{ $key + 1}} </td>
                        <td> {{ $book->judul }} </td>
                        <td> {{ $book->penerbit }} </td>
                        <td> {{ $book->penerbit }} </td>
                        <td> {{ $book->pengarang }}</td>
                        <td class="text-center"> {{ $book->tahun }}</td>
                        <td style="display:flex">
                            <a href="/buku/{{$book->id}}" type="button" class="btn btn-primary"><i
                                    class="icon-magnifier" alt="Tampil"></i></a>
                            &nbsp;
                            <a href="/buku/{{$book->id}}/edit" type="button" class="btn btn-warning"><i
                                    class="icon-pencil" alt="Ubah"></i></a>
                            &nbsp;
                            <a href="#" type="button" class="btn btn-danger"><i class="icon-trash" alt="Hapus"
                                    data-toggle="modal" data-target="#modal-delete-buku{{$book->id}}"></i></a>
                            @include('kategori.popup')
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="text-center">Tidak Ada Data </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection



@section('header', 'Daftar Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        @if (session('sukses'))
        <div class="alert alert-success">
            {{ session('sukses') }}
        </div>
        @endif
        <div class="email-left-box"><a href="{{route('buku.create')}}" class="btn btn-primary btn-block">Tambah Data
                Buku</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered zero-configuration">
                <thead>
                    <tr class="text-center">
                        <th>No</th>
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
                        <td class="text-center"> {{ $key + 1}} </td>
                        <td> {{ $book->judul }} </td>
                        <td> {{ $book->penerbit }} </td>
                        <td> {{ $book->pengarang }}</td>
                        <td class="text-center"> {{ $book->tahun }}</td>
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
                        <td colspan="6" class="text-center">Tidak Ada Data </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection