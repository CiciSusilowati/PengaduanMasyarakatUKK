<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Detail Tanggapan</title>
</head>
<body>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card mt-3">
            <div class="card-header text-center">
            Detail Tanggapan
            </div>
                <div class="card-body">
                   <br/>
                        <form method="post" action="/tanggapan">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="pengaduan_id" class="col-sm-2 col-form-label">Aduan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $tanggapan->pengaduan_id }} 
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="tgl_tanggapan" class="col-sm-2 col-form-label">Tanggal Tanggapan</label>
                                <div class="col-sm-10">
                                 <b>:</b> {{ $tanggapan->tgl_tanggapan }}  
                                </div>
                            </div>
                           
                            <div class="mb-3 row">
                              <label for="tanggapan" class="col-sm-2 col-form-label">Tanggapan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $tanggapan->tanggapan }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="petugas_id" class="col-sm-2 col-form-label">Petugas</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $tanggapan->petugas_id }}
                                </div>
                            </div>

                            <div class="col-sm-10 offset-sm-2 mb-2 mt-2">
                                  <a href="/tanggapan" class="btn btn-sm btn-success">Kembali</a>
                                </div>
                        </form>
                </div>
            </div>
          </div>
          </div>
        </div>