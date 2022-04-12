<style>
    .modal-footer-new{;
        padding-top: 30px;
    }
</style>

<form action="{{ route('shift.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Nama Shift</label>
        <input name="shift_name" class="form-control" type="text" placeholder="Ketik disini!">
    </div>
    <div class="form-group">
        <label for="example-time-input" class="form-control-label">Jam Masuk</label>
        <input name="time_in" class="form-control" type="time" value="08:00:00" id="example-time-input">
    </div>
    <div class="form-group">
        <label for="example-time-input" class="form-control-label">Toleransi Terlambat Masuk</label>
        <input name="late" class="form-control" type="time" value="08:30:00" id="example-time-input">
    </div>
    <div class="form-group">
        <label for="example-time-input" class="form-control-label">Jam Keluar</label>
        <input name="time_out" class="form-control" type="time" value="16:30:00" id="example-time-input">
    </div>
    <div class="modal-footer-new d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>