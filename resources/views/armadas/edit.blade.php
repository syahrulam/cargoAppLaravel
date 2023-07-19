@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h6>Edit Armada</h6>
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
          <form method="post" action="/armada/{{ $armada->id }}/update" enctype="multipart/form-data">
            @method('put')
            @csrf
            <div class="card-body">
                <div class="row form-group">
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Nama<a class='red'> *</a></a>
                            <input class="form-control input-bb" type="text" name="nama" id="nama" value="{{ $armada->nama}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Gambar<a class='red'> *</a></a>
                            <div class="input-group">
                              <input class="form-control input-bb" type="file" multiple name="files[]" id="files"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Berat Maksimal<a class='red'> *</a></a>
                            <input class="form-control input-bb" type="text" name="max_weight" id="max_weight" value="{{ $armada->max_weight}}"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Panjang<a class='red'> *</a></a>
                            <div class="input-group">
                              <input class="form-control input-bb" type="text" name="length" id="length" value="{{ $armada->length}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Lebar<a class='red'> *</a></a>
                            <div class="input-group">
                              <input class="form-control input-bb" type="text" name="width" id="width" value="{{ $armada->width}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <a class="text-dark">Tinggi<a class='red'> *</a></a>
                            <div class="input-group">
                              <input class="form-control input-bb" type="text" name="height" id="height" value="{{ $armada->height}}"/>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-actions float-right">
                          <a href="/armada" class="btn btn-danger float-end">Batal</a>
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