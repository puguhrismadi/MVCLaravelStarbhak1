<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Pendaftaran Calon Siswa </title>
    <style>
        label {
            font-weight: bold;
        }

    </style>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container pt-4 bg-white">
        <div class="row">
            <div class="col-md-8">
            <h1>Form Data Calon Siswa {{ $calonsiswa->nama }}</h1>
                <h2>SMK Taruna Bhakti Depok</h2>
            
              
                <div class="form-group">
                    <label for="noppdb">Nomor PPDB</label>
                    <div class="badge badge-success">{{ $calonsiswa->noppdb }} </div>
                <div class="form-group">
                    <label for="nama">Nama Calon Siswa</label>
                    <div class="badge badge-secondary">{{ $calonsiswa->nama }} </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <div class="badge badge-secondary">{{ $calonsiswa->asal_sekolah }} </div>

                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 1</label>
                    <div class="badge badge-warning">{{ $calonsiswa->pilihan1 }} </div>
        
               
                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 2</label>
                    <div class="badge badge-success">{{ $calonsiswa->pilihan2 }} </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <div class="badge badge-secondary">{{ $calonsiswa->alamat }} </div>
                <div class="form-group">
                    <label for="nohp">Nomor Handphone</label>
                    <div class="badge badge-secondary">{{ $calonsiswa->nohp }} </div>
                <hr>
                <a class="btn btn-success" href="{{ url("calonsiswa/$calonsiswa->id/edit") }}">Edit Data</a> <a class="btn btn-danger" href="#">Hapus</a>

            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>