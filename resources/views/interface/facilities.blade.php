@extends('layouts.app')

@section('content')

 <div class="rooms text-center">
	 <div class="container-fluid">
		<!--  <div class="room-grids"> -->
			<div class="container-fluid">
			  <div class="row">
			  	 @foreach($DaftarFasilitas as $umum)
			    <div class="col-md-3">
			    <img class="image" src="/image/{{$umum->image}}"style="width: 500px;, height:300px;" />
				   <p class="makanan">{{$umum->namafasilitasumum}}</p>
				</div>
				@endforeach
			</div>
		</div>	
	  </div>
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