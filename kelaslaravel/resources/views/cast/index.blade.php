@extends('layout.master')

@section('judul')
Halaman List Pemain Film
@endsection

@section('content')
<a href="/cast/create" class="btn btn-primary mb-3">Tambah</a>
        <table class="table">
            <thead class="thead-light">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                {{-- <th scope="col">Umur</th>
                <th scope="col">Bio</th> --}}
                <th scope="col">Actions</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($cast as $key=>$item)
                    <tr>
                        <td>{{$key + 1}}</th>
                        <td>{{$item->nama}}</td>
                        {{-- <td>{{$item->umur}}</td>
                        <td>{{$item->bio}}</td> --}}
                        <td>
                            
                            <form action="/cast/{{$item->id}}" method="POST">
                            <a href="/cast/{{$item->id}}" class="btn btn-info">Show</a>
                            <a href="/cast/{{$item->id}}/edit" class="btn btn-primary">Edit</a>
                                @csrf
                                @method('DELETE')
                                <input type="submit" class="btn btn-danger my-1" value="Delete">
                            </form>
                            
                        </td>
                    </tr>
                @empty
                    <tr colspan="3">
                        <td>Belum Ada list Pemain Film</td>
                    </tr>  
                @endforelse              
            </tbody>
        </table>

@endsection