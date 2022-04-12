@extends('admin.layouts.app')

@section('title', 'Shift')

@section('content')
<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-2">
            <h6>Table Shift</h6>
            @if (session('process-success'))
              <div class="alert alert-success alert-dismissible show fade">
                  <div class="alert-body fw-bold text-white">
                      <button class="btn-close" data-dismiss="alert" aria-label="Close">
                      <span>&times;</span>
                      </button>
                      {{ session('process-success') }}
                  </div>
              </div>
            @endif
          </div>
          <div class="card-header py-0 d-flex justify-content-between">
            <div class="dropdown">
              <button class="btn bg-gradient-primary dropdown-toggle text-xs" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
                Aksi masal
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="#" id="del">Hapus</a></li>
              </ul>
            </div>
            <a href="#mymodal"
               class="btn btn-default px-3 text-primary text-xs"
               data-remote="{{ route('shift.create') }}"
               data-toggle="modal"
               data-target="#mymodal"
               data-title="Tambah Data Shift" 
            >
              Tambah Data
            </a>
          </div>
          <form method="POST">
            @csrf
            <button class="d-none" formaction="{{ route('shift.deleteAll') }}" id="del2"></button>
            <div class="card-body px-0 pt-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center mb-0" id="myTable">
                  <thead>
                    <tr>
                      <th class="text-uppercase text-secondary font-weight-bolder">
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" id="checkall">
                        </div>
                      </th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Shift</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jam Masuk</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Toleransi Terlambat</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Jam Keluar</th>
                      <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Action</th>
                    </tr>    
                  </thead>
                  <tbody>
                    @foreach ($shifts as $index=>$shift)
                      <tr>
                        <td>
                          <div class="d-flex px-3 py-1">
                            <div class="form-check">
                              <input class="form-check-input checkbox" type="checkbox" id="checkall" name="ids[{{ $shift->id }}]" value="{{ $shift->id }}">
                            </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-3 py-1">
                            <h6 class="mb-0 text-sm">{{ $index+1 }}</h6>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-3 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $shift->shift_name }}</h6>
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-3 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $shift->time_in }}</h6>
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-3 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $shift->late }}</h6>
                          </div>
                          </div>
                        </td>
                        <td>
                          <div class="d-flex px-3 py-1">
                            <div class="d-flex flex-column justify-content-center">
                              <h6 class="mb-0 text-sm">{{ $shift->time_out }}</h6>
                          </div>
                          </div>
                        </td>
                        <td class="align-middle">
                          <a href="#mymodal" 
                             class="text-warning font-weight-bold text-sm" 
                             data-remote="{{ route('shift.edit', $shift->id) }}"
                             data-toggle="modal"
                             data-target="#mymodal"
                             data-title="Ubah Data Shift"
                          >
                            <i class="fas fa-pen"></i>
                          </a>
                          <a href="#mymodal"
                             class="text-info font-weight-bold text-sm px-3" 
                             data-remote="{{ route('shift.show', $shift->id) }}"
                             data-toggle="modal"
                             data-target="#mymodal"
                             data-title="Info Data Shift"
                          >
                            <i class="fas fa-eye"></i>
                          </a>  
                          <a href="{{ route('shift.confirmation', $shift->id) }}"
                             class="text-danger font-weight-bold text-sm"
                          >
                            <i class="fas fa-trash"></i>
                          </a>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <footer class="footer pt-3  ">
      <div class="container-fluid">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6 mb-lg-0 mb-4">
            <div class="copyright text-center text-sm text-muted text-lg-start">
              © <script>
                document.write(new Date().getFullYear())
              </script>,
              made with <i class="fa fa-heart"></i> by
              <a href="https://www.creative-tim.com" class="font-weight-bold" target="_blank">Creative Tim</a>
              for a better web.
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link text-muted" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link text-muted" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/blog" class="nav-link text-muted" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link pe-0 text-muted" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
</div>
@endsection

@push('after-script')
  <!--     Datatable     -->
  <script>
      $(document).ready( function () {
          $('#myTable').DataTable({
                  lengthMenu: [10, 20, 50, 100, 200, 500],
                  'columnDefs': [ {
                  'targets': [0], /* column index */
                  'orderable': false, /* true or false */
              }]
          });
      } );
  </script>

  
  <!--     Modal     -->
  <script>
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')

    myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
    });
  </script>

<!--     Bulk Action     -->
  <script>
    $('#del').click(function(){
        $('#del2').click();
    });
  </script>
  <script type='text/javascript'>
    $(document).ready(function(){
      // Check or Uncheck All checkboxes
    $("#checkall1").change(function(){
        var checked = $(this).is(':checked');
        if(checked){
            $(".checkbox").each(function(){
            $(this).prop("checked",true);
            });
        }else{
            $(".checkbox").each(function(){
            $(this).prop("checked",false);
            });
        }
        });

        // Changing state of CheckAll1 checkbox 
        $(".checkbox").click(function(){

        if($(".checkbox").length == $(".checkbox:checked").length) {
            $("#checkall1").prop("checked", true);
        } else {
            $("#checkall1").prop("checked", false);
        }

        });
    });
  </script>
@endpush