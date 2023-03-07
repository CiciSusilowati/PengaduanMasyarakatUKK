<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Detail Pengaduan Masyarakat</title>
</head>
<body>
        <div class="container-fluid">
          <div class="row justify-content-center">
            <div class="col-md-9">
            <div class="card mt-3">
            <div class="card-header text-center">
                     Detail Data Pengaduan
            </div>
                <div class="card-body">
                   <br/>
                        <form method="post" action="/pengaduan">
    
                            {{ csrf_field() }}
                            <div class="mb-3 row">
                              <label for="tgl_pengaduan" class="col-sm-2 col-form-label">Tanggal Pengaduan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->tgl_pengaduan }} 
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="masyarakat_nik" class="col-sm-2 col-form-label">NIK</label>
                                <div class="col-sm-10">
                                 <b>:</b> {{ $pengaduan->masyarakat_nik }}  
                                </div>
                            </div>
                           
                            <div class="mb-3 row">
                              <label for="judul_pengaduan" class="col-sm-2 col-form-label">Judul Pengaduan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->judul_pengaduan }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="isi_laporan" class="col-sm-2 col-form-label">Isi Laporan</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->isi_laporan }}
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="foto" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                  <b>:</b> 
                                  @if ($pengaduan->foto)
                                      <img src="{{ asset('image/'. $pengaduan->foto) }}" height="60%" width="30%" alt="Foto Pengaduan" class="embed-responsive">
                                  @else
                                      <a href="#" class="badge badge-danger">Tidak Ada Foto</a>
                                </div>
                            </div>

                            <div class="mb-3 row">
                              <label for="status" class="col-sm-2 col-form-label">Status</label>
                                <div class="col-sm-10">
                                  <b>:</b> {{ $pengaduan->status }}
                                </div>
                            </div>

                            <div class="col-sm-10 offset-sm-2 mb-2 mt-2">
                                  <a href="/pengaduan" class="btn btn-sm btn-success">Kembali</a>
                                </div>
                        </form>
                  </div>
              </div>
          </div>
      </div>
  </div>