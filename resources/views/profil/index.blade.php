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
              <a class="btn btn-primary mb-2" href="{{route('profil.create')}}">Tambah Data </a>
                <div class="card-title">
                    <h4>Profil</h4>
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat </th>
                                <th>Nomor HP</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($profil as $key => $profile)
                            <tr>
                            <td> {{ $key + 1}} </td>
                            <td> {{ $profile->nama_lengkap }} </td>
                            <td> {{ $profile->alamat }} </td>
                                <td> {{ $profile->nomorhp }}</td>
                            <td style="display:flex">
                            <a href="/profil/{{$profile->id}}" class="btn btn-success btn-sm">Tampil</a>
                            <a href="/profil/{{$profile->id}}/edit" class="btn btn-info btn-sm">Edit</a>
                                <form action="/profil/{{$profile->id}}" method="POST">
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