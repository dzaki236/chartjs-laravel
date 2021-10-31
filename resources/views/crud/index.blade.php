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
                <div>
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ session('success') }} </div>
                    @endif
                    @if (Session::has('error'))
                        <div class="alert alert-success" role="alert">
                            {{ session('error') }} </div>
                    @endif
                </div>
        

        <hr>
        <h2>Data Siswa</h2>
        <br>
        <div class="row">
            <div class="col-2"> <a href="/" class="btn btn-outline-dark w-100">Kembali</a>
            </div>
            <div class="col-3"> <a href="{{ route('siswa.create') }}" class="btn btn-primary w-100">[+] Tambah
                    Data</a>
            </div>
        </div>

        <br>
        <table class="table table-bordered" id="table_id">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>Jenis Kelamin</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($siswa as $siswa)
                    <tr>
                        <td scope="row">{{ $loop->iteration }}</td>
                        <td>{{ $siswa->nama_lengkap }}</td>
                        <td>{{ $siswa->alamat }}</td>
                        <td>{{ $siswa->jenis_kelamin == 'l' ? 'Laki-Laki' : 'Perempuan' }}</td>
                        <td>
                            <form action="{{ route('siswa.destroy', $siswa->id) }}" method="post"
                                onsubmit="return confirm('Hapus?')" class="form-inline">
                                <a href="{{ route('siswa.edit',$siswa->id) }}" class="btn btn-warning m-3"><i class="fas fa-pencil-alt    "></i></a>
                                <a href="{{ route('siswa.show',$siswa->id) }}" class="btn btn-primary m-3"><i class="fas fa-eye    "></i></a>

                                @method('DELETE')
                                @csrf
                                <button type="submit" class="btn btn-danger m-3"><i class="fas fa-trash-alt    "></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/3.6.0/mdb.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table_id').DataTable();
        });
    </script>
</body>

</html>
