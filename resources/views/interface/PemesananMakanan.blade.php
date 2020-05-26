@extends('layouts.app')

@section('content')
	
<div class="container">
      @if(session('sukses'))
          <div class="alert alert-success" role="alert">
          {{session('sukses')}}
        </div>
      @endif

<div class="rooms text-center">
	 <div class="container-fluid">
	 	<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            	<form method="post" action="{{URL('pembayaran') }}" enctype="multipart/form-data">
                @csrf
                <div class="card-body" style="height: 400px;">
                	<label>Silahkan Kirim Bukti Transfer anda</label>
                  <p>Rek:00835672211417001</p>
                   <input type="text" name="atasnama" class="form-control" placeholder="Atas Nama" required="">
                   <input type="text" name="total" class="form-control" placeholder="total harga" required="">
                   <input type="file" class="form-control" name="image" required="">

                 	<button type="submit" class="btn btn-primary" style="margin-right: 100%;margin-top: 10px;">Kirim</button>
                   </form>
                </div>
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