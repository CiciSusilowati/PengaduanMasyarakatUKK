<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data Pengaduan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit Data 
                </div>
                <div class="card-body">
 
                    <form method="get" action="/pengaduan/update/{{ $pengaduan->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('get') }}
 
                        <div class="form-group">
                            <label>Tanggal Pengaduan</label>
                            <input type="date" name="tgl_pengaduan" class="form-control" value="{{ $pengaduan->tgl_pengaduan }}"> 
 
                            @if($errors->has('tgl_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_pengaduan')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="masyarakat_nik" class="form-control" value="{{ $pengaduan->masyarakat_nik }}"> 
 
                             @if($errors->has('masyarakat_nik'))
                                <div class="text-danger">
                                    {{ $errors->first('masyarakat_nik')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Judul Pengaduan</label>
                            <input type="string" name="judul_pengaduan" class="form-control" value="{{ $pengaduan->judul_pengaduan }}"> 
 
                             @if($errors->has('judul_pengaduan'))
                                <div class="text-danger">
                                    {{ $errors->first('judul_pengaduan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Isi Laporan</label>
                            <textarea name="isi_laporan" class="form-control" value="{{ $pengaduan->isi_laporan }}"></textarea> 
 
                             @if($errors->has('isi_laporan'))
                                <div class="text-danger">
                                    {{ $errors->first('isi_laporan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                        <label for="foto" class="form-label">Foto</label>
                        <div class="input-group mb-3">
                            <input type="file" name="foto" class="form-control" id="inputGroupfile">
                            <label for="inputGroupfile" class="input-group-text">Upload</label>
                        </div> 
 
                             @if($errors->has('foto'))
                                <div class="text-danger">
                                    {{ $errors->first('foto')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Status</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                                <option value="Proses">Selesai</option>
                                <option value="Selesai">Proses</option>
                        </select>
                           
                             @if($errors->has('status'))
                                <div class="text-danger">
                                    {{ $errors->first('status')}}
                                </div>
                            @endif
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