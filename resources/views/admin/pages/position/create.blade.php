<style>
    .modal-footer-new{;
        padding-top: 30px;
    }
</style>

<form action="{{ route('position.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group py-3">
        <label for="example-text-input" class="form-control-label">Nama Jabatan</label>
        <input name="name" class="form-control" type="text" placeholder="Ketik disini!">
    </div>
    <div class="modal-footer-new d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>