@extends('layouts.app')

@section('content')

<link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="{{URL::asset('js/jquery.min.js')}}"></script>


<div class="banner" style="margin-top:-25px;">
			<div class="banner-info text-center">
			<h3><label>Hello,</label> You've Reached</h3>
			<h1>HOTEL NABASA</h1>
			<span></span>
			<ul>
			 <li><a class="scroll" href="#">HOTEL</a><i class="line"></i></li>
			 <li><a class="scroll" href="#">RESTAURANT</a><i class="line2"></i></li>
			 <li><a class="scroll" href="#">CONFERENCE</a></li>
			 <div class="clearfix"></div>
			</ul>
			</div>
	  </div>
</div>

<!---strat-date-piker---->
<link rel="stylesheet" href="{{URL::asset('css/jquery-ui.css')}}" />
<script src="{{URL::asset('js/jquery-ui.js')}}"></script>
		  <script>
				  $(function() {
				    $( "#datepicker,#datepicker1" ).datepicker();
				  });
		  </script>
			
<!---/End-date-piker---->
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/JFGrid.css')}}" />
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/JFFormStyle-1.css')}}" />
<script type="text/javascript" src="{{URL::asset('js/JFCore.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('js/JFForms.js')}}"></script>
<!-- Set here the key for your domain in order to hide the watermark on the web server -->
<script type="text/javascript">
	(function() {
		JC.init({
			domainKey: ''
		});
	})();
</script>
<div class="online_reservation">
		   <div class="b_room">
			  <div class="booking_room">
				  <div class="reservation">
					  <ul>				
						 <li  class="span1_of_1 left">
							 <h5>Arrival</h5>
							 <div class="book_date">
								 <form>
								 <input class="date" id="datepicker" type="text" value="2/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '2/08/2013';}">
								 </form>
							 </div>					
						 </li>
						 <li  class="span1_of_1 left">
							 <h5>Depature</h5>
							 <div class="book_date">
							 <form>
								<input class="date" id="datepicker1" type="text" value="22/08/2013" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '22/08/2013';}">
							 </form>
						     </div>		
						 </li>
						 <li class="span1_of_1">
							 <h5>Room type</h5>
							 <!----------start section_room----------->
							 <div class="section_room">
							      <select id="country" onchange="change_country(this.value)" class="frm-field required">
										<option value="null">Standard Single Room</option>
										<option value="null">Suite room</option>         
										<option value="AX">Single room</option>
										<option value="AX">Double room</option>
							      </select>
							 </div>	
						 </li>
						 <li class="span1_of_3">
								<div class="date_btn">
									<form>
										<input type="submit" value="View Prices" />
									</form>
								</div>
						 </li>
						 <div class="clearfix"></div>
					 </ul>
				 </div>
			  </div>
				<div class="clearfix"></div>
		  </div>
	  </div>
</div>


<div class="rooms text-center">
	 <div class="container">
		 <h1 style="margin-top: 50px;">Our Types Rooms</h1>
		 <div class="room-grids">
			@if($datakategori->isEmpty())
		 		<h2>Data Kamar belum ada</h2>
					@else
			 	@foreach($datakategori as $kategori)
			 	<div class="col-md-4 room-sec">
				 <a href="{{URL('detailsRoom/'.$kategori->id)}}" method="GET"><img src="images/{{$kategori->image}}"
				 style="width: 340px; height: 200px;" alt=""/></a>
				 <div class="caption">
					<span>{{$kategori->count()}} &nbsp kamar tersedia</span>
					<a href="{{URL('detailsRoom/'.$kategori->id)}}" method="GET">Lihat Daftar Kamar</a>
				 </div>
				 	<h4>{{$kategori->nama}}</h4>

				 <div class="items">
				 	<!-- @foreach($fasilitasKat as $key) -->
				 	<h4>{{$key->nama}}</h4>
					 <!-- @endforeach -->
				 </div>
				 </div>
				  @endforeach
					@endif

			 
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