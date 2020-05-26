
@extends('layouts.app')

@section('content')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="rooms text-center">
	 <div class="container-fluid">
	 	 <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">Dashboard</a>
	      </li>
	      <li class="breadcrumb-item active">Pesanan Kamar</li>
	    </ol>

<div class="container-fluid">
	 <table class="table table-hover">
	 	<tr>
	 		<th>No</th>
	 		<th>Nama</th>
	 		<th>No KTP</th>
	 		<th>Tanggal Check In</th>
	 		<th>Bulan</th>
	 		<th>Tanggal Check out</th>
	 		<th>Bulan</th>
	 		<th>Tahun</th>
	 	
	 		<th>Tambahan</th>
	 		<th>Aksi</th>
	 	</tr>
	 	<tr>
	 		<?php $No=1; ?> 
           @foreach($data as $daftar)
	         <td>{{$No++}}</td>
          	<td>{{$daftar->nama}}</td>
          	<td>{{$daftar->KTP}}</td>
	 		<td>{{$daftar->tanggal_check_in}}</td>
	 		<td>{{$daftar->bulan_check_in}}</td>
	 		<td>{{$daftar->tanggal_check_out}}</td>
	 		<td>{{$daftar->bulan_check_out}}</td>
	 		<td>{{$daftar->tahun_check_in}}</td>
	 		<td>{{$daftar->tambahan}}</td>
	 		
	 		<td>
	 			<a class="btn btn-sm btn-info" href="{{URL('/pembayaran')}}">Lanjut ke pembayaran</a>
	 			<!-- <a class="btn btn-warning  btn-sm" href="">Hapus</a> -->
	 			<a href="{{ URL('/daftarpesanankamar/'.$daftar->id.'/hapus')}}" class="btn btn-danger btn-sm">HAPUS</a>
	 		</td>

	 	</tr>
	 	@endforeach
	 </table>
</div>


		 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="fotter">
	 <div class="container">
</div>
@endsection