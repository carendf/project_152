<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AkuUjian</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<body>

<div class="container">
        <div class="row">
            <div class="col-10">

            <a href="/ujian/create" class="btn btn-primary my-3">Tambah Data Ujian</a>

                <h1 class="mt-3">Daftar Data Ujian Mahasiswa</h1>

                <table class="table">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Id</th>
                            <th scope="col">Nama MK</th>
                            <th scope="col">Dosen</th>
                            <th scope="col">Jumlah Soal</th>
                            <th scope="col">Keterangan</th>

                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($tblujian as $tblujian)


                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $tblujian->id }}</td>
                                <td>{{ $tblujian->nama_mk }}</td>
                                <td>{{ $tblujian->dosen }}</td>
                                <td>{{ $tblujian->jumlah_soal }} </td>
                                <td>{{ $tblujian->keterangan }}</td>


                            </tr>
                        @endforeach
                    </tbody>
                </table>


            </div>
        </div>
    </div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
    
</body>
</html>