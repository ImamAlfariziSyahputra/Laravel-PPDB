<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Form Pendaftaran Calon Siswa</title>
</head>

<body>

<div class="container pt-4 bg-white">
    <div class="row">
        <div class="col-md-8">
            <h1>Form Data Calon Siswa {{ $calonsiswa->nama }}</h1>
            <h2>SMK Taruna Bhakti Depok</h2>
        
            <div class="form-group">
                <label for="noppdb" class="font-weight-bold">Nomor PPDB</label>
                <span> : {{ $calonsiswa->noppdb }} </span>
            <div class="form-group">
                <label for="nama" class="font-weight-bold">Nama Siswa</label>
                <span> : {{ $calonsiswa->nama }} </span>

            <div class="form-group">
                <label for="asal_sekolah" class="font-weight-bold">Asal Sekolah</label>
                <span> : {{ $calonsiswa->asal_sekolah }} </span>

            <div class="form-group">
                <label for="pilihan1" class="font-weight-bold">Pilihan Jurusan 1</label>
                <span> : {{ $calonsiswa->pilihan1 }} </span>

            <div class="form-group">
                <label for="pilihan2" class="font-weight-bold">Pilihan Jurusan 2</label>
                <span> : {{ $calonsiswa->pilihan2 }} </span>

            <div class="form-group">
                <label for="alamat" class="font-weight-bold">Alamat</label>
                <span> : {{ $calonsiswa->alamat }} </span>

            <div class="form-group">
                <label for="nohp" class="font-weight-bold">No HP</label>
                <span> : {{ $calonsiswa->nohp }} </span>
        </div>
    </div>
</div>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>