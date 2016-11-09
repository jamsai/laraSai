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
        <a class="navbar-brand" href="{{ URL::to('promotions') }}">Promotion</a>
    </div>
    <ul class="nav navbar-nav">
        <li><a href="{{ URL::to('promotions') }}">View All Promotions</a></li>
        <li><a href="{{ URL::to('promotions/create') }}">Create a Promotion</a>
    </ul>
</nav>

<h1>Create a Promotion</h1>

{!! Form::open(['action' => 'ShopController@createPromotion', 'method' => 'get'])!!}
<div class="form-group">
    {!! Form::label('PromotionName', 'PromotionName:') !!}
    {!! Form::text('promotionName', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Value', 'Value:') !!}
    {!! Form::text('value', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('issueBy', 'issueBy:') !!}
    {!! Form::text('issueBy', null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!!Form::submit('Click Me!');!!}
</div>
{!! Form::close() !!}


</div>
</body>
</html>
