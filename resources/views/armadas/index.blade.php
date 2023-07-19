@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Armada</h6>
          <a href="/armada/create" class="btn btn-primary float-end">Tambah Data</a>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          <div class="table-responsive p-0">
            <table class="table align-items-center mb-0">
              <thead>
                <tr>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">No</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Foto</th>
                  <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Berat Maksimal</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Panjang</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Lebar</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Tinggi</th>
                  <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($armadas as $a)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$a->nama}}</td>
                    <td>
                      @if($a->pictures->isNotEmpty())
                      <img class="img-thumbnail" width="100" src="/uploads/{{ $a->pictures()->first()->filename }}" alt="">
                      @endif
                      
                    </td>
                    <td>{{$a->max_weight}} Kg</td>
                    <td>{{$a->length}} Cm</td>
                    <td>{{$a->width}}</td>
                    <td>{{$a->height}}</td>
                    <td>
                        <a href="/armada/{{ $a->id }}/edit" class="btn btn-warning">Edit</a>
                        <a href="/armada/{{ $a->id }}/hapus" class="btn btn-danger">Hapus</a>
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