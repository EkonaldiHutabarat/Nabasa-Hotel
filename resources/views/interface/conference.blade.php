@extends('layouts.app')

@section('content')
<div class="container">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif

<div class="container">
	<div class="row">
		<div class="col-md-8">
			<div class="card"style="height: 500px;">
				<center>
				@if($conference->isEmpty())
                  <h2>data kosong</h2>
                  @else
				@foreach($conference as $con)
				<img class="image" src="image/{{$con->image}}" alt="" style="width:650px;height:300px; margin-top:30px;">
				
				</center>
				<center>
				<h3 style="padding-top:20px;">{{"Rp. ". number_format((int)$con->harga).".00"}}</h3>
				</center>
				<div>
				<span style="padding-top:20px;">{{$con->deskripsi}}</span>
				</div>
				
				
				
				@endforeach
				@endif



			</div>
		</div>
		<div class="card col-md-4">
			<div>
				<form method="post" action="{{ URL('conference') }}" style="width:100%;" enctype="multipart/form-data">
				@csrf
				<center>
				<h4 style="margin-top:30px;">PEMESANAN RUANG RAPAT</h4>
				</center>
					<input type="text" name="nama" class="form-control" placeholder="atas nama" style="height:35px;margin-top:30px;">
					<input type="text" name="notlpn" class="form-control" placeholder="nomor telepon" style="height:35px;">
					<input type="text" name="jmlhkursi" class="form-control" placeholder="jumlah kursi" style="height:35px;">
					<input type="text" name="start" class="form-control" placeholder="mulai* hari/tanggal" style="height:35px;">
					<input type="text" name="end" class="form-control" placeholder="selesai* hari/tanggal" style="height:35px;">
					<hr>
					<textarea name="tambahan" id="" cols="30" rows="10" placeholder="kebutuhan tambahan"style="height:80px;width:100%;"></textarea>
					<hr>
					<input type="submit" value="Pesan" class="btn btn-sm btn-info">
				</form>
			</div>
		</div>
		</div>
	</div>
</div>

@endsection