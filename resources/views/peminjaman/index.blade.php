@extends('master')
@section('header', 'Peminjaman Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        <div class="email-left-box">
            <a href="{{route('pinjam.create')}}" class="btn btn-primary btn-block">Tambah Data
                Peminjaman</a>
        </div>
        <div class="table-responsive">
            <table id="example" class="table table-striped table-bordered zero-configuration">
                @if(Session::get('level_user')==1)
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th>Nama Anggota</th>
                        <th width="20%">Total Buku Dipinjam</th>
                        @if(Session::get('level_user')==1)
                        <th width="5%">Aksi</th>
                        @endif
                    </tr>
                </thead>
                <tbody>
                    @forelse($pinjam_admin as $key => $pinjam)
                    <tr>
                        <td class="text-center"> {{ $key + 1}} </td>
                        <td>{{$pinjam->name}}</td>
                        <td class="text-center">{{$pinjam->total}}</td>
                        <td style="display:flex">
                            <a href="/pinjam/{{$pinjam->userid}}" type="button" class="btn btn-primary"><i
                                    class="icon-magnifier" alt="Tampil"></i></a>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="4" class="text-center">Tidak Ada Data </td>
                    </tr>
                    @endforelse
                </tbody>
                @else
                <thead>
                    <tr class="text-center">
                        <th width="3%">No</th>
                        <th>Judul Buku</th>
                        <th width="10%">Tanggal Pinjam</th>
                        <th width="10%">Tanggal Kembali</th>
                        <th width="10%">Lama Pinjam</th>
                        <th width="5%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pinjam_user as $key => $pinjam_user)
                    <tr>
                        <td class="text-center"> {{ $key + 1}} </td>
                        <td>{{$pinjam_user->judul}}</td>
                        <td class="text-center">{{$pinjam_user->tanggal_pinjam}}</td>
                        <td class="text-center">{{$pinjam_user->tanggal_kembali}}</td>
                        <td class="text-center">{{$pinjam_user->lama_pinjam}} hari</td>
                        <td style="display:flex">
                            <a href="#" type="button" class="btn btn-danger"><i class="icon-trash" alt="Hapus"
                                    data-toggle="modal"
                                    data-target="#modal-delete-pinjam-user{{$pinjam_user->id}}"></i></a>
                        </td>
                        @include('peminjaman.popup')
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="text-center">Tidak Ada Data </td>
                    </tr>
                    @endforelse
                </tbody>
                @endif
            </table>
        </div>
    </div>
</div>
@endsection