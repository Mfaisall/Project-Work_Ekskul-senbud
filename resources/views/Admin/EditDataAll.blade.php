<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Kehadiran Ekskuls</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <h3 class="my-4 text-center">Data Kehadiran Ekskuls</h3>
        <a class="btn btn-primary mb-2 float-end" href="">Edit Absensi</a>
        <a class="btn btn-success mb-2 float-end" href="{{ route('data.create') }}">Tambah Data</a>

        <form action="{{ route('data.update') }}" method="POST">
            @csrf
            @method('PUT')
            <table class="table table-bordered">
                <thead class="table-success">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama</th>
                        <th scope="col">NIS</th>
                        <th scope="col">Rombel</th>
                        <th scope="col">Rayon</th>
                        <th scope="col">Jenis Kelamin</th>
                        <th scope="col">Absensi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($studentDatas as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->nis }}</td>
                            <td>{{ $data->rombel }}</td>
                            <td>{{ $data->rayon }}</td>
                            <td>{{ $data->jk }}</td>
                            <td>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="status_kehadiran[{{ $data->id }}]" value="hadir"
                                        {{ $data->absen && $data->absen->status_kehadiran == 'hadir' ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="status_kehadiran[{{ $data->id }}]">Hadir</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="status_kehadiran[{{ $data->id }}]" value="alpha"
                                        {{ $data->absen && $data->absen->status_kehadiran == 'alpha' ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="status_kehadiran[{{ $data->id }}]">Alpha</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="status_kehadiran[{{ $data->id }}]" value="sakit"
                                        {{ $data->absen && $data->absen->status_kehadiran == 'sakit' ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="status_kehadiran[{{ $data->id }}]">Sakit</label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio"
                                        name="status_kehadiran[{{ $data->id }}]" value="izin"
                                        {{ $data->absen && $data->absen->status_kehadiran == 'izin' ? 'checked' : '' }}>
                                    <label class="form-check-label"
                                        for="status_kehadiran[{{ $data->id }}]">Izin</label>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <button class="btn btn-success" type="submit"> Simpan</button>
        </form>
    </div>
</body>

</html>
