@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Tambah Pelanggan</h6>
        </div>
        <div class="card-body px-0 pt-0 pb-2">
          @if($errors->any())
            <div class="alert alert-danger">
                <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                  @endforeach
                </ul>
            </div>
          @endif
          <form method="post" action="/pelanggan/created" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="row form-group">
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Nama<a class='red'> *</a></a>
                            <input class="form-control input-bb" type="text" name="nama" id="nama"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Email<a class='red'> *</a></a>
                            <input class="form-control input-bb" type="text" name="email" id="email"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Nomor<a class='red'> *</a></a>
                            <div class="input-group">
                              <input class="form-control input-bb" type="text" name="nomor" id="nomor"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Alamat<a class='red'> *</a></a>
                            <div class="input-group">
                              <input class="form-control input-bb" type="text" name="alamat" id="alamat"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-actions float-right">
                          <a href="/pelanggan" class="btn btn-danger float-end">Batal</a>
                          <button type="submit" id="btnSubmit" name="btnSubmit" class="btn btn-primary" title="Save"><i
                            class="fa fa-check"></i> Simpan</button>
                          <button type="reset" name="Reset" class="btn btn-warning"
                            onClick="window.location.reload();"><i class="fa fa-times"></i> Reset</button>
                            
                        </div>
                    </div>
                </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
@endsection