@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Pelanggan</h6>
          <a href="/pelanggan/create" class="btn btn-primary float-end">Tambah Data</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Email</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nomor</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Alamat</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($customers as $a)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->nama}}</td>
                    <td>{{$a->email}}</td>
                    <td>{{$a->nomor}}</td>
                    <td>{{$a->alamat}}</td>
                    <td>
                        <a href="/pelanggan/{{ $a->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/pelanggan/{{ $a->id }}/hapus" class="btn btn-danger">Hapus</a>
                    </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection