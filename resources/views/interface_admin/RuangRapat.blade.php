
@extends('layouts.admin_layout')

@section('content')
    <div id="content-wrapper">
        <div class="container-fluid">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb" style="width:1050px;">
                <li class="breadcrumb-item">
                    <a href="#">Dashboard</a>
                </li>
                <li class="breadcrumb-item active">Overview</li>

            </ol>
             <div class="container">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif
      <div class="row">
        <div class="col-6">
        <h2>Daftar Ruang Rapat</h2>
      </div>
      <div class="col-6">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
              Tambah Ruang Rapat
            </button>
            <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Tambah Ruang Rapat</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{URL('admin/RuangRapat/createruangrapat')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                         
                        <div class="form-group">
                          <label for="exampleInputEmail1">Deskripsi</label>
                           <textarea name="deskripsi" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                          <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="image" required="">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Harga</label>
                          <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga" required="">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                       </form>
                       </div>
                      
                    </div>
                  </div>
                </div>
          </div>
<table class="table table-hover table-sm">
    <tr>
        <th>Id</th>
        <!-- <th>Fasilitas</th> -->
        <th>Deskripsi</th>
        <th>Image</th>
        <th>Harga</th>
        <th>Manage</th>
    </tr>
    @foreach($RuangRapat as $rapat)
        <tr>
            <td>{{$rapat->id}}</td>
            <td>{{$rapat->deskripsi}}</td>
            <td><img src="/image/{{$rapat->image}}" style="width: 50px; height: 50px;"></td>
            <td>{{"Rp. ". number_format((int)$rapat->harga).".00"}}</td>
            <td>
            <!-- <a href="{{ URL('admin/RuangRapat/'.$rapat->id.'/edit')}}" class="fa fa-edit fa-lg" style="margin-right: 10px;"></a> -->
            <a href="{{ URL('admin/RuangRapat/edit', $rapat->id)}}" class="fa fa-edit fa-lg" style="margin-right: 10px;"></a>
  
              <a href="{{ URL('admin/RuangRapat/'.$rapat->id.'/hapus')}}" class="fa fa-trash fa-1x " style="color:orange;"></a>
            </td>
        </tr>
    @endforeach
</table>
    </div>
    </div>
</div>
@endsection