<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Tambah data Gallery</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  @if (session('successAdd'))
      <script>
          swal({
              title: "",
              text: "Berhasil menambah galleri/foto",
              icon: "success",
          });
      </script>
  @endif
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
          <a  class="text-nowrap logo-img">
            {{-- <img src="../assets/images/logos/dark-logo.svg" width="180" alt="" /> --}}
            {{-- <span class="text-black text-center ">Dashboard</span> --}}
          </a>
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('dashboard') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('data.all') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data Absensi Siswa</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('data.instruktur') }}" aria-expanded="false">
                <span>
                  <i class="ti ti-article"></i>
                </span>
                <span class="hide-menu">Data Absensi instruktur</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('jadwal') }}" aria-expanded="false">
                  <span>
                      <i class="ti ti-article"></i>
                  </span>
                  <span class="hide-menu">Jadwal Ekskul</span>
              </a>
          </li>
          @if(auth()->check() && auth()->user()->role === 'admin')
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('data.rayon.create') }}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-file-circle-plus"></i>
                </span>
                <span class="hide-menu">Tambah Rayon</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('data.rombel.create') }}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-file-circle-plus"></i>
                </span>
                <span class="hide-menu">Tambah Rombel</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('data.ekskul.create') }}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-file-circle-plus"></i>
                </span>
                <span class="hide-menu">Tambah Kategori Ekskul</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="{{ route('create.room') }}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-file-circle-plus"></i>
                </span>
                <span class="hide-menu">Tambah Ruangan</span>
              </a>
            </li>
            @endif
            <li class="sidebar-item">
              <a class="sidebar-link active" href="{{ route('data.gallery') }}" aria-expanded="false">
                <span>
                  <i class="fa-solid fa-image"></i>
                </span>
                <span class="hide-menu">Galeri Foto</span>
              </a>
            </li>
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img  src="{{ asset('assets/image/user.png') }}" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="{{ route('logout') }}" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div>
          <div class="col-lg-12 d-flex align-items-stretch">
            <div class="card" style="width: 200vh" >
              <div class="card-body w-100">
                <div class="container mt-4">
                    <h3 class="text-center mb-4">Gallery Semua Ekskul dan Senbud</h3>
            
                    <!-- Form untuk menambahkan foto baru -->
                    @if(auth()->check() && auth()->user()->role === 'admin')
                    <div class="card mb-4">
                        <div class="card-body">
                            <h5 class="card-title">Tambah Foto Baru</h5>
                            <form action="{{ route('data.gallery.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label for="foto">Gambar</label>  
                                    <input type="file" name="foto" id="foto" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Tambah</button>
                            </form>
                        </div>
                    </div>
                    @endif
                    <!-- Menampilkan galeri -->
                    <div class="row">
                        @foreach ($galleries as $gallery)
                        <div class="col-md-3">
                            <div class="card mb-3">
                                <img src="{{ asset('assets/image/' . $gallery->foto) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    {{-- Jika Anda memiliki informasi tambahan tentang setiap foto, Anda bisa menambahkannya di sini --}}
                                    {{-- <h5 class="card-title">Informasi Tambahan</h5>
                                    <p class="card-text">Deskripsi atau informasi lainnya.</p> --}}
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  </div>
  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/js/sidebarmenu.js"></script>
  <script src="../assets/js/app.min.js"></script>
  <script src="../assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="../assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="../assets/js/dashboard.js"></script>
</body>

</html>
