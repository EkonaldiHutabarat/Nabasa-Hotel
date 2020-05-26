
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<div class="rooms text-center">
	 <div class="container-fluid">
	 	 <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">Dashboard</a>
	      </li>
	      <li class="breadcrumb-item active">Daftar Pesanan</li>
	    </ol>

<table class="table table-bordered">
	<tr>
		<th>Atas Nama</th>
		<th>Kontak</th>
		<th>Jumlah Kursi</th>
		<th>Start</th>
		<th>End</th>
		<th>Tambahan</th>
		<th>Konfirmasi</th>
	</tr>
	<tr>
	@if($Rap->isEmpty())
		<h3>Belum Ada Pemesanan</h3>
		@else
		@foreach($Rap as $addBook)
		<td>{{$addBook->nama}}</td>
		<td>{{$addBook->notlpn}}</td>
		<td>{{$addBook->jmlhkursi}}</td>
		<td>{{$addBook->start}}</td>
		<td>{{$addBook->end}}</td>
		<td>{{$addBook->tambahan}}</td>
		<td>
			<a class="btn btn-sm btn-info" href="{{URL('/pembayaran')}}">Lanjut ke pembayaran</a>
			<!-- <a class="btn btn-warning  btn-sm" href="">Hapus</a> -->
			
		</td>
	</tr>
	@endforeach
		@endif
</table>
@endsection