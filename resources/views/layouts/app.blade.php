<!DOCTYPE html>
<script src="js/jquery.min.js"></script>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- css tambahan -->
     <link href="{{URL::asset('css/cssku.css')}}" rel="stylesheet">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel ') }}</title>
    <script type="{{ URL::asset('text/javascript')}}" src="jquery.js"></script>
    
    

    <!-- Scripts -->
    <script src="{{ URL::asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="{{ URL::asset('https://fonts.gstatic.com')}}">
    <link href="{{URL::asset('https://fonts.googleapis.com/css?family=Nunito')}}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Pinyon+Script' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Quicksand:400,700' rel='stylesheet' type='text/css'>
<link href="{{URL::asset('css/bootstrap.css')}}" rel='stylesheet' type='text/css'/>
<link href="{{URL::asset('css/style.css')}}" rel="stylesheet" type="text/css" media="all"/>
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
    <body>
        <div class="header">
    <div class="top-header">
     <div class="container">
         <div class="logo">
             <img src="{{ asset('images/logo.png') }}"/>
         <div class="clearfix"></div>
         </div>
         <span class="menu"> </span>
         <div class="m-clear"></div>
         <div class="top-menu">
             <ul>
                 <li><a class="scroll" href="{{url('index')}}">HOME</a></li>
                 <li><a class="scroll" href="{{url('facilities')}}">FACILITIES</a></li>
                 <li><a class="scroll" href="{{url('restaurant')}}">RESTAURANT</a></li>
                <li><a class="scroll" href="{{url('conference')}}">CONFERENCE</a></li>
                 <!-- <li><a class="scroll" href="{{url('contact')}}">CONTACT US</a></li> -->
                
                  @guest
                     <li><a class="scroll" href="{{url('login')}}">LOGIN</a></li>
                     <li><a class="scroll" href="{{url('register')}}">SIGN UP</a></li>
                      @else
                          <li>
                            <a class="scroll" href="{{url('booking')}}">PESANAN KU</a>
                          </li>
                          <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                              {{ Auth::user()->nama}}
                            </a>
                            <!-- <ul class="dropdown" role="menu">
                                <li>
                                    <a href="{{route('logout')}}"><i class="fa fa-btn fa-sign-out">Logout</i></a>
                                </li>
                            </ul> -->
                          </li>
                          <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">LOGOUT
                            </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                            </form>
                          </li>
                      @endguest
                            



                <div class="clearfix"></div>
             </ul>
             <script>
                $("span.menu").click(function(){
                    $(".top-menu ul").slideToggle(200);
                });
            </script>
         </div>
      </div>
    </div>

        <main class="py-4">
            @yield('content')
        </main>
        <div class="fotter-info">
      <div class="container">
          <div class="col-md-5 details">
             <div class="hotel-info">
                 <h4>ABOUT NABASA HOTEL</h4>
                 <p>Jalan Siliwangi No. 08 Balige, Toba Samosir, Balige, Danau Toba, Sumatera Utara, Indonesia, 22311</p>
             </div>
             <div class="news">
                 <h4>LATEST NEWS</h4>
             </div>
                <div class="clearfix"></div>
         </div>
         <div class="col-md-7 details">
             <div class="join">
                 <h4>DESTINASI TERDEKAT</h4>
                 <p>Museum Batak TB Silalahi</p>
                 <p>Silangit International Airport (DTB)</p>
                 <p>sipinsur Peak</p>
                 <p>Institut Teknologi Del</p>
                 
             </div>
             <div class="member">
             <h4>HUBUNGI KAMI</h4>
                 <p>082162239808</p>
                 <a href="https://Gmail.com"><p>ekonaldihutabarat@gmail.com</p></a>
             </div>
             <div class="clearfix"></div>
         </div>
         <div class="clearfix"></div>
      </div>
        <h6>Developed by <a href="#">PA2_1819_D4TI02</h6>   
</div>
    </div>

</body>
</html>
