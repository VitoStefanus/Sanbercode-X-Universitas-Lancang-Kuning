@extends('layout.master')

@section('judul')
Halaman Show Pemain Film
@endsection

@section('content')
<a href="/cast" class="btn btn-primary mb-3">Kembali</a>

<h4>Nama :{{$cast->nama}}</h4>
<p>Umur :{{$cast->umur}} Tahun</p>
<p>Bio :{{$cast->bio}}</p>

@endsection