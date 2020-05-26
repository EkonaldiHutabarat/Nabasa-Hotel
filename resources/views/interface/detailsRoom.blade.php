@extends('layouts.app')

@section('content')
 <div class="rooms text-center">
	 <div class="container">
	 @if($databooking->isEmpty())
                  <h2>Data Kamar Masih Kosong</h2>
			@else
	 	@foreach($databooking as $booking)
		 <div class="room-grids">
			 <div class="col-md-4 room-sec">
				 <a href="#"><img class="image" src="{{ asset('images/'.$booking->images)}}" alt="" style="width: 500px;, height:300px;" disable=""/></a>
				 <div class="caption">
					 <?php 
					 	if($booking->status == 1){
					 ?>
						<a href="#">Kamar sedang digunakan</a>
					 <?php		 
						 }else{
							 ?>
							 <a href="{{URL('displayKamar/'.$booking->id)}}">Pesan Sekarang</a>
						
							 <?php
						 }
					 ?> 
					<span>{{"Rp. ". number_format((int)$booking->harga).".00"}}</span>
				 </div>
				 <h4>{{$booking->fasilitas}}</h4>
				 <!-- <div class="items">
					 <a href="#"><span class="img1"> </span></a>
					 <a href="#"><span class="img2"> </span></a>
					 <a href="#"><span class="img3"> </span></a>
					 <a href="#"><span class="img4"> </span></a>
					 <a href="#"><span class="img5"> </span></a>
					 <a href="#"><span class="img6"> </span></a>
				 </div> -->
			</div>
		@endforeach	 
		@endif 
</div>
<div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->

@endsection