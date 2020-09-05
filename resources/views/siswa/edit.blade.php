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
            <h1>Form Ubah Data Calon Siswa</h1>
            <h2>SMK Taruna Bhakti Depok</h2>
        
            <form action="/calonsiswa/{{ $calonsiswa->id }}" method="post">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="noppdb">Nomor PPDB</label>
                    <input type="text" name="noppdb" id="noppdb" class="form-control @error('noppdb') is-invalid @enderror" value="{{ $calonsiswa->noppdb }}">
                    @error('noppdb')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nama">Nama Calon Siswa</label>
                    <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ $calonsiswa->nama }}">
                    @error('nama')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="asal_sekolah">Asal Sekolah</label>
                    <input type="text" name="asal_sekolah" id="asal_sekolah" class="form-control @error('asal_sekolah') is-invalid @enderror" value="{{ $calonsiswa->asal_sekolah }}">
                    @error('asal_sekolah')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan1">Pilihan Jurusan 1</label>
                    <select class="form-control @error('pilihan1') is-invalid @enderror" name="pilihan1" id="pilihan1">
                        <option value="{{ $calonsiswa->pilihan1 }}">{{ $calonsiswa->pilihan1 }}</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="MM">MM</option>
                        <option value="TEI">TEI</option>
                        <option value="BC">BC</option>
                    </select>
                    @error('pilihan1')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="pilihan2">Pilihan Jurusan 2</label>
                    <select class="form-control @error('pilihan2') is-invalid @enderror" name="pilihan2" id="pilihan2">
                        <option value="{{ $calonsiswa->pilihan2 }}">{{ $calonsiswa->pilihan2 }}</option>
                        <option value="RPL">RPL</option>
                        <option value="TKJ">TKJ</option>
                        <option value="MM">MM</option>
                        <option value="TEI">TEI</option>
                        <option value="BC">BC</option>
                    </select>
                    @error('pilihan2')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" name="alamat" id="alamat" class="form-control @error('alamat') is-invalid @enderror" value="{{ $calonsiswa->alamat }}">
                    @error('alamat')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" name="nohp" id="nohp" class="form-control @error('nohp') is-invalid @enderror" value="{{ $calonsiswa->nohp }}">
                    @error('nohp')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <hr>
                <button type="submit" class="btn btn-primary">Ubah Data</button>
            </form>            
        </div>
    </div>
</div>

</body>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</html>