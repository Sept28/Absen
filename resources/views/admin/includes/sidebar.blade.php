<aside class="sidenav bg-white navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-4 sidebar" id="sidenav-main">
    <div class="sidenav-header">
      <i class="fas fa-times p-3 cursor-pointer text-secondary opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
      <a class="navbar-brand m-0" href=" https://demos.creative-tim.com/argon-dashboard/pages/dashboard.html " target="_blank">
        <img src="{{ asset('argon-dashboard-master/assets/img/logo-ct-dark.png') }}" class="navbar-brand-img h-100" alt="main_logo">
        <span class="ms-1 font-weight-bold">Argon</span>
      </a>
    </div>
    <hr class="horizontal dark mt-0">
    <div class="collapse navbar-collapse w-auto" id="sidenav-collapse-main">
      <ul class="navbar-nav" id="nav_accordion">
        <li class="nav-item mt-1 mb-0">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Main Menu</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ request()->is('admin/dashboard') ? 'active' : '' }}" href="{{ route('admin.dashboard') }}">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-home text-primary text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Dashboard</span>
          </a>
        </li>
        <li class="nav-item">
            <li class="nav-item has-submenu">
              <a class="nav-link {{ request()->is('admin/master*') ? 'active' : '' }}" href="#">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fas fa-database text-warning text-lg opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Data Master
                  <i class="fas fa-angle-down"></i>
                </span>
              </a>
              <ul class="submenu collapse">
                <li>
                  <a class="nav-link" href="{{ route('biodata.index') }}">
                    <i class="fas fa-user"></i>
                    Data Candidates
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('staff.index') }}">
                    <i class="fas fa-user-tie"></i>
                    Data Staff
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('position.index') }}">
                    <i class="fas fa-briefcase"></i>
                    Data Jabatan
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('office.index') }}">
                    <i class="fas fa-building"></i>
                    Data Alamat Kantor
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('shift.index') }}">
                    <i class="fas fa-clock"></i>
                    Data Shift Kerja
                  </a>
                </li>
              </ul>
            </li>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/billing.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-clipboard-list text-success text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Laporan Absensi</span>
          </a>
        </li>
        <li class="nav-item">
            <li class="nav-item has-submenu">
              <a class="nav-link {{ request()->is('admin/planning*') ? 'active' : '' }}" href="#">
                <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
                  <i class="fas fa-calendar-day text-info text-lg opacity-10"></i>
                </div>
                <span class="nav-link-text ms-1">Planning
                  <i class="fas fa-angle-down"></i>
                </span>
              </a>
              <ul class="submenu collapse">
                <li>
                  <a class="nav-link" href="#">
                    <i class="fas fa-project-diagram"></i>
                    Rencana Kerja
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('position.index') }}">
                    <i class="fas fa-map-marked"></i>
                    Area
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('position.index') }}">
                    <i class="fas fa-dice-d6"></i>
                    Object
                  </a>
                </li>
                <li>
                  <a class="nav-link" href="{{ route('office.index') }}">
                    <i class="fas fa-tools"></i>
                    Pekerjaan
                  </a>
                </li>
              </ul>
            </li>
          </a>
        </li>
        <li class="nav-item mt-4 mb-0">
          <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account pages</h6>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/profile.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-user text-dark text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Profile</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="../pages/sign-in.html">
            <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
              <i class="fas fa-cog text-warning text-lg opacity-10"></i>
            </div>
            <span class="nav-link-text ms-1">Settings</span>
          </a>
        </li>
      </ul>
      <div class="mx-3 mt-3">
        <a href="https://www.creative-tim.com/learning-lab/bootstrap/license/argon-dashboard" target="_blank" class="btn btn-dark btn-sm w-100 mb-3">Logout</a>
      </div>
    </div>
</aside>