<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">  
    <title>@yield('title')- Aplikasi Sistem informasi Nilai</title>
    <meta name="description" content="Aplikasi Sistem informasi Penjualan"> 
    <meta content="" name="keywords">  

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">
  <link rel="apple-touch-icon" href="{{ asset('assets/img/apple-touch-icon.png') }}">
 
  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.snow.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/quill/quill.bubble.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/remixicon/remixicon.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/simple-datatables/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}">
   
  
    <!-- Template Main CSS File -->
 <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}"> 
</head>


<body>

     <!-- ======= Header ======= -->
     <header id="header" class="header fixed-top d-flex align-items-center"> 
      <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <img src="{{ asset('assets/img/logo.png') }}" alt="">
          <span class="d-none d-lg-block">Aplikasi Sistem informasi Nilai</span>
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div><!-- End Logo --> 
  
      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center"> 
          <li class="nav-item d-block d-lg-none">
            <a class="nav-link nav-icon search-bar-toggle " href="#">
              <i class="bi bi-search"></i>
            </a>
          </li><!-- End Search Icon-->
  
          <li class="nav-item dropdown pe-3"> 
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="{{ asset('assets/img/profile-img.jpg') }}" alt="Profile" class="rounded-circle">
              <span class="">{{Auth::user()->name}}</span>
            </a> 
          </li><!-- End Profile Nav --> 
        </ul>
      </nav><!-- End Icons Navigation --> 
    </header><!-- End Header -->


 
   <!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar"> 
  <ul class="sidebar-nav" id="sidebar-nav"> 
    <li class="nav-item">
      <a class="nav-link " href="{{ url('home') }}">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li><!-- End Dashboard Nav -->

    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Components</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="{{ url('kelas') }}">
            <i class="bi bi-circle"></i><span>Kelas</span>
          </a>
        </li>
        <li>
        <a href="{{ url('mapel') }}">
            <i class="bi bi-circle"></i><span>Mata Pelajaran</span>
          </a>
        </li>
        <li>
          <a href="{{ url('siswa') }}">
            <i class="bi bi-circle"></i><span>Siswa</span>
          </a>
        </li>
        <li>
          <a href="{{ url('nilai') }}">
            <i class="bi bi-circle"></i><span>Nilai</span>
          </a>
        </li>

      </ul>
    </li><!-- End Components Nav -->


      <li class="nav-item">
       <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-layout-text-window-reverse"></i><span>Laporan</span><i class="bi bi-chevron-down ms-auto"></i>
       </a>
       <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="rapot">
            <i class="bi bi-circle"></i><span>Laporan Rapot</span>
          </a>
        </li>
        

       </ul>
      </li><!-- End Tables Nav -->


    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#charts-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-bar-chart"></i><span>Manajemen</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="charts-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
        <li>
          <a href="./index.php?aksi=Manajemen&xaksi=Manajemen Password&yaksi=1">
            <i class="bi bi-circle"></i><span>Ubah Password</span>
          </a>
        </li>

        @if (Auth::user()->level_akses == 3 )
        <li>
          <a href="pengguna">
            <i class="bi bi-circle"></i><span>Manajemen Akun</span>
          </a>
        </li>
      </ul>
    </li><!-- End Charts Nav --> 
    @endif

    <li class="nav-item">
      <a class="nav-link" href="{{ route('logout') }}">
        <i class="bi bi-circle"></i>
        <span>Logout</span>
      </a>
    </li><!-- End Login Page Nav -->
</aside><!-- End Sidebar-->



  {{-- <main id="main" class="main">   --}}
    @yield('breadcrumbs')
  {{-- </main>  --}}
 
  
  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>2024</span></strong>. All Rights Reserved
    </div>
    <div class="credits"> Designed by <a href="">Muhammad Akmal Ali</a>
    </div>
  </footer>  
 
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
      
  <!-- Vendor JS Files -->
  
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" crossorigin="anonymous"></script>  
  <script>       
    $('#alert').removeClass('d-none'); 
    setTimeout(() => {
        $('.alert').alert('close');
    }, 5000);
</script> 


 <script src="{{ asset('assets/vendor/apexcharts/apexcharts.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/chart.js/chart.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/echarts/echarts.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/quill/quill.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/simple-datatables/simple-datatables.js') }}"></script>
 <script src="{{ asset('assets/vendor/tinymce/tinymce.min.js') }}"></script>
 <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
 <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
 
 
  
 <!-- Template Main JS File -->
 <script src="{{ asset('assets/js/main.js') }}"></script> 



</body> 
</html>