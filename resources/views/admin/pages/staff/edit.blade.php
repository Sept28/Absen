<style>
    .modal-footer-new{;
        padding-top: 30px;
    }
</style>

<form action="{{ route('staff.update', $staffs->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group d-none">
        <label for="example-text-input" class="form-control-label"></label>
        <input name="user_id" class="form-control" type="hidden" placeholder="Ketik disini!" value="2">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Nomor Staff</label>
        <input name="id_staff" class="form-control" type="text" disabled placeholder="Ketik disini!" value="{{ $staffs->id_staff }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Staff</label>
        <select class="form-control" name="position_id">
            <option hidden>Pilih Kandindat</option>
            <option value="{{ $staffs->user->id }}" hidden>{{ $staffs->user->name }}</option>
            @foreach ($users as $staff)
                <option value="{{ $staff->id }}">{{ $staff->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Jabatan</label>
        <select class="form-control" name="position_id">
            <option value="{{ $staffs->position->id }}" hidden>{{ $staffs->position->name }}</option>
            @foreach ($positions as $position)
                <option value="{{ $position->id }}">{{ $position->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kantor</label>
        <select class="form-control" name="office_id">
            <option value="{{ $staffs->office->id }}" hidden>{{ Str::upper( $staffs->office->name . ' / ' . $staffs->office->addres . ' / ' . $staffs->office->indoCity->name) }}</option>
            @foreach ($offices as $office)
                <option value="{{ $office->id }}">{{ Str::upper($office->name. ' / ' . $office->addres . ' / ' . $office->indoCity->name) }} </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Shift</label>
        <select class="form-control" name="shift_id">
            <option value="{{ $staffs->shift->id }}" hidden>{{ $staffs->shift->shift_name }}</option>
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