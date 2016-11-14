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
      All Customers
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

<!-- will be used to show any messages -->
@if (Session::has('message'))
<div class="container">
    <div class="alert alert-info">{{ Session::get('message') }}</div>
</div>
@endif

<div class="container">
  <table class="table table-inverse">
      <thead>
          <tr>
              <td><strong>ID</strong></td>
              <td><strong>Name</strong></td>
              <td><strong>Score</strong></td>
              <td><strong>Action</strong></td>
          </tr>
      </thead>
      <tbody>
      @foreach($users as $key => $value)
          <tr>
              <td>{{ $value->id }}</td>
              <td>{{ $value->name }}</td>
              <!-- <td>{{ $value->description }}</td> -->
              <!-- <td>{{ $value->issueBy }}</td> -->
              <td>{{ $value->score }}</td>

              <!-- we will also add show, edit, and delete buttons -->
              <td>
                <a class="action-button shadow animate blue" href="{{ URL::to('users/' . $value->id) }}" style= "font-size:1.6rem;">Show</a>
                @if (Auth::user()->type==3)<!-- admin -->
                <a class="action-button shadow animate yellow" href="{{ URL::to('users/' . $value->id . '/edit') }}" style= "font-size:1.6rem;">Edit</a>
                @endif
                @if (Auth::user()->type==2)
                <a class="action-button shadow animate green" href="{{ URL::to('users/' . $value->id . '/add/10') }}" style= "font-size:1.6rem;">+10 point</a>
                <a class="action-button shadow animate green" href="{{ URL::to('users/' . $value->id . '/add/100') }}" style= "font-size:1.6rem;">+100 point</a>

                <a class="action-button shadow animate red" href="{{ URL::to('users/' . $value->id . '/remove/10') }}" style= "font-size:1.6rem;">-10 point</a>
                <a class="action-button shadow animate red" href="{{ URL::to('users/' . $value->id . '/remove/100') }}" style= "font-size:1.6rem;">-100 point</a>
                @endif

                  <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                  @if (Auth::user()->type==3)<!-- admin -->
                    {{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
                       {{ Form::hidden('_method', 'DELETE') }}
                       {{ Form::submit('Delete this customer', array('class' => 'btn btn-md')) }}
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
</body>
</html>
