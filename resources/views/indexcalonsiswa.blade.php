<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2>Data Siswa</h2>

                <a href="/calonsiswa/create" class="btn btn-primary my-2">Tambah Data Siswa</a>

                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif
            </div>
        </div>
        <table class="table table-bordered">
            <tr class="thead-dark">
                <th>No</th>
                <th>Nomor PPDB</th>
                <th>Calon Siswa</th>
                <th>Asal Sekolah</th>
                <th>Pilihan 1</th>
                <th>Pilihan 2</th>
                <th>Alamat</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
            @forelse ($calonsiswa as $cs)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $cs->noppdb }}</td>
                <td>{{ $cs->nama }}</td>
                <td>{{ $cs->asal_sekolah }}</td>
                <td>{{ $cs->pilihan1 }}</td>
                <td>{{ $cs->pilihan2 }}</td>
                <td>{{ $cs->alamat }}</td>
                <td>{{ $cs->nohp }}</td>
                <td><a href="">Edit</a></td>
            </tr>
            @empty
            
            @endforelse
        </table>
    </div>
</body>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</html>