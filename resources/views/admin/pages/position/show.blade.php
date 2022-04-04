<div class="form-group">
    <div class="table-responsive p-0">
      <table class="table align-items-center">
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Jabatan</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $position->name }}</h6>
          </td>
        </tr>
        <tr>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">Waktu Pembuatan</td>
          <td class="text-uppercase text-secondary text-xxs font-weight-bolder">:</td>
          <td>
            <h6 class="mb-0 text-sm">{{ $position->created_at }}</h6>
          </td>
        </tr>
      </table>
    </div>
</div>
<div class="modal-footer-new d-flex justify-content-center">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
</div>