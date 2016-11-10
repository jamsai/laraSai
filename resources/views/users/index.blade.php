<!-- app/views/nerds/index.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Look! I'm CRUDding</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<nav class="navbar navbar-inverse">
    <div class="navbar-header">
        <a class="navbar-brand" href="{{ URL::to('users') }}">User</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All User</a></li>

    </ul>
</nav>

<h1>All the Customers</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>Name</td>
            <td>Score</td>
            <td>Action</td>
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
              <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id) }}">Show this Customer</a>

              <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/add/1') }}">Add 1 point</a>
              <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/add/5') }}">Add 5 point</a>

              <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/remove/1') }}">Remove 1 point</a>
              <a class="btn btn-small btn-info" href="{{ URL::to('users/' . $value->id . '/remove/5') }}">Remove 5 point</a>
              @if (Auth::user()->type==2)<!-- shop keeper -->
                <a class="btn btn-small btn-success" href="{{ URL::to('users/' . $value->id . '/edit') }}">Edit this Customer</a>
              @endif

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                @if (Auth::user()->type==2)<!-- shop keeper -->
                  {{ Form::open(array('url' => 'users/' . $value->id, 'class' => 'pull-right')) }}
                     {{ Form::hidden('_method', 'DELETE') }}
                     {{ Form::submit('Delete this customer', array('class' => 'btn btn-warning')) }}
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
</body>
</html>
