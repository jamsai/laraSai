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
        @if (Auth::user()->type==2)<!-- shop keeper -->
        <li><a href="{{ URL::to('promotions/create') }}">Create a Promotion</a>
        @endif
    </ul>
</nav>

<h1>All the Promotions</h1>
{{ Auth::user()->name }}
{{ Auth::user()->type }}

<!-- will be used to show any messages -->
@if (Session::has('message'))
    <div class="alert alert-info">{{ Session::get('message') }}</div>
@endif

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <td>PromotionID</td>
            <td>PromotionName</td>
            <td>Value</td>
            <td>expired</td>
            <td>Action</td>
        </tr>
    </thead>
    <tbody>
    @foreach($promotions as $key => $value)
        <tr>
            <td>{{ $value->id }}</td>
            <td>{{ $value->promotionName }}</td>
            <!-- <td>{{ $value->description }}</td> -->
            <!-- <td>{{ $value->issueBy }}</td> -->
            <td>{{ $value->value }}</td>
            <td>{{ $value->expired }}</td>

            <!-- we will also add show, edit, and delete buttons -->
            <td>

                <!-- delete the nerd (uses the destroy method DESTROY /nerds/{id} -->
                @if (Auth::user()->type==2)<!-- shop keeper -->
                  {{ Form::open(array('url' => 'promotions/' . $value->id, 'class' => 'pull-right')) }}
                     {{ Form::hidden('_method', 'DELETE') }}
                     {{ Form::submit('Delete this promotion', array('class' => 'btn btn-warning')) }}
                 {{ Form::close() }}
               @endif

                <!-- we will add this later since its a little more complicated than the other two buttons -->

                <!-- show the nerd (uses the show method found at GET /nerds/{id} -->
                <a class="btn btn-small btn-success" href="{{ URL::to('promotions/' . $value->id) }}">Show this Promotion</a>

                <!-- edit this nerd (uses the edit method found at GET /nerds/{id}/edit -->
                @if (Auth::user()->type==2)<!-- shop keeper -->
                  <a class="btn btn-small btn-info" href="{{ URL::to('promotions/' . $value->id . '/edit') }}">Edit this Promotion</a>
                @endif
                @if (Auth::user()->type==1)<!-- customer -->
                  <a class="btn btn-small btn-info" href="{{ URL::to('getreward/' . $value->id) }}">Get Reward</a>
                @endif


            </td>
        </tr>
    @endforeach
    </tbody>
</table>

</div>
</body>
</html>