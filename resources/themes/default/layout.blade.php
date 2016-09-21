<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@section('html_title'){{ $config::valueFor('html_title', config('app.name')) }}@show</title>

    <link href="{{$css_path}}/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="{{$css_path}}/app.css" rel="stylesheet" type="text/css">

    <!-- Make clean loading from local, for now bootstrap stay loaded from remode CDN-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js" integrity="sha384-THPy051/pYDQGanwU6poAc/hOdQxjnOEXzbT+OuUAFqNqFjL+4IGLBgCJC3ZOShY" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.2.0/js/tether.min.js" integrity="sha384-Plbmg8JY28KFelvJVai01l8WyZzrYWG825m+cZ0eDDS1f7d/js6ikvy1+X+guPIB" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.3/js/bootstrap.min.js" integrity="sha384-ux8v3A6CPtOTqOzMKiuo3d/DomGaaClxFYdCu2HPMBEkf6x2xiDyJ7gkXU0MWwaD" crossorigin="anonymous"></script>

    {!! $html_head ?? null !!}


</head>
<body>
<div class="container">
    {!! $logo ?? null !!}

    {!! $navigation ?? null !!}

    {!! $beforecontent ?? null !!}

    @yield('content')

    {!! $aftercontent ?? null !!}

    {!! $footer ?? null !!}

</div>
</body>
</html>
