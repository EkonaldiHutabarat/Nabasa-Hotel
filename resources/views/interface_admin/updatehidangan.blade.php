@extends('layouts.admin_layout')

@section('content')
 <div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1080px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Update Hidangan</li>
    </ol>


  <form action="{{URL('admin/'.$Restaurant->id.'/update')}}" method="POST" enctype="multipart/form-data">
  {{csrf_field()}}
      <div class="form-group">
        <label for="exampleFormControlFile1">Masukkan gambar Menu</label>
        <input value="{{$Restaurant->image}}"  type="file" name="image" class="form-control-file" id="exampleFormControlFile1" required="">
      </div>

      <div class="form-group">
        <label for="exampleInputEmail1">Deskripsi</label>
        <input value="{{$Restaurant->deskripsi}}" name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="deskripsi" required="">
        <small id="emailHelp" class="form-text text-muted"></small>

      </div>
      <div class="form-group">
        <label for="exampleInputEmail1">Harga</label>
        <input value="{{$Restaurant->harga}}"name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga" required="">
        <small id="emailHelp" class="form-text text-muted"></small>
      </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Tambah</button>
        </div>
     </form>

@endsection