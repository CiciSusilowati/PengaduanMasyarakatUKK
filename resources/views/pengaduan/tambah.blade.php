<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Input Pengaduan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Tambah Data 
                </div>
                <div class="card-body">
                    
                    <form method="post" action="/pengaduan/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control">
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="masyarakat_nik" class="form-control">
 
                            @if($errors->has('masyarakat_nik'))
                                <div class="text-danger">
                                    {{ $errors->first('masyarakat_nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Judul Pengaduan</label>
                            <input type="string" name="judul_pengaduan" class="form-control">
 
                            @if($errors->has('judul_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_pengaduan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea name="isi_laporan" class="form-control"></textarea>
 
                            @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
                        </div>

                        <label for="foto" class="form-label">Foto</label>
                        <div class="input-group mb-3">
                            <input type="file" name="foto" class="form-control" id="inputGroupfile">
                            <label for="inputGroupfile" class="input-group-text">Upload</label>
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                                <option value="Proses">Proses</option>
                                <option value="Selesai">Selesai</option>
                        </select>
                        </div>
                    
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                        <a href="/pengaduan" class="btn btn-primary">Kembali</a>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>