
@extends('layouts.admin_layout')

@section('content')
<div id="content-wrapper">

      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1080px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Overview</li>
    
    </ol>

 <div class="container">
  <h2>update data kamar</h2>
          @if(session('sukses'))
              <div class="alert alert-success" role="alert">
              {{session('sukses')}}
            </div>
          @endif
          <div class="row">
        <div class="col-lg-12">
      
          <form action="{{URL('admin/'.$kamar->id.'/update')}}" method="POST">
            {{csrf_field()}}
                <div class="form-group">
                  <label for="exampleInputEmail1">Nomor Kamar</label>
                  <input name="nomor_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor kamar" value="{{$kamar->nomor_kamar}}">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                 <div class="form-group">
                    <label  for="exampleFormControlSelect1">Tipe Kamar</label>
                    <select name="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                     
                      @foreach ($iterable as $key)
                            <option>{{$key->nama}}</option>

                             @endforeach
                            </select>
                    </select>
                  </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Fasilitass</label>
                  <input name="fasilitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fasilitas" value="{{$kamar->fasilitas}}">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Image</label>
                  <img>
                  <input name="images" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="image" value="{{$kamar->images}}">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail1">Harga</label>
                  <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga" value="{{$kamar->harga}}">
                  <small id="emailHelp" class="form-text text-muted"></small>
                </div>
              <button type="submit" class="btn btn-warning">Submit</button>
          </form>
        </div>
    </div>
</div>
            
@endsection