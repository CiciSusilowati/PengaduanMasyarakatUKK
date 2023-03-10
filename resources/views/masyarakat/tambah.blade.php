<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet">
        <title>Input Masyarakat</title>
    </head>
    <body>
        <div class="container">
            <div class="card mt-5">
                <div class="card-header text-center">
                     Tambah Data Masyarakat 
                </div>
                <div class="card-body">
                    
                    <form method="post" action="/masyarakat/store" enctype="multipart/form-data">
 
                        {{ csrf_field() }}
 
                        <div class="form-group">
                            <label>NIK</label>
                            <input type="number" name="nik" class="form-control">
 
                            @if($errors->has('nik'))
                                <div class="text-danger">
                                    {{ $errors->first('nik')}}
                                </div>
                            @endif
                        </div>
 
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="string" name="nama" class="form-control">
 
                            @if($errors->has('nama'))
                                <div class="text-danger">
                                    {{ $errors->first('nama')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Email</label>
                            <input type="string" name="email" class="form-control">
 
                            @if($errors->has('email'))
                                <div class="text-danger">
                                    {{ $errors->first('email')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Password</label>
                            <input type="string" name="password" class="form-control">
 
                            @if($errors->has('password'))
                                <div class="text-danger">
                                    {{ $errors->first('password')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Telepon</label>
                            <input type="number" name="tlp" class="form-control">
 
                            @if($errors->has('tlp'))
                                <div class="text-danger">
                                    {{ $errors->first('tlp')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                        <label for="exampleFormControlInput1" class="form-label">Jenis Kelamin</label>
                        <select name="status" class="form-control" id="exampleFormControlSelect1">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                        </div>

                        <div class="form-group">
                            <label>Alamat</label>
                            <textarea name="alamat" class="form-control"></textarea>
 
                            @if($errors->has('alamat'))
                                <div class="text-danger">
                                    {{ $errors->first('alamat')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>RT</label>
                            <input type="number" name="rt" class="form-control">
 
                            @if($errors->has('rt'))
                                <div class="text-danger">
                                    {{ $errors->first('rt')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>RW</label>
                            <input type="number" name="rw" class="form-control">
 
                            @if($errors->has('rw'))
                                <div class="text-danger">
                                    {{ $errors->first('rw')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Kode Pos</label>
                            <input type="number" name="kode_pos" class="form-control">
 
                            @if($errors->has('kode_pos'))
                                <div class="text-danger">
                                    {{ $errors->first('kode_pos')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Provinsi</label>
                            <input type="string" name="province_id" class="form-control">
 
                            @if($errors->has('province_id'))
                                <div class="text-danger">
                                    {{ $errors->first('province_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Kabupaten</label>
                            <input type="string" name="regency_id" class="form-control">
 
                            @if($errors->has('regency_id'))
                                <div class="text-danger">
                                    {{ $errors->first('regency_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Daerah</label>
                            <input type="string" name="district_id" class="form-control">
 
                            @if($errors->has('district_id'))
                                <div class="text-danger">
                                    {{ $errors->first('district_id')}}
                                </div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>Desa</label>
                            <input type="string" name="village_id" class="form-control">
 
                            @if($errors->has('village_id'))
                                <div class="text-danger">
                                    {{ $errors->first('village_id')}}
                                </div>
                            @endif
                        </div>
                    
                        <div class="form-group">
                            <input type="submit" class="btn btn-success" value="Simpan">
                        </div>

                        <a href="/masyarakat" class="btn btn-primary">Kembali</a>
 
                    </form>
 
                </div>
            </div>
        </div>
    </body>
</html>