@extends('layouts.app')

@section('content')
<div class="contact-bg2">
	 <div class="container">
		 <div class="booking">
			 <center>
			 <h1>Booking</h1>
			 </center>
			 <div class="col-md-8 booking-form">
				 
				 <form method="post" action="{{ URL('daftarpesanankamar/'.$ids) }}">
				 	@csrf
					 	<h5>Atas Nama</h5>
					 <input name="nama" type="text" value="" required="">
					 <h5>Nomor KTP</h5>
					 <input name="ktp" type="text" value="" required="">
					 <h5>CHECK IN</h5>
					 <!-- tanggal -->
					 <select class="arrival" name="tanggal_check_in" required="">
					 	<option value="">Pilih tanggal</option>
						<?php for($a = 1; $a<= 31; $a++) {?>
						 <option value=" <?php  echo $a ?> "><?php  echo $a ?> </option>
						 <?php  }?>
	 
					 </select>
					 <select class="arrival" name="bulan_check_in" required="">
					 	<!-- bulan -->
						 <option value="">Pilih bulan</option>
						 <?php 
						 		$nama_bulan = array('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agst','Sept','Okt','Nov','Des');
						  ?>

						 <?php for($m = 0; $m<= 11; $m++) {?>
						 <option value=" <?php  echo $m ?> "><?php  echo $nama_bulan[$m] ?> </option>
						 <?php  }?>
					 </select>
					 <!-- tahun -->
					 <select class="arrival" name="tahun_check_in" required="">
						<option value="">Pilih tahun</option>
						<?php for($y = date('Y'); $y>= 2019; $y--) {?>
						 <option value=" <?php  echo $y ?> "><?php  echo $y ?> </option>
						 <?php  }?>
					 </select>
					 <h5>CHECK OUT</h5>
					 <select class="arrival" name="tanggal_check_out" required="">
						 <option value="">Pilih tanggal</option>
						<?php for($a = 1; $a<= 31; $a++) {?>
						 <option value=" <?php  echo $a ?> "><?php  echo $a ?> </option>
						 <?php  }?>				 
					 </select>
					 <select class="arrival" name="bulan_check_out" required="">
						 <!-- bulan -->
						 <option value="">Pilih bulan</option>
						 <?php 
						 		$nama_bulan = array('Jan','Feb','Mar','Apr','Mei','Jun','Jul','Agst','Sept','Okt','Nov','Des');
						  ?>

						 <?php for($m = 0; $m<= 11; $m++) {?>
						 <option value=" <?php  echo $nama_bulan[$m] ?> "><?php  echo $nama_bulan[$m] ?> </option>
						 <?php  }?>
					 </select>
					 <select class="arrival" name="tahun_check_out" required="">
						<option value="">Pilih tahun</option>
						<?php for($y =2019; $y>=date('Y'); $y--) {?>
						 <option value=" <?php  echo $y ?> "><?php  echo $y ?> </option>
						 <?php  }?>
					 </select>
					 <h5 class="mem">MEMBERS</h5>
					 <input min="1" type="number" id="quantity" name="quantity" value="1" class="form-control input-small">
					 <h5>Tambahan</h5>
					 <textarea value="" name="tambahan"></textarea>
					 <input type="submit" value="Pesan">
					 <input type="reset" value="Reset">
				 </form>			      
			 </div>
		
				
			 </div>
		
<div class="clearfix"> </div>

@endsection