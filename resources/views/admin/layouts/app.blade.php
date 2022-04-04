<!DOCTYPE html>
<html lang="en">

<head>
  @stack('before-style')
  @include('admin.includes.style')
  @stack('after-style')
  <title>
    @yield('title')
  </title>
  <style>
    .sidebar li .submenu{ 
      list-style: none; 
      margin: 0; 
      padding: 0; 
      padding-left: 1rem; 
      padding-right: 1rem;
    }
  </style>
</head>

<body class="g-sidenav-show bg-gray-100">
  <div class="min-height-300 bg-primary position-absolute w-100"></div>
  @include('sweetalert::alert')
  <!--   Sidebar   -->
  @include('admin.includes.sidebar')
  <main class="main-content position-relative border-radius-lg ">
    <!--   Navbar   -->
    @include('admin.includes.navbar')
    @yield('content')
  </main>
  <!--   Fixed plugin   -->
  @include('admin.includes.fixed-plugin')

  <!--   Core JS Files   -->
  @stack('before-script')
  @include('admin.includes.script')
  @stack('after-script')
</body>

</html>