<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Note</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome/all.css')}}">
    <script defer src="{{asset('js/fontawesome/all.js')}}"></script>
    <script src="{{asset('js/jquery/jquery.js')}}"></script>
    <script src="{{asset('js/bootstrap/bootstrap.min.js')}}"></script>
</head>
<body>
    <nav class="navbar fixed-top navbar-dark bg-primary">
        <a class="navbar-brand" href="#!">CRUD Note</a>
    </nav>
    <br><br><br>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>