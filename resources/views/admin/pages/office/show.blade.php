<div class="form-group">
    <div class="table-responsive p-0">
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Kantor</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $office->name }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Alamat</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $office->addres }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kelurahan</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $office->village }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kecamatan</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $office->district }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kota/Kabupaten</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ Str::title($office->indoCity->name) }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Provinsi</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ Str::title($office->provincy->name) }}</h6>
          </td>
        </tr>
      </table>
    </div>
</div>
<div class="modal-footer-new d-flex justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>