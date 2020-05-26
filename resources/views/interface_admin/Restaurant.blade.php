@extends('layouts.admin_layout')

@section('content')
 <div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Menu Restaurant</li>
    </ol>

<div class="container">
  <div class="row">
    <div class="col-6">
        <h2>Menu Restaurant</h2>  
    </div>
    <div class="col-6">
      <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal" data-target="#exampleModal">
              Tambah Menu
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah menu restaurant</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form action="{{URL('admin/Restaurant/createHidangan')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                          <label for="exampleFormControlFile1">Masukkan gambar Menu</label>
                          <input name="image" type="file" class="form-control-file" id="exampleFormControlFile1" required="">
                        </div>
                
                        <div class="form-group">
                          <label for="exampleInputEmail1">Deskripsi</label>
                          <input name="deskripsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="deskripsi" required="">
                          <small id="emailHelp" class="form-text text-muted"></small>

                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Harga</label>
                          <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga" required="">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                          <div class="modal-footer">
                            <button type="submit" class="btn btn-primary">Tambah</button>
                          </div>
                       </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
                
    <table class="table table-hover">
     <tr>
       <th>Gambar</th>
       <th>Deskripsi</th>
       <th>Harga</th>
       <th>Manage</th>
     </tr>
     @foreach($Restaurant as $datamenu)
     <tr>
       <td><img src="/image/{{$datamenu->image}}" style="width: 50px; height: 50px;"></td>
       <td>{{$datamenu->deskripsi}}</td>
       <td>{{"Rp. ". number_format((int)$datamenu->harga).".00"}}</td>
       <td>
        <a href="{{ URL('admin/'.$datamenu->id.'/edit')}}" class="fa fa-edit fa-lg" style="margin-right: 10px;"></a>

        <a href="{{ URL('admin/Restaurant/'.$datamenu->id.'/hapus')}}" class="fa fa-trash fa-1x " style="color:orange;"></a>
       </td>
     </tr>
     @endforeach
   </table>
  </div>
  
</div>  
@endsection