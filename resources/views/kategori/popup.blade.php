<div class="modal fade" id="modal-delete-kategori{{$cat->id}}">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Hapus Kategori</h5>
                <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                </button>
            </div>
            <form action="/kategori/{{$cat->id}}" method="POST">
                @csrf
                @method('Delete')
                <div class="modal-body">
                    Apakah Anda yakin menghapus data kategori <b>{{$cat->kategori}}</b>?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </div>
</div>
</div>