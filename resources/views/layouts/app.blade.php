<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>My Jamsai</title>

    <!-- Styles -->
    <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
    <link rel='stylesheet prefetch' href='css/bootstrap-theme.min.css'>

    <!-- Fonts -->
    <link rel="stylesheet" type="text/css"  href="assets/fonts/font.css">
    <link rel="stylesheet" href="assets/fonts/awesome/css/font-awesome.min.css">


    <style>
    #menu {
        background:rgba(255,255,255,0.8);
    }
        .fa-btn {
            margin-right: 6px;
        }
        .animate
        {
        	transition: all 0.1s;
        	-webkit-transition: all 0.1s;
        }

        .action-button
        {
        	position: relative;
        	padding: 5px 15px;
          margin: 0px 10px 10px 0px;

        	border-radius: 10px;
        	color: #FFF;
        	text-decoration: none;
        }

        .blue
        {
        	background-color: #3498DB;
        	border-bottom: 5px solid #2980B9;
        	text-shadow: 0px -2px #2980B9;
        }

        .red
        {
        	background-color: #E74C3C;
        	border-bottom: 5px solid #BD3E31;
        	text-shadow: 0px -2px #BD3E31;
        }

        .green
        {
        	background-color: #82BF56;
        	border-bottom: 5px solid #669644;
        	text-shadow: 0px -2px #669644;
        }

        .yellow
        {
        	background-color: #e1ae13;
        	border-bottom: 5px solid #b68c10;
        	text-shadow: 0px -2px #b68c10;
        }

        .gray
        {
        	background-color: #989caf;
        	border-bottom: 5px solid #666b84;
        	text-shadow: 0px -2px #666b84;
        }

        .purple
        {
        	background-color: #b98eb1;
        	border-bottom: 5px solid #a06797;
        	text-shadow: 0px -2px #a06797;
        }

        .action-button:active
        {
          text-decoration: none;
        	transform: translate(0px,5px);
          -webkit-transform: translate(0px,5px);
        }

        /* Animate Background Image */
        @-webkit-keyframes aitf {
          0% {
            background-position: 0% 50%;
          }
          100% {
            background-position: 100% 50%;
          }
        }
    </style>
</head>
<body id="app-layout">
    <nav id="menu" class="navbar navbar-default navbar-static-top">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="assets/images/banner.png" height="22" width="100">
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    @if (Auth::guest())
                    @else
                    <li><a href="{{ url('/home') }}"><i class="fa fa-user"></i> My Profile</a></li>
                    @endif
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}"><i class="fa fa-btn fa-sign-in"></i>Log In</a></li>
                        <li><a href="{{ url('/register') }}"><i class="fa fa-pencil-square-o"></i>Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->username }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    <br>
    @yield('content')

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
