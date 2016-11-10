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
        <a class="navbar-brand" href="{{ URL::to('redeemcodes') }}">RedeemCode</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('redeemcodes') }}">View All RedeemCode</a></li>

        <li><a href="{{ URL::to('redeemcodes/create') }}">Create a RedeemCode</a>

    </ul>
</nav>

<h1>All the Redeemcodes</h1>

<h1>Generate RedeemCode</h1>


{!! Form::open(['action' => 'ShopController@generateRedeemCode', 'method' => 'get'])!!}
<div class="form-group">
    {!! Form::label('amoutOfRedeemValue', 'amoutOfRedeemValue') !!}
    {!! Form::text('amoutOfRedeemValue', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::submit('Generate!');!!}
</div>
{!! Form::close() !!}


</div>
</body>
</html>
