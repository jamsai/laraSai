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

<h1>Showing {{ $promotion->promotionName }}</h1>

    <div class="jumbotron text-center">
        <h2>{{ $promotion->promotionID }}</h2>
        <p>
            <strong>Description:</strong> {{ $promotion->description }}<br>
            <strong>IssueBy:</strong> {{ $promotion->issueBy }}
        </p>
    </div>

</div>
</body>
</html>
