<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Edit Data Tanggapan</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                   Edit Data 
                </div>
                <div class="card-body">
 
                    <form method="get" action="/tanggapan/update/{{ $tanggapan->id }}">
 
                        {{ csrf_field() }}
                        {{ method_field('get') }}
 
                        <div class="form-group">
                            <label>Aduan</label>
                            <input type="string" name="pengaduan_id" class="form-control" value="{{ $tanggapan->pengaduan_id }}"> 
 
                             @if($errors->has('pengaduan_id'))
                                <div class="text-danger">
                                    {{ $errors->first('pengaduan_id')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>Tanggal Tanggapan</label>
                            <input type="date" name="tgl_tanggapan" class="form-control" value="{{ $tanggapan->tgl_tanggapan }}"> 
 
                             @if($errors->has('tgl_tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tgl_tanggapan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Tanggapan</label>
                            <input type="string" name="tanggapan" class="form-control" value="{{ $tanggapan->tanggapan }}"> 
 
                             @if($errors->has('tanggapan'))
                                <div class="text-danger">
                                    {{ $errors->first('tanggapan')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Petugas</label>
                            <input type="string" name="petugas_id" class="form-control" value="{{ $tanggapan->petugas_id }}"> 
 
                             @if($errors->has('petugas_id'))
                                <div class="text-danger">
                                    {{ $errors->first('petugas_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>
                        <a href="/tanggapan" class="btn btn-primary">Kembali</a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>