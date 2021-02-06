@extends('master')
@section('header', 'Kategori Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        @if(Session::get('level_user')==1)
        <div class="email-left-box">
            <a href="{{route('kategori.create')}}" class="btn btn-primary btn-block">Tambah Data
                Kategori</a>
        </div>
        @endif
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered zero-configuration">
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th>Kategori</th>
                        @if(Session::get('level_user')==1)
                        <th width="5%">Aksi</th>
                        @enif
                    </tr>
                </thead>
                <tbody>
                    @forelse($kategori as $key => $cat)
                    <tr>
                        <td class="text-center"> {{ $key + 1}} </td>
                        <td> {{ $cat->kategori }} </td>
                        <td style="display:flex">
                            @if(Session::get('level_user')==1)
                            <a href="/kategori/{{$cat->id}}" type="button" class="btn btn-primary"><i
                                    class="icon-magnifier" alt="Tampil"></i></a>
                            &nbsp;
                            <a href="/kategori/{{$cat->id}}/edit" type="button" class="btn btn-warning"><i
                                    class="icon-pencil" alt="Ubah"></i></a>
                            &nbsp;
                            <a href="#" type="button" class="btn btn-danger"><i class="icon-trash" alt="Hapus"
                                    data-toggle="modal" data-target="#modal-delete-kategori{{$cat->id}}"></i></a>
                            @include('kategori.popup')
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak Ada Data </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection