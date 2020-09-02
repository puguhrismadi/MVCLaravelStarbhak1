<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Calon Siswa</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
</head>
<body>
    <div class="container">
       
        <div class="py-4 d-flex justify-content-end align-items-center">
            <h2 class="mr-auto">Tabel Data Calon Siswa</h2>
             <a href="{{ route('calonsiswa.create') }}" class="btn btn-success">Tambah Data</a>
            </div>
   
        <table class="table table-bordered">
            <tr>
                <td>No</td>
                <td>Nomor PPDB</td>
                <td>Calon Siswa</td>
                <td>Asal Sekolah</td>
                <td>Pilihan 1</td>
                <td>Pilihan 2</td>
                <td>Aksi</td>
            </tr>
            
                @forelse ($calonsiswa as $itemSiswa)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $itemSiswa->noppdb }}</td>
                <td>{{ $itemSiswa->nama }}</td>
                <td>{{ $itemSiswa->asal_sekolah }}</td>
                <td>{{ $itemSiswa->pilihan1 }}</td>
                <td>{{ $itemSiswa->pilihan2 }}</td>
                <td> <a href="#">detail</a></td>
        </tr>
                @empty
                    <td colspan="7">Tidak Ada Data</td>
                @endforelse
                
            
        </table>
    </div>
    
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>