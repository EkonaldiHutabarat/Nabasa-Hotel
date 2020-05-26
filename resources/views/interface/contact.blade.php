
@extends('layouts.app')

@section('content')
<div class="contact-bg">
	 <div class="container">
	      <div class="contact-us">				
				<div class="contact-us_left">
					<div class="contact-us_info">
			    	 	<h3 class="style">Lihat Lokasi Hotel</h3>
		    	 		<div class="map">
				   			<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.co.in/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265&amp;output=embed"></iframe><br><small><a href="https://maps.google.co.in/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Lighthouse+Point,+FL,+United+States&amp;aq=4&amp;oq=light&amp;sll=26.275636,-80.087265&amp;sspn=0.04941,0.104628&amp;ie=UTF8&amp;hq=&amp;hnear=Lighthouse+Point,+Broward,+Florida,+United+States&amp;t=m&amp;z=14&amp;ll=26.275636,-80.087265" style="color: #242424;text-shadow: 0 1px 0 #ffffff;text-align: left;font-size: 0.7125em;padding: 5px;font-weight: 600;">View Larger Map</a></small>
				   		</div>
      				</div>
      			 <div class="company_address">
				     	<h3 class="style">Hotel Information :</h3>
						<p>Alamat: Jl. Siliwangi No.8, Balige, Kabupaten Toba Samosir, Sumatera Utara</p>
						<p>Telepon: (0632) 322891</p>
						<p>Sumatera Utara</p>
				 	 	<p>Email: <a href="http://www.gmail.com">nabasahotel@gmail.com</a></p>
				   		<p>Follow on: <a href="#">Facebook</a>, <a href="#">Twitter</a></p>
				   </div>
				</div>				
				<div class="contact_right">
				  <div class="contact-form">
				  	<h3 class="style">Hubungi Kami</h3>
					    <form method="post" action="index.html">
					    	<div>
						    	<span><label>NAME</label></span>
						    	<span><input name="userName" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>E-MAIL</label></span>
						    	<span><input name="userEmail" type="text" class="textbox"></span>
						    </div>
						    <div>
						     	<span><label>MOBILE</label></span>
						    	<span><input name="userPhone" type="text" class="textbox"></span>
						    </div>
						    <div>
						    	<span><label>SUBJECT</label></span>
						    	<span><textarea name="userMsg"> </textarea></span>
						    </div>
						   <div>
						   		<input type="submit" value="submit us">
						  </div>
					    </form>
				    </div>
  				</div>		
  				<div class="clear"></div>		
		  </div>
	 </div>	
</div>	 
<!---->
<div class="fotter">
	 <div class="container">
		<!--  <h3>143 City Located Hotels World Wide</h3>
		 <h4>"Hospitality, Quality & Good Locations. We only provide you with the best hotels" - John Deo</h4> -->
		 <!-- <i class="man"></i> -->
	 </div>
</div>
</body>
</html>
@endsection