<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Job</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <script type="text/javascript" src="{{ URL::asset('/jss/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('/jss/cycle2.js') }}"></script>
         
         
                      
        <!-- Styles -->
        <style>
            html, body {
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                margin: 0;
                padding: 0;
            }
            #container{
                width:100%;
                height:80%;
                position:relative;
                overflow:hidden;
                background: #ff00ff;

            }
            #slideshow{
                height:100%;
                width:100%;

            }
            #slideshow img{
                height:100%;
                width:100%;

            }
            #pager {
                height:120px;
                width:100%;
                position:absolute;
                bottom:5%;
                background: rgba(0,0,0,.5);
                z-index:1000;
                opacity: 0;
                transition: all 0.3s ease-in-out 0s;
            }
            #pager:hover{
                opacity:1;
            }
            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .top-left {
                position: absolute;
                left: 10px;
                top: 18px;
                left-padding:15px;
                text-decoration: none;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
            <div class="top-left links"><a href="{{ url('/') }}">Job</a></div>
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>

            @endif
            <div id="container">
        
            <div id="slideshow" class="cycle-slideshow">
              <img src="{{ url('/img/9.jpg') }}">
              
              </div>
              </div>
              </div>
    </body>
</html>
