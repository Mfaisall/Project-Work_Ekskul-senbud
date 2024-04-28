<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .form-check-input[type=radio] {
            border-radius: 50%;
            width: 20px;
            height: 20px;
            margin: 0 auto
        }

        .form-check-input[type=radio]:checked {
            background-color: #28a745;
            /* Warna latar belakang ketika dipilih */
        }
    </style>
</head>

<body>
    <!--  Body Wrapper -->
    <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed">
        <!-- Sidebar Start -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div>
                <div class="brand-logo d-flex align-items-center justify-content-between">
                    <a class="text-nowrap logo-img">
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
                            <a class="sidebar-link active" href="{{ route('data.all') }}" aria-expanded="false">
                                <span>
                                    <i class="ti ti-article"></i>
                                </span>
                                <span class="hide-menu">Data Absensi Siswa</span>
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
                        <li class="sidebar-item">
                            <a class="sidebar-link" href="{{ route('data.gallery') }}" aria-expanded="false">
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
                            <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse"
                                href="javascript:void(0)">
                                <i class="ti ti-menu-2"></i>
                            </a>
                        </li>
                    </ul>
                    <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                        <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                            <li class="nav-item dropdown">
                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2"
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <img src="../assets/images/profile/user-1.jpg" alt="" width="35"
                                        height="35" class="rounded-circle">
                                </a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up"
                                    aria-labelledby="drop2">
                                    <div class="message-body">
                                        <a href="./authentication-login.html"
                                            class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
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
                        <div class="card" style="width: 200vh">
                            <div class="card-body w-100">
                                <h5 class="card-title fw-semibold mb-4">Koreksi Absensi</h5>
                                <div class="container mt-1 m-3">
                                    <form id="filterForm">
                                        <div class="form-group" style="width:30%">
                                            <label for="filterEkskul">Filter Ekskul:</label>
                                            <select class="form-control" id="filterEkskul">
                                                <option value="" selected hidden disabled>jenis ekskul</option>
                                                <option value="all">Semua</option>
                                                <!-- Menampilkan opsi ekskul yang sesuai -->
                                                @foreach ($studentDatas as $data)
                                                    <option value="{{ $data->ekskul_id }}">{{ $data->ekskul->nama_ekskul }}</option>
                                                @endforeach
                                                <!-- Add more options as needed -->
                                            </select>
                                        </div>
                                    </form>
                                </div>
                                <form action="{{ route('data.update') }}" method="POST">
                                    @csrf
                                    @method('PUT')
                                    <table class="table table-bordered">
                                        <thead class="table-success text-center">
                                            <tr>
                                                <th scope="col" style="width: 0vh;">No</th>
                                                <th scope="col">Nama</th>
                                                <th scope="col">NIS</th>
                                                <th scope="col">Rombel</th>
                                                <th scope="col">Rayon</th>
                                                <th scope="col">Nama Ekskul</th>
                                                <th scope="col">Jenis Ekstrakurikuler</th>
                                                <th scope="col">Jenis Kelamin</th>
                                                <th scope="col">Hadir</th>
                                                <th scope="col">Alpha</th>
                                                <th scope="col">Izin</th>
                                                <th scope="col">Sakit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($studentDatas as $data)
                                                <tr data-ekskul="{{ $data->ekskul_id }}">
                                                    <td>{{ $loop->iteration }}</td>
                                                    <td>{{ $data->nama }}</td>
                                                    <td>{{ $data->nis }}</td>
                                                    <td>{{ $data->rombel->nama_rombel }}</td>
                                                    <td>{{ $data->rayon->nama_rayon }}</td>
                                                    <td>{{ $data->ekskul->nama_ekskul }}</td>
                                                    <td>{{ $data->ekskul->category }}</td>
                                                    <td>{{ $data->jk }}</td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="status_kehadiran[{{ $data->id }}]"
                                                                value="hadir"
                                                                {{ $data->absen && $data->absen->status_kehadiran == 'hadir' ? 'checked' : 'checked' }}>
                                                            <label class="form-check-label"
                                                                for="status_kehadiran[{{ $data->id }}]"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="status_kehadiran[{{ $data->id }}]"
                                                                value="alpha"
                                                                {{ $data->absen && $data->absen->status_kehadiran == 'alpha' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="status_kehadiran[{{ $data->id }}]"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="status_kehadiran[{{ $data->id }}]"
                                                                value="sakit"
                                                                {{ $data->absen && $data->absen->status_kehadiran == 'sakit' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="status_kehadiran[{{ $data->id }}]"></label>
                                                        </div>
                                                    </td>
                                                    <td>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="status_kehadiran[{{ $data->id }}]"
                                                                value="izin"
                                                                {{ $data->absen && $data->absen->status_kehadiran == 'izin' ? 'checked' : '' }}>
                                                            <label class="form-check-label"
                                                                for="status_kehadiran[{{ $data->id }}]"></label>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <a class="btn btn-primary" href="{{ route('data.all') }}"
                                        style="text-decoration: none">
                                        Back
                                    </a>
                                    <button class="btn btn-success" type="submit"> Simpan</button>
                                </form>
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
            <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
            <script>
                $(document).ready(function() {
                    // Function to filter table based on selected ekskul
                    function filterTable(filterValue) {
                        $('table tbody tr').hide(); // Hide all rows
            
                        if (filterValue === 'all') {
                            $('table tbody tr').show(); // Show all rows if "Semua" is selected
                        } else if (filterValue !== '') {
                            $('table tbody tr').each(function() {
                                var ekskulId = $(this).data('ekskul'); // Get ekskul id for current row
                                if (ekskulId == filterValue) {
                                    $(this).show(); // Show row if ekskul id matches filter value
                                }
                            });
                        }
                    }
            
                    // Add event listener for filter change
                    $('#filterEkskul').change(function() {
                        var filterValue = $(this).val();
                        filterTable(filterValue);
                    });
            
                    // Initial filtering based on default option
                    var defaultFilterValue = $('#filterEkskul').val();
                    filterTable(defaultFilterValue);
                });
            </script>
            
</body>

</html>
