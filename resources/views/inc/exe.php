<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="lightbox.min.css">
    <script type="text/javascript" src="lightbox-plus-jquery.min.js"></script>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

     <title>{{ config('app.name', 'Laravel') }}</title>
     <script src="{{ asset('js/app.js') }}" defer></script>
     <link href="{{ asset('css/app.css') }}" rel="stylesheet">

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
    <script type="text/javascript" async="" src="https://www.google-analytics.com/analytics.js" nonce="15c417e6-168c-49c7-808c-98e80fb8efa6"></script>


    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">

    <title>Document</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg  ">
  <a class="navbar-brand" href="{{ url('/posts') }}">{{ config('app.name', 'Laravel') }}</a>
    <div class="container-fluid col-12">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <div class="envelope">
          <ul>
            <li><i class="fa fa-envelope" aria-hidden="true"></i>
            </li>
          </ul>
        </div>
          <div class="iconnav">
          <ul class="navbar-nav ml-auto">
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                               
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                            </li>
                        @endguest
                    </ul>
          <ul class="rigth navbar-nav me-auto mb-2 mb-lg-0">
            <span class=" iconadmin"> 
                <i class="fa fa-user-circle" aria-hidden="true"></i>
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>{{ Auth::user()->name }} <span class="caret"></span>
                    </a>
            </span>
          </ul> 
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          </ul>  
        </div>
      </div>
    </div>
  </nav>

 <div class="wrapper">
  <div class="sidebar">
    <div class="admin">
      <img src="MUSTAPHA.jpg" style="width: 100px; border-radius: 100%;"  alt="">
      <p>Admin Admin</p>
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
    <div class="info">
      <div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero voluptates animi reiciendis, ad sunt nisi autem officiis delectus, quasi aliquam sed quod eos eius inventore! Temporibus quia odio eaque vitae.</div>
    </div>
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
 }
</style> 

