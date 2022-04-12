<style>
    .required{
        color: red;
    }
    .modal-footer-new{
        padding-top: 30px;
    }
</style>

<form action="{{ route('biodata.update', $user->biodataStaff->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nama Lengkap<span class="required">*</span></label>
                <input name="full_name" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $user->biodataStaff->full_name }}">
            </div>
        </div>  
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">NIK<span class="required">*</span></label>
                <input name="nik" class="form-control" type="number" placeholder="Ketik disini!" value="{{ $user->biodataStaff->nik }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Tanggal Lahir<span class="required">*</span></label>
                <input name="birth_date" class="form-control" type="date" placeholder="Ketik disini!" value="{{ $user->biodataStaff->birth_date }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Pendidikan Terkahir<span class="required">*</span></label>
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
                <label for="example-text-input" class="form-control-label">Jenis Kelamin<span class="required">*</span></label>
                <div class="d-flex">
                    <div class="form-check me-4">
                        <input class="form-check-input" type="radio" id="customRadio1" name="gender" value="L" {{ $user->biodataStaff->gender == 'L' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customRadio1">Laki - Laki</label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" id="customRadio2" name="gender" value="P" {{ $user->biodataStaff->gender == 'P' ? 'checked' : '' }}>
                        <label class="custom-control-label" for="customRadio2">Perempuan</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Nomor Telepon<span class="required">*</span></label>
                <input name="phone_number" class="form-control" type="number" placeholder="Ketik disini!" value="{{ $user->biodataStaff->phone_number }}">
            </div>
        </div>
        <div class="col-md-12">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Alamat</label>
                <input name="address" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $user->biodataStaff->address }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kelurahan</label>
                <input name="village" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $user->biodataStaff->village }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="example-text-input" class="form-control-label">Kecamatan</label>
                <input name="district" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $user->biodataStaff->district }}">
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Kota/Kabupaten</label>
                <select class="form-control" id="city" name="city"></select>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Provinsi</label>
                <select class="form-control" id="province" name="province">
                    <option hidden>Pilih Provinsi</option>
                    @foreach ($provinces as $provin)
                        <option value="{{ $provin->code }}">{{ $provin->name }}</option>
                    @endforeach
                </select>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
    $(document).ready(function() {
        $('#province').on('change', function() {
            var provinceID = $(this).val();
            if(provinceID) {
                $.ajax({
                    url: '/getCity/'+provinceID,
                    type: "GET",
                    data : {"_token":"{{ csrf_token() }}"},
                    dataType: "json",
                    success:function(data)
                    {
                        if(data){
                            $('#city').empty();
                            $('#city').append('<option hidden>Pilih Kota/Kabupaten</option>'); 
                            $.each(data, function(key, city){
                                $('select[name="city"]').append('<option value="'+ city.id +'">' + city.name+ '</option>');
                            });
                        }else{
                            $('#city').empty();
                        }
                    }
                });
            }else{
                $('#city').empty();
            }
        });
    });
</script>