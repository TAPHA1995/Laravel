
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
     <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title> 

    <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script> 

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet"> 
       <!-- <link rel="stylesheet" href="styleV.css"> -->
       <script src="https://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
	<script src="https://kit.fontawesome.com/a9b45562b5.js" crossorigin="anonymous"></script> 
	<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script> 
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="description" content="Ashion Template">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Cookie&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800;900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <!-- <link rel="stylesheet" href="css/style.css" type="text/css"> -->
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="15c417e6-168c-49c7-808c-98e80fb8efa6"></script>

    <!-- Styles -->
     <link href="{{ asset('css/app.css') }}" rel="stylesheet"> 
 </head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button> 

                <div class="collapse navbar-collapse" id="navbarSupportedContent"> 
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">
                      <li><i class="fa fa-envelope"></i></li>
                      <li><a class="nav-link active" aria-current="page" href="/posts"></a></li>
                      <li><a class="nav-link active" aria-current="page" href="/contact"></a></li>
                      <li><a class="nav-link active" aria-current="page" href="/about"></a></li>
                    </ul> 

                    <!-- Right Side Of Navbar -->
                 <ul class="navbar-nav ml-auto"> 
                         <!-- Authentication Links -->
                         @guest
                            <li class="nav-item">
                                <a class="nav-link" style="color:red;" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <button class="btn btn-primary"><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></button>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <div class="iconadmin">
                                    <i class="fa fa-user"></i>
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>
                                </div>
                                 <!-- <a href="/home">Tableau de bord</a>  -->
                                 <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form> 
                                 </div> 
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> 

         <main class="py-4"> 
            <!-- @yield('content') -->
        </main>
    </div>


    <div class="wrapper">
  <div class="sidebar">
    <div class="admin">
      <img src="MUSTAPHA.jpg" style="width: 100px; border-radius: 100%;"  alt="">
      <p>{{ Auth::user()->name }}</p>
    </div>
    <ul class="lesicons">
      <li><a href="/home"class="fas fa-home"> Dashboad</a></li>
      <li><a href="/posts" class="fas fa-user"> Users</a></li>
      <li><a href="" class="fa fa-list"></a>CMS</li>
      <li><a href="" class="fa fa-cogs"></a>General Setting</li>
      <li><a href="" class="fa fa-cog"></a>Module Setting</li>
    </ul>
  </div>

   <div class="main_content">
    <div class="header"> wellcome .....</div>
    
   </div>
</div> 

</body>
</html>




<style>
    *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    list-style: none;
    text-decoration: none;
}
body{
    background:rgb(226, 226, 198);
}

.wrapper .sidebar ul li:hover{	
    background: white;
}
.wrapper .sidebar{
    position:fixed;
    width: 250px;
    height: 70%;
    background-color:white;
    padding: 30px 0;
}
.wrapper{
    position:fixed;
    width: 250px;
    height: 100%;
    background-color:white;
    margin-top: 20px;
}
.lesicons li{
   padding: 10px;
}
.lesicons li a{
    padding: 10px;
 }
 .sidebar{
    position: relative;
    display:flex;
    justify-content: center;
    flex-direction: column;
    align-items: center;
    margin-top: -50px;
    
 }
 .rigth{
    display: flex;
   
    
 }
 .iconnav{
    display:flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
    margin-left: 70%;

 }
 .envelope{
    display:flex;
    justify-content: center;
    flex-direction: row;
    align-items: center;
   
 }
 .fa-envelope{
    font-size: 40px;

 }
 .navbar{
    background-color: white;
 }
 .iconadmin{
    display:flex;
    justify-content:right;
    align-items:center;
 }
</style> 



</body>
</html> 


