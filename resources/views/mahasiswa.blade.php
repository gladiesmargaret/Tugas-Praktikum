@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Mahasiswa</h1>
    <div class="mb-4">
    <a href="/create"><button type="button" class="btn btn-success ">Tambah Data</button></a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="row">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIM</th>
                <th scope="col">Alamat</th>
                <th scope="col">Jurusan</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             @foreach($mahasiswa as $mhs)
              <tr>
                <th scope="row">{{$mhs->id_mahasiswa}}</th>
                <td>{{$mhs->nama}}</td>
                <td>{{$mhs->nim}}</td>
                <td>{{$mhs->alamat}}</td>
                <td>{{$mhs->jurusan}}</td>
                <td>
                    <a href="{{route('edit', $mhs->id_mahasiswa)}}"><button type="button" class="btn btn-primary">Update</button>
                    <form action="{{ route('destroy', $mhs->id_mahasiswa) }}" method="post" class="d-inline">
                    @csrf
                    @method('DELETE') <!-- Tambahkan ini untuk menentukan metode DELETE -->
                    <input type="hidden" name="id_mahasiswa" value="{{ $mhs->id_mahasiswa }}">
                    <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
            </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection