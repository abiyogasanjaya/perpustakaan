<div class="modal fade" id="modal-delete-pengguna{{$pengguna->userid}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Pengguna</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="/pengguna/{{$pengguna->userid}}" method="POST">
                @csrf
                @method('Delete')
                <div class="modal-body">
                    Apakah Anda yakin menghapus pengguna <b>{{$pengguna->name}}</b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
</div>