  @extends('layouts.admin_layout')

@section('content')
    <div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">DataKamar</li>
    
    </ol>

    <!-- Daftar kamar -->
    <div class="container">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif
      <div class="row">
        <div class="col-6">
        <h3>Daftar Kamar</h3>
      </div>
      <div class="col-6">
        <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right btn-sm" data-toggle="modal" data-target="#exampleModal">
              Tambah Data Kamar
            </button>
            

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title " id="exampleModalLabel">Tambah data kamar</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <form action="{{URL('admin/kamar/createkamar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="form-group">
                          <label for="exampleInputEmail1">Nomor Kamar</label>
                          <input name="nomor_kamar" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nomor kamar">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                         <div class="form-group">
                            <label for="exampleFormControlSelect1">Kategori Kamar</label>
                            <select name="tipe_kamar" class="form-control" id="exampleFormControlSelect1">
                             @foreach ($iterable as $key)
                             <option value="{{ $key->id }}">{{$key->nama}}</option>
                             @endforeach
                            </select>
                          </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Harga</label>
                          <input name="harga" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="harga">
                          <small id="emailHelp" class="form-text text-muted"></small>
                        </div>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Image</label>
                          <input name="images" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="image">
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
          <div style="width: 1000px;">
          <table class="table table-hover">
          <tr>
            <th>No</th>
            <th>Nomor Kamar</th>
            <th>Harga</th>
            <th>Image</th>
            <th>Manage</th>
          </tr>
          <tr>
            <?php $No=1; ?> 
            @foreach($data_kamar as $HomeAdmin)
            <td>{{$No++}}</td>
            <td>{{$HomeAdmin->nomor_kamar}}</td>
            <td>{{"Rp. ". number_format((int)$HomeAdmin->harga).".00"}}</td>
           <!--  <td>{{$HomeAdmin->nama}}</td>   -->       
            <td><img src="/images/{{$HomeAdmin->images}}" style="width: 50px; height: 50px;"></td>
            <td>
               <!--  <a href="{{ URL('admin/'.$HomeAdmin->id.'/edit')}}" class="fa fa-edit fa-lg" style="margin-right: 10px;"></a> -->
                <a href="{{ URL('admin/'.$HomeAdmin->id.'/delete')}}" class="fa fa-trash fa-lg" style="color:#8B0000;" onclick="return confirm('yakin ingin dihapus?')"></a>
            </td>
          </tr>
          @endforeach
        </table>
        </div>
        </div>
          </div>
          
          
        
@endsection