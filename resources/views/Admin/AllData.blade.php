<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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

        .custom-checkbox input:checked ~ .checkmark {
            background-color: #28a745;
        }

        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        .custom-checkbox input:checked ~ .checkmark:after {
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
  <h3 class="m-2 text-center">Data Kehadiran Ekskuls</h3>
    <a class="btn btn-primary m-2 float-end" href="{{ route('data.edit') }}"> Edit Absensi</a>
    <a class="btn btn-success m-2 float-end" href="{{ route('data.create') }}"> Tambah Data</a>
    
    <table class="table table-bordered m-3">
        <thead class="table-success">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Nis</th>
                <th scope="col">Rombel</th>
                <th scope="col">Rayon</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Hadir</th>
                <th scope="col">Alpha</th>
                <th scope="col">Sakit</th>
                <th scope="col">Izin</th>
            </tr>
        </thead>
        @php
         $no =  1;   
        @endphp
        @foreach ($studentDatas as $data)
        <tbody >
          <tr>
            <td>{{ $no++ }}</td>
            <td>{{ $data->nama }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->rombel }}</td>
            <td>{{ $data->rayon }}</td>
            <td>{{ $data->jk }}</td>
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox" name="kehadiran" {{ $data->absen && $data->absen->status_kehadiran == 'hadir' ? 'checked' : '' }} disabled>
                    <span class="checkmark"></span>
                </label>
            </td>
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox" name="kehadiran" {{ $data->absen && $data->absen->status_kehadiran == 'alpha' ? 'checked' : '' }} disabled>
                    <span class="checkmark"></span>
                </label>
            </td>
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox" name="kehadiran" {{ $data->absen && $data->absen->status_kehadiran == 'sakit' ? 'checked' : '' }} disabled>
                    <span class="checkmark"></span>
                </label>
            </td>
            <td>
                <label class="custom-checkbox">
                    <input type="checkbox" name="kehadiran" {{ $data->absen && $data->absen->status_kehadiran == 'izin' ? 'checked' : '' }} disabled>
                    <span class="checkmark"></span>
                </label>
            </td>
          </tr>
        </tbody>
        @endforeach
    </table>
</body>
</html>

