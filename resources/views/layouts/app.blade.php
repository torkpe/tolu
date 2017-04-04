<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'job') }}</title>
    <script type="text/javascript" src="{{ URL::asset('/jss/jquery.js') }}"></script>
    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link href="{{ asset('/csss/all.css') }}" media="all" rel="stylesheet" type="text/css" />
    <link href="https://cdn.jsdelivr.net/animatecss/3.5.2/animate.min.css" media="all" rel="stylesheet" type="text/css" />

    <!-- Scripts -->
    <script>
        window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
        ]) !!};
    </script>
</head>
<body>
<div id="wrapper">
    <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <br>
                    @if (Auth::guest())

                    @else
                    &nbsp;&nbsp;<a href="#" class="btn btn-default" id="menu-toggle">></a>
                    @endif
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <span>
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'job') }}
                    </a>
                </span>
                </div>
                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                    </ul>
                    <br/>
                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ route('login') }}">Login</a></li>
                            <li><a href="{{ route('register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
    <div id="sidebar-wrapper">
        <ul class="sidebar-nav">
            <li><a href="/home">Dashboard</a></li>
                    <li class="has-children"><a href="#">My Account</a>
                        <ul>
                            <li><a href="/bankaccount">Update/Edit Profile</a></li>
                            <li><a href="/bankaccount/create">Bank Account</a></li>
                            <li><a href="">Account Settings</a></li>
                        </ul>
                    </li>
                    
                    <li class="has-children"><a href="#">My Donations</a>
                        <ul>
                            <li><a href="/confirm">Received</a></li>
                            <li><a href="">Sent</a></li>
                            
                        </ul>
                    </li>
                    <li><a href="">Upgrade</a></li>
                    
        </ul>
    </div>
    <div id="page-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                
                @yield('content')
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="./js/jquery.js"></script>
<script>
$("#menu-toggle").click( function(e){
    e.preventDefault();
    $("#wrapper").toggleClass("menuDisplayed");
});
$("#sidebar-wrapper ul li.has-children>a").click(function(){
    $(this).parent().siblings().find('ul').stop(true, false, true).slideUp(400);
    $(this).parent().children('ul').stop(true, false, true).slideToggle(400);
});
</script>
    <script src="/js/app.js"></script>
    </body>
    </html>