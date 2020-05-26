
@extends('layouts.admin_layout')

@section('content')

<div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1051px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Data Fasilitas Umum</li>
    
    </ol>



<div class="col-sm-12">
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Fasilitas Umum</h5>
        <form action="{{URL('admin/fasilitasumum/createfasilitasumum')}}" method="POST" enctype="multipart/form-data">
          {{ csrf_field()}}
           <input name="namafasilitasumum" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama fasilitas umum" required="">
           <small id="emailHelp" class="form-text text-muted"></small>
           

          <div class="imgupload">
            <span>masukkan gambar Fasilitas</span>
          </div>
            <input  name="image" id="uploadFile" placeholder="Pilih File..." disabled="disabled" />
            <div class="fileUpload btn btn-primary">
                <span>Upload</span>
                <input id="uploadBtn" type="file" name="image" required="" class="upload" />
            </div>

           <br>
           <small id="emailHelp" class="form-text text-muted"></small>
           <div>
           <button type="submit" class="btn btn-primary">Tambah</button>
         </div>
       </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6" style="width: 800px;">
   

      <table class="table table-sm table-bordered table-hover">
        <tr style="background-color: #27A2C1">
          <th>#</th>
          <th>Fasilitas Umum </th>
          <th>Image</th>
          <th>Manage</th>
        </tr>
        <tr>
        <?php $No=1; ?> 
          @foreach($fasilitasumum as $umum)
          <td>{{$No++}}</td>
          <td><a href="#"><center><img src="/image/{{$umum->image}}" style="width: 60px; height: 60px;"></center></a></td>
          <td>{{$umum->namafasilitasumum}}</td>
          <td>
            <a href="{{ URL('admin/fasilitasumum/'.$umum->id.'/hapus')}}" class="fa fa-trash fa-1x " style="color:orange;"></a>
            <!-- <button type="button" class="btn btn-danger"><span class="fa fa-trash fa-1x"></span><a href="{{ URL('admin/fasilitasumum/'.$umum->id.'/hapus')}}"></button> -->
          </td>
         
        </tr>
        @endforeach
      </table>

    </div>
  </div>
</div>
</div>
  
@endsection