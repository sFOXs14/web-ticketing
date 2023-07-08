@extends('layout.mainlayout')

@section('title', 'Tiket')

@section('content')
<br><br><br>
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      @if(Session::has('status'))
           <div class="alert alert-success" role="alert">
                {{Session::get('message')}}
           </div>
           @endif
      <div class="card border-success">
        <div class="card-body">
          <h4 class="card-title" style="margin-bottom: 20px">Tiket Konser 2023</h4>
          <p class="card-text">Nomor Tiket : {{ $tiket->id }}</p>
          <p class="card-text">Nama : {{ $tiket->nama }}</p>
          <p class="card-text">NIK : {{ $tiket->nik }}</p>
          <p class="card-text">Jenis Kelamin : {{ $tiket->jenis_kel }}</p>
          <p class="card-text">Tanggal Lahir : {{ $tiket->tgl_lahir }}</p>
          <p class="card-text">Alamat : {{ $tiket->alamat }}</p>
          <p class="card-text">No. Telepon : {{ $tiket->no_telp }}</p>
        </div>
      </div>
      <h5 style="margin-top: 30px; display:flex; justify-content: center;">Nomor Registrasi Kamu : {{ str_pad($tiket->id, 3, '0', STR_PAD_LEFT) }}</h5>
      <p style="margin-top: 5px; display:flex; justify-content: center; font-size: 14px">*Harap ingat No Registrasi saat Check In! Satu orang hanya bisa memiliki satu tiket</p>
    </div>
  </div>
</div>
@endsection
