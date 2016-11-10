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
        <a class="navbar-brand" href="{{ URL::to('users') }}">Customer</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('users') }}">View All Customers</a></li>
    </ul>
</nav>

<h1>Showing {{ $user->name }}</h1>

    <div class="jumbotron text-center">

        <p>
            <strong>ID:</strong> {{ $user->id }}<br>
            <strong>Name:</strong> {{ $user->name }}<br>
            <strong>UserName:</strong> {{ $user->username }}<br>
            <strong>E-mail:</strong> {{ $user->email }}<br>
            <strong>PhoneNumber:</strong> {{ $user->phonenumber }}<br>
            <strong>Point:</strong> {{ $user->score }}<br>
        </p>
    </div>

</div>
</body>
</html>
