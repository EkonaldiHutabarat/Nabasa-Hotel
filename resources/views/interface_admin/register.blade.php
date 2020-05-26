@extends('layouts.admin_layout')

@section('content')
    <div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1080px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">TambahAdministrator</li>
    
    </ol>

    <div class="container">
    	<div class="row">
    		<h2>Tambah administrator</h2>
    	</div>
    	<div class="">
    	<form action="/reg" method="POST">
          @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nama</label>
          <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" Nama" required="">
          <!-- <small id="emailHelp" class="form-text text-muted"></small> -->
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Hp/Telepon</label>
          <input type="text" name="no_telp" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Phone" required="">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">E-mail</label>
          <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" required="">
          <small id="emailHelp" class="form-text text-muted"></small>
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Password</label>
          <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required="">
        </div>
        <!-- <div class="custom-control custom-checkbox">
            <input type="checkbox" class="custom-control-input" id="customCheck1">
            <label class="custom-control-label" for="customCheck1">Ingat saya</label>
          </div> -->
        <button type="submit" class="btn btn-primary">Daftar</button>
      </form>
</div>
		    

@endsection