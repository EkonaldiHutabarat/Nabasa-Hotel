
@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="rooms text-center">
	 <div class="container-fluid">
	 	 <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">Dashboard</a>
	      </li>
	      <li class="breadcrumb-item active">Pesanan Makanan</li>
	    </ol>

<div class="container-fluid">
	 <table class="table table-hover">
	 
		 @if($data->isEmpty())
		 <h1>Pemesanan anda masih kosong</h1>
		 @else
		 <tr>
	 		<th>Nama</th>
	 		<th>Pesanan</th>
	 		<th>Total biaya</th>
	 		<th>Aksi</th>
	 	</tr>
		 @foreach($data as $makanan)
		<tr>
			<td>{{ $makanan->nama }}</td>
			<td>{{ $makanan->deskripsi }}</td>
			<td>{{"Rp. ". number_format((int)$makanan->harga).".00"}}</td>
			<td>
			<a class="btn btn-sm btn-info" href="{{URL('/pembayaran')}}">Lanjut ke pembayaran</a>
			</td>
			
		</tr>
		@endforeach
		@endif
	 </table>
</div>

			 
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="fotter">
	 <div class="container">
		 <!-- <h3>143 City Located Hotels World Wide</h3>
		 <h4>"Hospitality, Quality & Good Locations. We only provide you with the best hotels" - John Deo</h4> -->
		<!--  <i class="man"></i> -->
	 </div>
</div>
@endsection