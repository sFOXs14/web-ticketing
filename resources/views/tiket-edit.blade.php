<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Admin | Edit Tiket</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h2 class="text-center" style="margin-top: 2rem; margin-bottom: 2rem">Edit Data Tiket</h2>
        <form action="/tiket/{{$tiket->id}}" method="post">
          @csrf
          @method('PUT')
          <div class="form-group" style="margin-bottom: 1rem;">
            <label for="nik">Nomor Induk Kependudukan</label>
            <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK" value="{{$tiket->nik}}" required>
          </div>
          <div class="form-group" style="margin-bottom: 1rem;">
            <label for="nama">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" value="{{$tiket->nama}}" required>
          </div>
          <div class="form-group" style="margin-bottom: 1rem;">
            <label for="jenis_kelamin">Jenis Kelamin</label>
            <select class="form-control" name="jenis_kel" id="jenis_kelamin">
              <option value="" disabled>-- Pilih Jenis Kelamin -- </option>
              <option value="{{$tiket->jenis_kel}}" selected>{{$tiket->jenis_kel}}</option>
              @if ($tiket->jenis_kel == 'Laki-laki')
                <option value="Perempuan">Perempuan</option>
              @else
                <option value="Laki-laki">Laki-laki</option>
              @endif
            </select>
          </div>
          <div class="form-group" style="margin-bottom: 1rem;">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" class="form-control" name="tgl_lahir" id="tanggal_lahir" value="{{$tiket->tgl_lahir}}" required>
          </div>
          <div class="form-group" style="margin-bottom: 1rem;">
            <label for="alamat">Alamat Lengkap</label>
            <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat" value="{{$tiket->alamat}}" required>{{$tiket->alamat}}</textarea>
          </div>
          <div class="form-group" style="margin-bottom: 3rem;">
            <label for="no_telp">No. Telepon</label>
            <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No. Telepon" value="{{$tiket->no_telp}}" required>
          </div>
          <button type="submit" class="btn btn-success btn-block" style="width: 100%; margin-bottom: 5rem;">Update Data</button>
        </form>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>

