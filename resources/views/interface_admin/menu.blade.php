@extends('layouts.admin_layout')

@section('content')

   <!-- Breadcrumbs-->
   <ol class="breadcrumb" style="width:1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Kategori Menu</li>
    
    </ol>

<div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">Tambah Kategori Kamar</h5>
        <form action="{{URL('admin/menu/createmenuRes')}}" method="POST" enctype="multipart/form-data">
          @csrf
         <input name="namamenu" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Kategori" required="">
         <small id="emailHelp" class="form-text text-muted"></small>
         <div>
           <button type="submit" class="btn btn-primary">Tambah</button>
         </div>
        <!--   -->
        </form>
      </div>
    </div>
  </div>
  <div class="col-sm-6">

      <table class="table table-hover table-sm">
        <tr>
          <th>#</th>
          <th>Nama Kategori</th>
          <th>Hapus</th>
        </tr>
        <tr>
          <?php $No=1; ?>
           @foreach($menuKategori as $kategori)
           <td>{{ $No++ }}</td>
          <td>{{$kategori->namamenu}}</td>
          <td>
            <a href="{{ URL('admin/menu/'.$kategori->id.'/hapus')}}" class="fa fa-trash fa-1x " style="color:orange;"></a>
          </td>
        </tr>
        @endforeach

        
      </table>
    </div>
  </div>
</div>

@endsection