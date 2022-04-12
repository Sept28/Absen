<div class="form-group">
    <div class="table-responsive p-0">
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Staff</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $staffs->id_staff }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Staff</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $staffs->name }}</h6>
            <p class="mb-0 text-xs text-secondary">{{ $staffs->position->name }}</p>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Kantor</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $staffs->office->name }}</h6>
            <p class="mb-0 text-xs text-secondary">{{ $staffs->office->addres }}</p>
            <p class="mb-0 text-xs text-secondary">{{ $staffs->office->village }} / {{ $staffs->office->district }}</p>
            <p class="mb-0 text-xs text-secondary">{{ Str::title($staffs->office->indoCity->name) }} / {{ Str::title($staffs->office->provincy->name) }}</p>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Shift</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $staffs->shift->shift_name }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nomor Telepon</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $staffs->user->biodataStaff->phone_number }}</h6>
          </td>
        </tr>
      </table>
    </div>
</div>
<div class="modal-footer-new d-flex justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>