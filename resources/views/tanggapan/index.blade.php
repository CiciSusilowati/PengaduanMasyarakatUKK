<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Tanggapan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Tanggapan
                </div>
                <div class="card-body">
                    <a href="/tanggapan/tambah" class="btn btn-primary">Beri Tanggapan</a>
                    <br/>
                    <br/>
                    <table class="table table-bordered table-hover table-striped ">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Aduan</th>
                                <th>Tanggal Tanggapan</th>
                                <th>Tanggapan</th>
                                <th>Petugas</th>
                                <th>OPSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($tanggapan as $p)
                            <tr>
                                <td>{{ $p->id }}</td>
                                <td>{{ $p->pengaduan_id }}</td>
                                <td>{{ $p->tgl_tanggapan }}</td>
                                <td>{{ $p->tanggapan }}</td>
                                <td>{{ $p->petugas_id }}</td>
                                <td>
                                    <a href="/tanggapan/edit/{{ $p->id }}" class="btn btn-warning">Edit</a>
                                    <a href="/tanggapan/hapus/{{ $p->id }}" class="btn btn-danger">Hapus</a>
                                    <a href="/tanggapan/show/{{ $p->id }}" class="btn btn-success">Detail</a>
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