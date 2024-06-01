@extends('layout.master')

@section('judul')
Halaman Tambah Pemain Film
@endsection

@section('content')
<form action="/cast" method="POST"> 
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @csrf
    <label>Nama:</label>
        <input type="text" name="nama" class="form-control">
        {{-- @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
    <label>Umur:</label>
        <input type="number" name="umur" class="form-control">
        {{-- @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
    <label>Bio:</label>
        <textarea name="bio" rows="10" cols="30" class="form-control"></textarea>
        {{-- @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
    <button type="submit" class="btn btn-primary">Tambah</button>
</form>

@endsection
