<style>
    .modal-footer-new{
        padding-top: 30px;
    }

    .required{
        color: red;
    }
</style>

<form action="{{ route('biodata.store') }}" method="POST">
    @csrf
    @method('POST')
    <h5 class="card-title mb-3">Akun<span class="required">*</span></h5>
    <div class="row">
        <div class="col-md-12">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama</label>
                <input name="name" class="form-control" type="text" placeholder="Ketik disini!">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Email</label>
                <input name="email" class="form-control" type="text" placeholder="Ketik disini!">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Password</label>
                <input name="password" class="form-control" type="password">
            </div>
        </div>
    </div>

    <hr>

    <h5 class="card-title mb-3">Biodata<span class="required">*</span></h5>
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Lengkap</label>
                <input name="full_name" class="form-control" type="text" placeholder="Ketik disini!">
            </div>
        </div>  
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">NIK</label>
                <input name="nik" class="form-control" type="number" placeholder="Ketik disini!">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Tanggal Lahir</label>
                <input name="birth_date" class="form-control" type="date" placeholder="Ketik disini!">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pendidikan Terkahir</label>
                <select class="form-control" name="education">
                    <option hidden>Pilih Pendidikan Terakhir</option>
                    <option value="SD">SD</option>
                    <option value="SMP">SMP</option>
                    <option value="SMA">SMA/SMK</option>
                    <option value="S1">S1</option>
                    <option value="S2">S2</option>
                    <option value="S3">S3</option>
                </select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nomor Telepon</label>
                <input name="phone_number" class="form-control" type="number" placeholder="Ketik disini!">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Jenis Kelamin</label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" id="customRadio1" name="gender" value="L">
                        <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="customRadio2" name="gender" value="P">
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="exampleFormControlSelect1">
                <span class="required">*</span>)
                Wajib di isi!
            </label>
        </div>
      <div class="modal-footer-new d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </div>
</form>