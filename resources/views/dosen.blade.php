@extends('layouts.master')

@section('container')
<h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
    <a href="dosen/create"><button type="button" class="btn btn-success ">Tambah Data</button></a>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="row">ID</th>
                <th scope="col">Nama</th>
                <th scope="col">NIP</th>
                <th scope="col">NIDN</th>
                <th scope="col">Alamat</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
             @foreach($dosen as $dosen)
              <tr>
                <th scope="row">{{$dosen->id_dosen}}</th>
                <td>{{$dosen->nama}}</td>
                <td>{{$dosen->nip}}</td>
                <td>{{$dosen->nidn?->nomor_identitas}}</td>
                <td>{{$dosen->alamat}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection