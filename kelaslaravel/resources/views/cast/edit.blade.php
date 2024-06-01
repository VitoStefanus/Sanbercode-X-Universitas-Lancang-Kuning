@extends('layout.master')

@section('judul')
Halaman Edit Pemanin Film
@endsection

@section('content')
<a href="/cast" class="btn btn-primary mb-3">Kembali</a>
<div>
    <h2>Edit Cast {{$cast->id}}</h2>
    <form action="/cast/{{$cast->id}}" method="POST">
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
        @method('PUT')
        <div class="form-group">
        <label>Nama:</label>
        <input type="text" name="nama" class="form-control" value="{{$cast->nama}}">
        {{-- @error('nama')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <label>Umur:</label>
        <input type="number" name="umur" class="form-control" value="{{$cast->umur}}">
        {{-- @error('umur')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        <label>Bio:</label>
        <textarea name="bio" rows="10" cols="30" class="form-control">{{$cast->bio}}</textarea>
        {{-- @error('bio')
            <div class="alert alert-danger">{{ $message }}</div>
        @enderror --}}
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>

@endsection