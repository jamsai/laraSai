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

<h1>edit a Promotion</h1>
{{ Form::model($promotion, array('route' => array('promotions.update', $promotion->id), 'method' => 'PUT')) }}
<!-- {!! Form::open(['url' => '/editPromotion', 'method' => 'get'])!!} -->

<div class="form-group">
    {!! Form::label('PromotionName', 'PromotionName:') !!}
    {!! Form::text('promotionName', $promotion['promotionName'] , ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Description', 'Description:') !!}
    {!! Form::textarea('description', $promotion['description'], ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('Value', 'Value:') !!}
    {!! Form::text('value', $promotion['value'], ['class' => 'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('issueBy', 'issueBy:') !!}
    {!! Form::text('issueBy', $promotion['issueBy'], ['class' => 'form-control']) !!}
</div>
<!-- <div class="form-group">
    {!! Form::label('bday', 'Expired:', ['class' => 'col-md-4 control-label']) !!}
      <div class="col-md-6">
       {!! Form::input('bday', $promotion['bday'], date('Y-m-d'), ['class' => 'form-control']) !!}
      </div>
</div> -->
<div class="form-group">
    {!!Form::submit('Edit Promotion!');!!}
</div>

</div>
</body>
</html>
