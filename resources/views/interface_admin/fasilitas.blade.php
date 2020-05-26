
@extends('layouts.admin_layout')

@section('content')

   <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1080px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Fasilitas</li>
    </ol>


<div class="col-sm-12">
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Fasilitas</h5>
        <form action="{{URL('admin/fasilitas/createfasilitas')}}" method="POST" enctype="multipart/form-data">
          @csrf
           <input name="namafasilitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="fasilitas" required="">
           <small id="emailHelp" class="form-text text-muted"></small>

           <div>
           <button type="submit" class="btn btn-primary">Tambah</button>
         </div>
        <!--   -->
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="width: 800px;">

      <table class="table table-sm table-bordered table-hover">
        <tr>
          <th>Nama Fasilitas Kamar</th>
          <th>Hapus</th>
        </tr>
        <tr>
         @foreach($kategorifasilitas as $fasilitas)
          <td>{{$fasilitas->nama_fasilitas}}</td>
          <td>
            <a href="{{ URL('admin/fasilitas/'.$fasilitas->id.'/hapus')}}" class="fa fa-trash fa-1x " style="color:orange;"></a>
          </td>
        </tr>
        @endforeach
        
      </table>
    </div>
  </div>
</div>
</div>
  
@endsection