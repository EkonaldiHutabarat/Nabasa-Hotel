@extends('layouts.admin_layout')

@section('content')

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width:1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Kategori Kamar</li>
    
    </ol>

<div class="col-sm-12">
  <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Kategori Kamar</h5>
        <form action="{{URL('admin/kategorikamar/createkategori')}}" method="POST" enctype="multipart/form-data">
          @csrf
           <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori" required="">
           <small id="emailHelp" class="form-text text-muted"></small>

           <input name="jumlah" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Kamar" required="">
           <small id="emailHelp" class="form-text text-muted"></small>

           <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="image" required="">
           <small id="emailHelp" class="form-text text-muted"></small>
           <br>

           <h5>Fasilitas kamar</h5>
           <div class="checkbox">
             <table>
               <tr>
                @foreach($fasilitas as $f)
                <td>
                  <input type="checkbox" name="fasilitas[]" value="{{$f->id}}">{{$f->nama_fasilitas}}
                </td>
                @endforeach
               </tr>
             </table>
           </div>
           <small id="emailHelp" class="form-text text-muted"></small>

           <div>
           <button type="submit" class="btn btn-primary">Tambah</button>
         </div>
       </form>
               </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">

      <table class="table table-sm table-bordered table-hover">
        <tr>
          <th>#</th>
          <th>Nama Kategori</th>
          <th>Jumlah Kamar</th>
          <th>image</th>
          <th>Fasilitas</th>
          <!-- <th>Manage</th> -->
        </tr>
        <tr>
          <?php
        $No = 1;?>
        @foreach($kategorikamar as $kategori)
          <td>{{ $No++ }}</td>
          <td>{{$kategori->nama}}</td>
          <td>{{$kategori->jumlah}}</td>
          <td><img src="/images/{{$kategori->image}}" style="width: 50px; height: 50px;"></td>
          <td>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{$kategori->id}}"><span class="fa fa-eye fa-1x"></span></button>
            <div class="modal fade" id="exampleModal{{$kategori->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Fasilitas Kamar</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <table class="table table-hover">
                      <tr>
                        <!-- <th>No</th> -->
                        <th>Nama fasilitas</th>
                      </tr>
                      <?php
                        $i = 0;
                        $fasilitasKategori = \App\fasilitasKategori::where('id_kategori', $kategori->id)->get();
                      ?>
                      @foreach($fasilitasKategori as $fk)
                      <?php
                          $i++;
                          $fasilitas = \App\fasilitasModel::find($fk->id_fasilitas);
                      ?>
                      <tr>
                        <!-- <td>{{ $No++ }}</td> -->
                        <td>{{$fasilitas->nama_fasilitas}}</td>
                      </tr>
                      @endforeach
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </td>
          <!--  <td><a href="{{ URL('admin/'.$kategori->id.'/delete')}}" class="fa fa-trash fa-1x " style="color:orange;"></a></td> -->
        </tr>
        @endforeach
        
      </table>

    </div>
  </div>
</div>
</div>
@endsection
