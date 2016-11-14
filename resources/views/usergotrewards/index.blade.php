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
        <a class="navbar-brand" href="{{ URL::to('rewards') }}">Rewards</a>
    </div>

</nav>

<h1>All the rewards</h1>

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>ID</td>
            <td>UserName</td>
            <td>promotionName</td>

            <td>Actions</td>
        </tr>
    </thead>
    <tbody>
    @foreach($usergotrewards as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->username }}</td>
            <td>{{ $value->promotionName }}</td>


            <!-- we will also add show, edit, and delete buttons -->
            <td>

              {{ Form::open(array('url' => 'rewards/' . $value->id, 'class' => 'pull-right')) }}
               {{ Form::hidden('_method', 'DELETE') }}
               {{ Form::submit('Delete this Nerd', array('class' => 'btn btn-warning')) }}
           {{ Form::close() }}

            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>
