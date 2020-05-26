<!DOCTYPE html>
<html lang="en">


<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title> Admin - NABASA HOTEL</title>

<!-- font awesome -->
  <link rel="stylesheet" href="{{URL::asset('font-awesome/css/font-awesome.min.css')}}" />

  <!-- Custom fonts for this template-->
  <link href="{{URL::asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="{{url::asset('vendor/datatables/dataTables.bootstrap4.css')}}" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{url::asset('css/sb-admin.css')}}" rel="stylesheet">
  <link href="{{url::asset('css/gayaku.css')}}" rel="stylesheet">
  <!-- <script src="{{ asset('js/app.js') }}" defer></script>
  <script src="{{ asset('js/jsku.js') }}" defer></script>
 -->
</head>

<body id="page-top">

  <nav class="navbar navbar-expand" style="height: 100px; background-color: #2A2E33 ">

<div class="navbar-brand mr-1">
   <img src="{{url::asset('images/logo.png')}}">
</div>
 


    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar Search -->
    <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
   <!--    <div class="input-group">
        <input type="text" class="form-control" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
        <div class="input-group-append">
         <!--  <button class="btn btn-primary" type="button">
            <i class="fas fa-search"></i>
          </button> -->
        </div>
      </div> 
    </form>

    <!-- Navbar -->
    <ul class="{{url::asset('navbar-nav ml-auto ml-md-0')}}">
      </li>
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ Auth::user()->nama}}
          <i class="fas fa-user-circle fa-fw"></i>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>
  <div id="wrapper">

    <!-- Sidebar -->

    <ul class="sidebar navbar-nav" style="background-color: #4D90A1">
      <li class="nav-item active">
        <a class="nav-link" href="{{URL('admin/dashboard')}}">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Data Kamar</span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Pemesanan</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Daftar pemesanan:</h6>
          <a class="dropdown-item" href="{{url('admin/DaftarPesananKamar')}}">Kamar</a>
          <a class="dropdown-item" href="{{url('admin/DaftarPemesananMakanan')}}">Makanan</a>
          <a class="dropdown-item" href="{{url('admin/DaftarPemesananRuangrapat')}}">Ruang Rapat</a>
       <!--    <div class="dropdown-divider"></div>
          <h6 class="dropdown-header">Other Pages:</h6>
          <a class="dropdown-item" href="{{url('404')}}">Kamar </a>
          <a class="dropdown-item" href="{{url('blank')}}">Ruang Rapat</a> -->
        </div>
      </li>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-fw fa-folder"></i>
          <span>Data Kategori</span>
        </a>
        <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <h6 class="dropdown-header">Tambah Kategori:</h6>
          <a class="dropdown-item" href="{{url('admin/kategorikamar')}}">Kategori Kamar</a>
          <a class="dropdown-item" href="{{url('admin/fasilitas')}}">Tambah Fasilitas</a>
          <a class="dropdown-item" href="{{url('admin/menu')}}">Tambah Menu</a>
        </div>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{URL('admin/Restaurant')}}" method="get">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Restaurant</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{URL('admin/RuangRapat')}}" method="get">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Ruang Rapat</span></a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="{{URL('admin/fasilitasumum')}}" method="get">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Fasilitas Umum</span></a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="{{URL('admin/BuktiTransfer')}}" method="get">
          <i class="fas fa-fw fa-chart-area"></i>
          <span>Bukti Pembayaran</span></a>
      </li>



      <li class="nav-item">
        <a class="nav-link" href="{{ URL('admin/registerAdmin')}}">
          <i class="fas fa-fw fa-table"></i>
          <span>Register Admin</span></a>
      </li>

    </ul>
    <main class="py-4">
       <div id="content-wrapper">
          <div class="container-fluid">
            @yield('content')
          </div>
       </div>
      </main>
    <footer class="sticky-footer" style="margin-top: 200px;">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright 42TI_PA02_2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Apakah anda yakin ingin keluar?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
 <!--        <div class="modal-body">Apakah anda yakin ingin keluar?</div> -->
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <form action="{{ route('logout')}}" method="POST">
            @csrf
              <button type="submit" class="btn btn-primary" href="">Logout</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="{{url::asset('vendor/jquery/jquery.min.js')}}"></script>
  <script src="{{url::asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

  <!-- Core plugin JavaScript-->
  <script src="{{url::asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

  <!-- Page level plugin JavaScript-->
  <script src="{{url::asset('vendor/chart.js/Chart.min.js')}}"></script>
  <script src="{{url::asset('vendor/datatables/jquery.dataTables.js')}}"></script>
  <script src="{{url::asset('vendor/datatables/dataTables.bootstrap4.js')}}"></script>

  <!-- Custom scripts for all pages-->
  <script src="{{url::asset('js/sb-admin.min.js')}}"></script>

  <!-- Demo scripts for this page-->
  <script src="{{url::asset('js/demo/datatables-demo.js')}}"></script>
  <script src="{{url::asset('js/demo/chart-area-demo.js')}}"></script>

</body>

</html>
