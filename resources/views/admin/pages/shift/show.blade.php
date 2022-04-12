<div class="form-group">
    <div class="table-responsive p-0">
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Nama Shift</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $shift->shift_name }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Jam Masuk</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $shift->time_in }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Toleransi Terlambat Masuk</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $shift->late }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Jam Keluar</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $shift->time_out }}</h6>
          </td>
        </tr>
      </table>
    </div>
</div>
<div class="modal-footer-new d-flex justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>