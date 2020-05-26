@extends('layouts.app')

@section('content')

 <div class="rooms text-center">
	 <div class="container-fluid">
		 <h3>Fasilitas Umum</h3>
		<!--  <div class="room-grids"> -->
			<div class="container-fluid">
			  <div class="row">
			  	 @foreach($DaftarFasilitas as $umum)
			    <div class="col-md-4">
			    <img class="image" src="/image/{{$umum->image}}">
				   <p class="makanan">{{$umum->namafasilitasumum}}</p>
				</div>
				@endforeach
			</div>
		</div>	
	  </div>
</div>


@endsection