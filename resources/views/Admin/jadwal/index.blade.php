<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Modernize Free</title>
    <link rel="shortcut icon" type="image/png" href="../assets/images/logos/favicon.png" />
    <link rel="stylesheet" href="../assets/css/styles.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .custom-checkbox {
            position: relative;
            display: inline-block;
            width: 24px;
            height: 24px;
        }

        .custom-checkbox input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
            height: 0;
            width: 0;
        }

        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 24px;
            width: 24px;
            background-color: #fff;
            border: 1px solid #000;
            border-radius: 50%;
        }

        .custom-checkbox input:checked~.checkmark {
            background-color: #28a745;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked~.checkmark:after {
            display: block;
        }

        .custom-checkbox .checkmark:after {
            left: 9px;
            top: 5px;
            width: 5px;
            height: 10px;
            border: solid white;
            border-width: 0 3px 3px 0;
            transform: rotate(45deg);
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
                            <a class="sidebar-link" href="{{ route('data.all') }}" aria-expanded="false">
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
                            <a class="sidebar-link" href="./ui-typography.html" aria-expanded="false">
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
                                <h5 class="text-center card-title fw-semibold mb-4">Jadwal Ekstrakurikuler/senbud</h5>
                                <button type="button" class="btn btn-success float-end m-2" data-toggle="modal"
                                    data-target="#exampleModalLong">
                                    Tambah Jadwal
                                </button>

                                <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLongTitle">Tambah Data Siswa
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="card-body">
                                                    <form action="{{ route('store.jadwal') }}" method="POST">
                                                        @csrf
                                                        <div class="form-group mb-3">
                                                            <label>Hari</label>
                                                            <select name="schedule" class="form-control">
                                                                <option value="" selected disabled>Pilih hari</option>
                                                                <option value="senin" >Senin</option>
                                                                <option value="selasa" >Selasa</option>
                                                                <option value="rabu" >Rabu</option>
                                                                <option value="kamis" >Kamis</option>
                                                                <option value="jumat" >Jumat</option>
                                                                <option value="sabtu" >Sabtu</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group mb-3">
                                                            <label>Kelas</label>
                                                            <select name="kelas" class="form-control">
                                                                <option value="" selected disabled>Pilih kelas</option>
                                                                <option value="X" >X</option>
                                                                <option value="XI" >XI</option>
                                                                <option value="XII" >XII</option>
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label>Ruangan</label>
                                                            <select name="room_id" class="form-control">
                                                                <option value="" selected disabled>Pilih Ruangan
                                                                </option>
                                                                @foreach ($kelas as $data)
                                                                    <option value="{{ $data->id }}">
                                                                        {{ $data->name }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-3 ">
                                                            <label>Ekskul</label>
                                                            {{-- <input type="text" name="rayon" placeholder="Masukkan Rayon" class="form-control"> --}}
                                                            <select name="ekskul_id" class="form-control">
                                                                <option value="" selected disabled>Pilih ekskul
                                                                </option>
                                                                @foreach ($ekskul as $data)
                                                                    <option value="{{ $data->id }}">
                                                                        {{ $data->nama_ekskul }}</option>
                                                                @endforeach
                                                            </select>
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label>Jam mulai</label>
                                                            <input type="time" id="startTime" class="form-control" name="startTime"><br>
                                                        </div>

                                                        <div class="form-group mb-3">
                                                            <label>Jam Selesai</label>
                                                            <input type="time" id="endTime" class="form-control" name="endTime"><br>
                                                        </div>
                                                </div>
                                                <div class="modal-footer ">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Kembali</button>
                                                    <button type="submit" class="btn btn-primary">Kirim</button>
                                                </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <table class="table table-bordered ">
                                    <thead class="table-success">
                                        <tr>
                                            <th scope="col">No</th>
                                            <th scope="col">Hari</th>
                                            <th scope="col">Kelas</th>
                                            <th scope="col">Ruangan</th>
                                            <th scope="col">Ekstrakurikuler/senbud</th>
                                            <th scope="col">Jam mulai</th>
                                            <th scope="col">Jam Selesai</th>
                                        </tr>
                                    </thead>
                                    @php
                                        $no = 1;
                                    @endphp
                                    @foreach($datajadwal as $data)
                                        <tbody>
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->schedule }}</td>
                                                <td>{{ $data->kelas }}</td>
                                                <td>{{ $data->room->name }}</td>
                                                <td>{{ $data->ekskul->nama_ekskul }}</td>
                                                <td>{{ $data->startTime }}</td>
                                                <td>{{ $data->endTime}}</td>
                                            </tr>
                                        </tbody>
                                    @endforeach
                                </table>
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
            <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
