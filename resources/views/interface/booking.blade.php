@extends('layouts.app')

@section('content')

	 
<center >
	
	 <div class="container">
	  <div class="row">
	  	<a href="{{URL('daftarpesanankamar')}}">
	    <div class="col">
	    	<div class="pesan_shadow">
		      <span class="text">Kamar</span>
		      <div>
		      	<img class="image_shadow" src="image/1.JPG" style="width: 250px;, height:100px;"/>
		      </div>
		  </div>
	    </div>
	    </a>
	    <a href="{{URL('daftarpemesananmakanan')}}">
	    <div class="col">
			<div class="pesan_shadow">
		      <span class="text">Restaurant</span>
		      <div>
		      	<img class="image_shadow" src="image/Resto.JPG" style="width: 250px;, height:100px;"/>
		      </div>
		  </div>
		</div>
		</a>

		<a href="{{URL('daftarpemesananRuangRapat')}}">
	    <div class="col">
			<div class="pesan_shadow">
		      <span class="text">Meeting Room</span>
		      <div>
		      	<img class="image_shadow" src="image/conference.JPG" style="width: 250px;, height:100px;"/>
		      </div>
		  </div>
		</div>
		</a>

	    </div>
	  </div> 
</center>




			 
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