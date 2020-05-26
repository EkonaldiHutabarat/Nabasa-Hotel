@extends('layouts.admin_layout')
@section('content')

<div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Daftar Bukti Pembayaran</li>
    </ol>



<div class="container">
	 <table class="table table-hover">
	 	<tr>
	 		<th>No</th>
	 		<th>Atas Nama</th>
	 		<th>Jumlah Transfer</th>
	 		<th>Bukti Transfer</th>
	 		<th>Aksi</th>
	 	</tr>
	 	<tr>
	 		<?php $No=1; ?> 
	 		@foreach($PembayaranModel as $daf)
	 		<td>{{ $No++ }}</td>
	 		<td>{{$daf->atasnama}}</td>
	 		<td>{{"Rp. ". number_format((int)$daf->total).".00"}}</td>
	 		<td><img src="/image/{{$daf->image}}" style="width: 50px; height: 50px;"></td>
	 		<td>
	 			<a href="{{ URL('admin/BuktiTransfer/'.$daf->id.'/hapus')}}" class="btn btn-danger btn-sm" style="color:orange;">hapus</a>
	 		</td>
	 	</tr>
	 	 @endforeach
	 </table>

@endsection