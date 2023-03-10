<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Pengaduan Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Data Pengaduan
                </div>
                <div class="card-body">
                    <a href="/pengaduan/tambah" class="btn btn-primary">Input Pengaduan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>NIK</th>
                                <th>Judul Pengaduan</th>
                                <th>Isi Laporan</th>
                                <th>Status</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pengaduan as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->tgl_pengaduan }}</td>
                                <td>{{ $p->masyarakat_nik }}</td>
                                <td>{{ $p->judul_pengaduan }}</td>
                                <td>{{ $p->isi_laporan }}</td>
                                <td>{{ $p->status }}</td>
                                <td>
                                    <a href="/pengaduan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/pengaduan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                    <a href="/pengaduan/show/{{ $p->id }}" class="btn btn-success">Detail</a>
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

