<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>

<body>


    <div class="container">
        <div class="row">
            <div class="col-8">

                <h1 class="mt-3">Form Tambah Data Ujian</h1>
                <form method="POST" action="/ujian">

                    @csrf
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="nama_mk" class="form-label">Nama Mata Kuliah</label>
                            <input type="text" class="form-control" required id="nama_mk" name="nama_mk"
                                value="{{ old('nama_mk') }}" placeholder="Isikan Nama Mata Kuliah">


                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="dosen" class="form-label">Nama Dosen</label>
                            <input type="text" class="form-control" required id="dosen" name="dosen"
                                value="{{ old('dosen') }}" placeholder="Isikan Nama Dosen">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="jumlah_soal" class="form-label">Jumlah Soal</label>
                            <input type="text" class="form-control" required id="jumlah_soal" name="jumlah_soal"
                                value="{{ old('jumlah_soal') }}" placeholder="Isikan Jumlah Soal yang Ada">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="mb-3">
                            <label for="keterangan" class="form-label">Keterangan</label>
                            <input type="text" class="form-control" required id="keterangan" name="keterangan"
                                value="{{ old('keterangan') }}" placeholder="Isikan keterangan dari soal">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>


            </div>
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"
        integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js"
        integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous">
    </script>
</body>

</html>