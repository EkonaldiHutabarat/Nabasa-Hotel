@extends('layouts.admin_layout')
@section('content')

<div id="content-wrapper">
      <div class="container-fluid">

    <!-- Breadcrumbs-->
    <ol class="breadcrumb" style="width: 1050px;">
      <li class="breadcrumb-item">
        <a href="#">Dashboard</a>
      </li>
      <li class="breadcrumb-item active">Daftar Pemesanan Makanan</li>
    </ol>

<table class="table table-bordered">
	<tr>
		<th>Atas Nama</th>
		<th>Nama Makanan</th>
		<th>Harga</th>
		<th>Waktu</th>
		<th>Konfirmasi</th>
	</tr>
	@foreach($data as $makanan)
	<tr>
		<td>{{ $makanan->nama }}</td>
		<td>{{ $makanan->deskripsi }}</td>
		<td>{{"Rp. ". number_format((int)$makanan->harga).".00"}}</td>
		<td><?php echo date('d-m-Y');?></td>
		<td>
			<button class="btn btn-info btn-sm">Konfirmasi</button>
		</td>
	</tr>
	@endforeach
</table>
@endsection