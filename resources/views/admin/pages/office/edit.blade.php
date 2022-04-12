<style>
    .modal-footer-new{;
        padding-top: 30px;
    }
</style>

<form action="{{ route('office.update', $office->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Nama Kantor/Gedung</label>
        <input name="name" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $office->name }}">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Alamat</label>
        <input name="address" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $office->addres }}">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Kelurahan</label>
        <input name="village" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $office->village }}">
    </div>
    <div class="form-group">
        <label for="example-text-input" class="form-control-label">Kecamatan</label>
        <input name="district" class="form-control" type="text" placeholder="Ketik disini!" value="{{ $office->district }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Provinsi</label>
        <select class="form-control" id="province" name="province">
            <option hidden>Pilih Provinsi</option>
            @foreach ($provinces as $provin)
                <option value="{{ $provin->code }}">{{ $provin->name }}</option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlSelect1">Kota/Kabupaten</label>
        <select class="form-control" id="city" name="city"></select>
    </div>
    <div class="modal-footer-new d-flex justify-content-end">
        <button type="button" class="btn btn-secondary me-2" data-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
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