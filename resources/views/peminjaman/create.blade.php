@extends('master')
@section('header', 'Peminjaman Buku')
@section('konten')

<div class="card">
    <div class="card-body">
        <div class="basic-form">
            <form action="/pinjam" method="POST">
                @csrf
                @if (Session::get('level_user') == 1)
                <input type="hidden" name="type" value="1">
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Nama Anggota</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="user" name="user" required>
                            <option value="" selected disabled>-- Pilih Anggota Perpustakaan --</option>
                            @foreach ($users as $user)
                            <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="buku" name="buku" required>
                            <option value="" selected disabled>-- Pilih Judul Buku --</option>
                            @foreach ($bukus as $buku)
                            <option value="{{$buku->id}}">{{$buku->judul}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-4">
                        <input type="text" name="tanggal_pinjam" class="form-control" id="datepicker-pinjam"
                            placeholder="mm/dd/yyyy" require>
                    </div>
                    <label class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-4">
                        <input type="text" name="tanggal_kembali" class="form-control" id="datepicker-kembali"
                            placeholder="mm/dd/yyyy" require>
                    </div>
                </div>
                @else
                <div class="form-group row">
                    <br>
                    <input type="hidden" name="type" value="2">
                    <label class="col-sm-2 col-form-label">Judul Buku</label>
                    <div class="col-sm-10">
                        <select class="form-control" id="buku" name="buku" required>
                            <option value="" selected disabled>-- Pilih Judul Buku --</option>
                            @foreach ($bukus as $buku)
                            <option value="{{$buku->id}}">{{$buku->judul}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="form-group row">
                    <br>
                    <label class="col-sm-2 col-form-label">Tanggal Pinjam</label>
                    <div class="col-sm-4">
                        <input type="text" name="tanggal_pinjam" class="form-control" id="datepicker-pinjam"
                            placeholder="mm/dd/yyyy" require>
                    </div>
                    <label class="col-sm-2 col-form-label">Tanggal Kembali</label>
                    <div class="col-sm-4">
                        <input type="text" name="tanggal_kembali" class="form-control" id="datepicker-kembali"
                            placeholder="mm/dd/yyyy" require>
                    </div>
                </div>
                @endif
                <br>
                <hr>
                <div class="form-group row">
                    <div class="col-sm-10">
                        <a type="button" class="btn btn-danger" href="{{'/pinjam'}}" style="decoration:none;">Batal</a>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@section('js')
<script>
jQuery('.mydatepicker, #datepicker').datepicker();
jQuery('#datepicker-pinjam').datepicker({
    autoclose: true,
    todayHighlight: true
});

jQuery('.mydatepicker, #datepicker').datepicker();
jQuery('#datepicker-kembali').datepicker({
    autoclose: true,
    todayHighlight: true
});
</script>
@endsection