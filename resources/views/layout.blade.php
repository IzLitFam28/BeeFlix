<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BeeFlix</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
</head>
<body>
<div class="container">
    <div class="row">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand" href="{{ route('home.index') }}">BeeFlix</a>
        </nav>
    </div>
    <div class="row">
        <div class="col">@yield('content')</div>
    </div>
</div>
</body>
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
</html>
