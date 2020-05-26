@extends('layouts.app')

@section('content')
<div class="container">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif

<link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
 <div class="rooms text-center">
	 <div class="container-fluid">
	 	 <ol class="breadcrumb">
	      <li class="breadcrumb-item">
	        <a href="#">Dashboard</a>
	      </li>
	      <li class="breadcrumb-item active">Hidangan</li>
	    </ol>
		 <h1>Menu Restaurant</h1>
		<!--  <div class="room-grids"> -->
			<div class="container-fluid">
		  <div class="row">
			  	 @foreach($Daftar as $detail)
			    <div class="col-md-4">
			    	<img class="image" src="/image/{{$detail->image}}" style="width: 500px;, height:300px;" />
				   <p class="makanan">{{$detail->deskripsi}}</p>
				   <p class="makanan"> {{"Rp. ". number_format((int)$detail->harga).".00"}}</p>
				   <!-- <a class="pesanmakanan" href="{{URL('detailmakanan')}}">Pesan sekarang</a> -->
				   <a href="{{ URL('pesanmakanan/'.$detail->id) }}" class="pesanmakanan">PESAN SEKARANG</a>
				</div>
				@endforeach
		</div>	
			
	</div>
</div>
	


		
@endsection