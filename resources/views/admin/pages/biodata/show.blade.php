<div class="form-group">
  <center>
  <img class="" src="{{ $user->biodataStaff->photo }}" alt="Tidak ada foto" width="200">
  </center>
  <div class="table-responsive p-0 d-flex">
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">NIK</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->nik }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Lengkap</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->full_name }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">TTL</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->birth_date }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Gender</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->gender == 'L' ? 'Laki-laki' : 'Perempuan' }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Telepon</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->phone_number }}</h6>
          </td>
        </tr>
      </table>
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Alamat</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->address }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kelurahan</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->village }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kecamatan</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->district }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kota/Kabupaten</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ Str::title($user->biodataStaff->city) }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Provinsi</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ Str::title($user->biodataStaff->province) }}</h6>
          </td>
        </tr>
      </table>
    </div>
    <div class="table-responsive p-0 d-flex flex-column">
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Pendidikan Terakhir</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->education }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Institusi</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->major }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Pendidikan Terakhir</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $user->biodataStaff->institute_name }}</h6>
          </td>
        </tr>
      </table>
    </div>
<div class="modal-footer-new d-flex justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>