<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Redeem Code Management</title>
  <link rel="shortcut icon" href="assets/images/favicon.ico" />
  <!-- Styles -->
  <link rel='stylesheet prefetch' href='css/bootstrap.min.css'>
  <link rel='stylesheet prefetch' href='css/bootstrap-theme.min.css'>

  <!-- Fonts -->
  <link rel="stylesheet" type="text/css"  href="assets/fonts/font.css">
  <link rel="stylesheet" href="assets/fonts/awesome/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css"  href="css/shopstyle.css">

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
                  <img src="assets/images/banner.png" height="22" width="100">
              </a>
          </div>

          <div class="collapse navbar-collapse" id="app-navbar-collapse">
              <!-- Left Side Of Navbar -->
              <ul class="nav navbar-nav">
                  <li><a href="{{ url('/home') }}"><i class="fa fa-user"></i> My Profile</a></li>
              </ul>
              <ul class="nav navbar-nav">
                  <li><a href="/redeemcodes"><i class="fa fa-link"></i> Redeem Code</a></li>
              </ul>
              <ul class="nav navbar-nav">
                  <li><a href="/redeemcodes/create"><i class="fa fa-plus"></i> New</a></li>
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
      REDEEM CODE
    </span>
    &mdash; All Jamsai points here &mdash;
  </p>
  <br>


<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="container">
      <div class="alert alert-warning">{{ Session::get('message') }}</div>
    </div>
@endif

<div class="container">
  <table class="table table-inverse">
      <thead>
          <tr>
              <td style="font-weight: bold;">ID</td>
              <td style="font-weight: bold;">Redeem Code</td>
              <td style="font-weight: bold;">Value</td>
              <td style="font-weight: bold;">Action</td>
          </tr>
      </thead>
      <tbody>
      @foreach($redeemCodes as $key => $value)
          <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->redeemcode }}</td>
              <!-- <td>{{ $value->description }}</td> -->
              <!-- <td>{{ $value->issueBy }}</td> -->
              <td>{{ $value->value }}</td>

              <!-- we will also add show, edit, and delete buttons -->
              <td>

                  <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                  @if (Auth::user()->type==2)<!-- shop keeper -->
                    {{ Form::open(array('url' => 'redeemcodes/' . $value->id)) }}
                       {{ Form::hidden('_method', 'DELETE') }}
                       {{ Form::submit('Delete this code', array('class' => 'btn btn-md')) }}
                   {{ Form::close() }}
                 @endif

                  <!-- we will add this later since its a little more complicated than the other two buttons -->

                  <!-- show the nerd (uses the show method found at GET /nerds/{id} -->



              </td>
          </tr>
      @endforeach
      </tbody>
  </table>
</div>

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.3/jquery.min.js" integrity="sha384-I6F5OKECLVtK/BL+8iSLDEHowSAfUo76ZL9+kGAgTRdiByINKJaqTPH/QVNS1VDb" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}
</body>
</html>
