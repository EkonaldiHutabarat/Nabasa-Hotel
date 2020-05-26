@extends('layouts.admin_layout')
@section('content')

<div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Daftar Pemesan Kamar</li>
    </ol>

<div class="container">
	 <table class="table table-hover table-bordered">
	 	<tr>
	 		<th>No</th>
	 		<th>Nama</th>
			 <!-- <th>ID Kamar</th> -->
	 		<th>No KTP</th>
	 		<th>Tanggal Check In</th>
	 		<th>Bulan</th>
	 		<th>Tanggal Check out</th>
	 		<th>Bulan</th>
	 		<th>Tahun</th>
	 		<th>Tambahan</th>
			 <!-- <th>Konfirmasi</th> -->
	 	</tr>
	 	<tr>
	 		<?php $No=1; ?> 
           @foreach($data as $daftar)
	         <td>{{$No++}}</td>
          	<td>{{$daftar->nama}}</td>
						<!-- <td>{{$daftar->id_kamar}}</td> -->
          	<td>{{$daftar->KTP}}</td>
	 		<td>{{$daftar->tanggal_check_in}}</td>
	 		<td>{{$daftar->bulan_check_in}}</td>
	 		<td>{{$daftar->tanggal_check_out}}</td>
	 		<td>{{$daftar->bulan_check_out}}</td>
	 		<td>{{$daftar->tahun_check_in}}</td>
	 		<td>{{$daftar->tambahan}}</td>
			 <!-- <td>
				
				<a href="{{URL('admin/konfirmasi'.$daftar->id_kamar)}}" class="btn btn-info btn-sm">Konfirmasi</a>
			 </td> -->

	 	</tr>
	 	@endforeach
	 </table>

@endsection