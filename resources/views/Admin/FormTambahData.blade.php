<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Siswa</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH SISWA
                    </div>
                    <div class="card-body">
                        <form action="{{ route('data.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>NIS</label>
                                <input type="text" name="nis" placeholder="Masukkan NISN Siswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text" name="nama" placeholder="Masukkan Nama Siswa"
                                    class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Rombel</label>
                                <input type="text" name="rombel" placeholder="Masukkan Rombel" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Rayon</label>
                                <input type="text" name="rayon" placeholder="Masukkan Rayon" class="form-control">
                            </div>

                            <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <select name="jk" class="form-control">
                                    <option selected hidden disabled>Silahkan Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            <button type="submit" class="btn btn-success">SIMPAN</button>
                            <a href="{{ route('data.all') }}" class="btn btn-primary">back</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
