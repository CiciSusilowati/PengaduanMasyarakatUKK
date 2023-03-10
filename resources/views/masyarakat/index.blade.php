<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Registrasi Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Masyarakat
                </div>
                <div class="card-body">
                    <a href="/masyarakat/tambah" class="btn btn-primary">Input Pengaduan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Telepon</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($masyarakat as $p)
                            <tr>
                                <td>{{ $p->nik }}</td>
                                <td>{{ $p->nama }}</td>
                                <td>{{ $p->email }}</td>
                                <td>{{ $p->tlp }}</td>
                                <td>
                                    <a href="/masyarakat/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/masyarakat/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                    <a href="/masyarakat/show/{{ $p->id }}" class="btn btn-success">Detail</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </body>
</html>