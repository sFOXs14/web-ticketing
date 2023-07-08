@extends('layout.mainlayout')

@section('title', 'Home')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <h2 class="text-center" style="margin-top: 2rem; margin-bottom: 2rem; font-size: 30px">Form Registrasi Konser Koldplay 2023</h2>
      <form action="tiket" method="post">
        @csrf
        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="nik">Nomor Induk Kependudukan</label>
          <input type="text" class="form-control" name="nik" id="nik" placeholder="Masukkan NIK" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="nama">Nama Lengkap</label>
          <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="jenis_kelamin">Jenis Kelamin</label>
          <select class="form-control" name="jenis_kel" id="jenis_kelamin">
            <option value="" selected disabled>-- Pilih Jenis Kelamin -- </option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
          </select>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="tanggal_lahir">Tanggal Lahir</label>
          <input type="date" class="form-control" name="tgl_lahir" id="tanggal_lahir" required>
        </div>
        <div class="form-group" style="margin-bottom: 1rem;">
          <label for="alamat">Alamat Lengkap</label>
          <textarea class="form-control" name="alamat" id="alamat" rows="3" placeholder="Masukkan Alamat" required></textarea>
        </div>
        <div class="form-group" style="margin-bottom: 3rem;">
          <label for="no_telp">No. Telepon</label>
          <input type="text" class="form-control" name="no_telp" id="no_telp" placeholder="Masukkan No. Telepon" required>
        </div>
        <button type="submit" class="btn btn-success btn-block" style="width: 100%; margin-bottom: 5rem;">Registrasi</button>
      </form>
    </div>
  </div>
</div>
@endsection
