
@extends('layouts.admin_layout')

@section('content')
<div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1080px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Update Ruang Rapat</li>
    </ol>

             <div class="container">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif
     <div>
      <h3>Form Update meeting Room</h3>
     </div>

      <form action="{{URL('admin/'.$RuangRapat->id.'/gas')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
      <div class="form-group">
        <label for="exampleFormControlFile1">Masukkan gambar Menu</label>
        <input value="{{$RuangRapat->image}}"  type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required="">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Deskripsi</label>
        <input value="{{$RuangRapat->deskripsi}}" name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="deskripsi" required="">
        <small id="emailHelp" class="form-text text-muted"></small>

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input value="{{$RuangRapat->harga}}"name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga" required="">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
     </form>

@endsection