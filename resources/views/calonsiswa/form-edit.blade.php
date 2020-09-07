<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form Edit Pendaftaran Calon Siswa </title>
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
                <h1>Form Edit Data Calon Siswa</h1>
                <h2>SMK Taruna Bhakti Depok</h2>
            <form action="{{ route('calonsiswa.proses-edit',['calonsiswa'=>$calonsiswa->id]) }}" method="post">
                @method('PATCH')
                @csrf
                <div class="form-group">
                    <label for="noppdb">Nomor PPDB</label>
                    <input 
                    class="form-control @error('noppdb') is-invalid @enderror"
                type="text" name="noppdb" id="noppdb" value="{{ $calonsiswa->noppdb }}"  >
                @error('noppdb')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama Calon Siswa</label>
                    <input 
                    class="form-control @error('nama') is-invalid @enderror"
                type="text" name="nama" id="nama" value="{{ $calonsiswa->nama }}"  >
                @error('nama')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input 
                    class="form-control @error('asal_sekolah') is-invalid @enderror"
                type="text" name="asal_sekolah" id="asal_sekolah" value="{{ $calonsiswa->asal_sekolah }}"  >
                @error('asal_sekolah')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 1</label>
                    <select class="form-control @error('pilihan1') is-invalid @enderror" name="pilihan1" id="pilihan2">
                       <option value="{{ $calonsiswa->pilihan1 }} ">{{ $calonsiswa->pilihan1 }}</option>
                       <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan jaringan</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                        <option value="Broadcasting">Broadcasting</option>
                    </select>
        
                @error('pilihan1')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 2</label>
                    <select class="form-control @error('pilihan2') is-invalid @enderror" name="pilihan2" id="pilihan2">
                       <option value="{{ $calonsiswa->pilihan2 }} ">{{ $calonsiswa->pilihan2}}</option>
                        <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        <option value="Teknik Komputer dan Jaringan">Teknik Komputer dan jaringan</option>
                        <option value="Multimedia">Multimedia</option>
                        <option value="Teknik Elektronika Industri">Teknik Elektronika Industri</option>
                        <option value="Broadcasting">Broadcasting</option>
                    </select>
        
                @error('pilihan2')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input 
                    class="form-control @error('alamat') is-invalid @enderror"
                type="text" name="alamat" id="alamat" value="{{ $calonsiswa->alamat }}"  >
                @error('alamat')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <div class="form-group">
                    <label for="nohp">Nomor HP</label>
                    <input 
                    class="form-control @error('nohp') is-invalid @enderror"
                type="text" name="nohp" id="nohp" value="{{ $calonsiswa->nohp }}"  >
                @error('nohp')    
                <div class="text-danger">{{ $message }}</div>
                @enderror
                </div>
                <hr>
                <button class="btn btn-primary" type="submit">Update</button>
            </form>

            </div>
        </div>
    </div>
</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</html>