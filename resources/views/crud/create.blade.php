<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Siswa</title>
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet" />
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <!-- MDB -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.css" rel="stylesheet" />
    {{-- Data tables --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
</head>

<body class="p-4">
    <div class="container-fluid bg-white shadow card p-4 mx-auto">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        
        <hr>
        <h2>Tambah Data Siswa</h2>
        <br>
        <div class="row">
            <div class="col-3"> <a href="{{ route('siswa.index') }}" class="btn btn-outline-dark w-100">Kembali</a>
            </div>
        </div>
        <br>
        <form action="{{ route('siswa.store') }}" method="POST" autocomplete="off">
            @csrf
            <p>Nama Lengkap : </p>
            <div class="form-outline mb-5">
                <input type="text" id="form1Example1" name="nama_lengkap" class="form-control" placeholder="Ex.Dzaki"
                    value="{{ old('nama_lengkap', '') }}" />
                <label class="form-label" for="form1Example1">Nama Lengkap</label>
            </div>
            <p>Kelas : </p>
            <div class="form-outline mb-5">
                <input type="text" name="kelas" id="form1Example2" class="form-control" placeholder="Ex.12 Rpl 2"
                    value="{{ old('kelas', '') }}" />
                <label class="form-label" for="form1Example2">Kelas</label>
            </div>
            <p>Alamat : </p>
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form4Example3" rows="4"
                    name="alamat">{{ old('alamat', '') }}</textarea>
                <label class="form-label" for="form4Example3">Alamat</label>
            </div>
            <p>Jenis Kelamin : </p>
            <div class="form-outline mb-4">
                <div class="form-check">
                    <label class="form-check-label">
                        <input type="radio" class="form-check-input" name="jenis_kelamin" id="" value="l"
                            >
                        Laki-Laki </label>
                </div>
                <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="" value="p"
                                >
                            Perempuan </label>
                    </div>
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="jenis_kelamin" id="" value="nothing"
                                >
                            Tak Ingin Memberi Tahu </label>
                    </div>
            </div>
            <p>Tanggal Lahir : </p>
            <input type="date" name="tanggal_lahir" value="{{ old('tanggal_lahir','') }}" class="form-control mb-4" id="">
            <!-- Submit button -->
            <hr>
            <button type="submit" class="btn btn-primary btn-block">Tambah data</button>
        </form>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>

</html>
