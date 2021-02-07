@extends('master')
@section('header', 'Daftar Pengguna')
@section('konten')
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered zero-configuration">
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th>Nama Pengguna</th>
                        <th>Email</th>
                        <th>Alamat</th>
                        <th>Nomor Telp/Hp</th>
                        <th>Role User</th>
                        @if(Session::get('level_user')==1)
                        <th width="5%">Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($pengguna as $key => $pengguna)
                    <tr>
                        <td class="text-center"> {{ $key + 1}} </td>
                        <td> {{ $pengguna->name }} </td>
                        <td> {{ $pengguna->email }} </td>
                        <td> {{ $pengguna->alamat }} </td>
                        <td class="text-center"> {{ $pengguna->nomorhp }} </td>
                        <td class="text-center">
                            @if($pengguna->level == 1)
                            Administrator
                            @else
                            Anggota
                            @endif
                        </td>
                        @if(Session::get('level_user')==1)
                        <td style="display:flex">
                            @if(Session::get('id') == $pengguna->userid)
                            <a href="/pengguna/{{$pengguna->userid}}" type="button" class="btn btn-primary"><i
                                    class="icon-magnifier" alt="Tampil"></i></a>
                            &nbsp;
                            @else
                            <a href="/pengguna/{{$pengguna->userid}}" type="button" class="btn btn-primary"><i
                                    class="icon-magnifier" alt="Tampil"></i></a>
                            &nbsp;
                            <!-- <a href="/pengguna/{{$pengguna->userid}}/edit" type="button" class="btn btn-warning"><i
                                    class="icon-pencil" alt="Ubah"></i></a>
                            &nbsp; -->
                            <a href="#" type="button" class="btn btn-danger"><i class="icon-trash" alt="Hapus"
                                    data-toggle="modal"
                                    data-target="#modal-delete-pengguna{{$pengguna->userid}}"></i></a>
                            @endif
                        </td>
                        @include('pengguna.popup')
                        @endif
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