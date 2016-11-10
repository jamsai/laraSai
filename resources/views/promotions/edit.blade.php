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
{{ Form::model($promotion, array('route' => array('promotions.update', $promotion->id), 'method' => 'PUT')) }}

    <div class="form-group">
        {{ Form::label('promotionName', 'promotionName') }}
        {{ Form::text('promotionName', null, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('value', 'value') }}
        {{ Form::email('value', null, array('class' => 'form-control')) }}
    </div>



    {{ Form::submit('Edit the Nerd!', array('class' => 'btn btn-primary')) }}

{{ Form::close() }}



</div>
</body>
</html>
