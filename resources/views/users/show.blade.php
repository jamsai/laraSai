<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Customers</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <!-- Styles -->
  <link rel='stylesheet prefetch' href='{{ URL::to('/') }}/css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='{{ URL::to('/') }}/css/bootstrap-theme.min.css'>

  <!-- Fonts -->
  <link rel="stylesheet" type="text/css"  href="{{ URL::to('/') }}/assets/fonts/font.css">
  <link rel="stylesheet" href="{{ URL::to('/') }}/assets/fonts/awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"  href="{{ URL::to('/') }}/css/shopstyle.css">

</head>

<body>

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
                  <img src="{{ URL::to('/') }}/assets/images/banner.png" height="22" width="100">
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  <li><a href="{{ url('/home') }}"><i class="fa fa-user"></i> My Profile</a></li>
              </ul>
              <ul class="nav navbar-nav">
                  <li><a href="/users"><i class="fa fa-users"></i> Customers</a></li>
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

  <p align="center">
    <span>
      {{ $user->username }}
    </span>
    &mdash; {{ Auth::user()->username }}
    @if(Auth::user()->type == 1)
      (Customer) | <font style="font-weight: bold; font-size: 3rem;">{{ Auth::user()->score }} points</font>
    @else
      (Shopkeeper)
    @endif
     &mdash;
  </p>
  <br><br>

  <div class="container">
    <div class="jumbotron text-left">
      <table style="width:100%;">
        <tr>
          <td><strong>ID</strong></td>
          <td>{{ $user->id }}</td>
        </tr>
        <tr>
          <td><strong>Name</strong></td>
          <td>{{ $user->name }}</td>
        </tr>
        <tr>
          <td><strong>User Name</strong></td>
          <td>{{ $user->username }}</td>
        </tr>
        <tr>
          <td><strong>E-mail</strong></td>
          <td>{{ $user->email }}</td>
        </tr>
        <tr>
          <td><strong>Phone Number</strong></td>
          <td>{{ $user->phonenumber }}</td>
        </tr>
        <tr>
          <td><strong>Point</strong></td>
          <td>{{ $user->score }}</td>
        </tr>
      </table>
    </div>
  </div>

  <div class="container" align="center">
    <a href="javascript:history.go(-1)" class="action-button shadow animate blue">Back</a>
    @if(Auth::user()->type == 3)
      <a class="action-button shadow animate yellow" href="{{ URL::to('users/' . $user->id . '/edit') }}">Edit</a>
    @endif
  </div>

</div>
<!-- JavaScripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
{{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

</body>
</html>
