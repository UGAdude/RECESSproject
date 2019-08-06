<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title> uft </title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    <style>
		 	body{ background:linen; }
		 	#navlist li{ margin-left:4px;font-weight:800; border:1px solid white; padding:4px; background:wheat; border-radius:3px; }
		 	#headline{font-size:30px; font-weight:400; border-bottom:3px solid black; padding-top:10px; color:green; margin-top:50px;}
		 	a{text-decoration:none; } 
		 	td,th{ padding-left:15px; padding-right:15px; }
		 	tr:nth-child(odd){ background:wheat; }
		 	th{text-align:left; background:burlywood; }
		 	
		 	.navbar-brand{position:absolute; left:5%; top:60px; padding-right:4px; padding-left:4px; z-index:10; border-radius:4px; background:transparent; font-weight:800; font-size:40px;} 
		 	
		 	#navbarSupportedContent{position:absolute; left:0%; top:0px; border:1px solid red; width:100%; padding:4px; padding-right:50px; background:skyblue; color:black; border-top:3px solid gray; }
		 	#topMenu a{float:left; margin-left:4px;font-weight:800; border:1px solid white; padding:4px; background:wheat; border-radius:3px; }
		 	#add-more-container{position:absolute; top:55px; min-width:100px; left:84%; background:linen; border-radius:5px; padding:4px; color:gray;}
		 	#add-more-container:hover{border:2px solid gray; color:white}
		 	#add-more-button{font-size:20px; color:gray; }
		 	#recomendr_div{position:absolute; left:2%; top:280px; width:16%; }
		 	#recomendr_div table{border-top:1px solid skyblue;}
		</style>
</head>
<!--*************************************************************************************************************************-->

<body> 
		<div id="app">
		
        <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}"> U F T </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul id="navlist" class="navbar-nav mr-auto">
						<li class="nav-item"> <a class="navbar-item" href="/home"> Home </a> </li>
						<li class="nav-item"> <a class="navbar-item" href="/donations"> Donations </a> </li>
						<li class="nav-item"> <a class="navbar-item" href="/districts">  Districts </a> </li>
						<li class="nav-item"> <a class="navbar-item" href="payments">  Payments </a> </li>
						<li class="nav-item"> <a class="navbar-item" href="/agents"> Agents </a> </li>
						<li class="nav-item"> <a class="navbar-item" href="/members"> Members  </a> </li>
						<li class="nav-item"> <a class="navbar-item" href="/graphs"> Graphs  </a> </li>
                    </ul>
                    
                    
                    
                    

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                @if (Route::has('register'))
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                @endif
                            </li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

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
            @yield('content')
        </main>
    </div>
</body>
</html>
