@extends('layouts.admin_layout')
@section('content')
<div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Daftar Pemesanan Meeting Room</li>
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
			<button class="btn btn-info btn-sm">Konfirmasi</button>
		</td>
	</tr>
	@endforeach
		@endif
</table>
@endsection