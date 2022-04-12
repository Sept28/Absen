<style>
    .modal-footer-new{;
        padding-top: 30px;
    }
</style>

<form action="{{ route('staff.store') }}" method="POST">
    @csrf
    @method('POST')
    <div class="form-group">
        <label for="exampleFormControlSelect1">Staff</label>
        <select class="form-control" name="user_id">
            <option hidden>Pilih Kandindat</option>
            @foreach ($users as $staff)
                <option value="{{ $staff->id }}">{{ $staff->biodataStaff->full_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Jabatan</label>
        <select class="form-control" name="position_id">
            <option hidden>Pilih Jabatan</option>
            @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kantor</label>
        <select class="form-control" name="office_id">
            <option hidden>Pilih Kantor</option>
            @foreach ($offices as $office)
                <option value="{{ $office->id }}">{{ Str::upper($office->name. '  --  ' . $office->addres . ' - ' . $office->indoCity->name) }} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Shift</label>
        <select class="form-control" name="shift_id">
            <option hidden>Pilih Shift</option>
            @foreach ($shifts as $shift)
                <option value="{{ $shift->id }}">{{ $shift->shift_name }}</option>
            @endforeach
        </select>
    </div>
    <div class="modal-footer-new d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </div>
</form>