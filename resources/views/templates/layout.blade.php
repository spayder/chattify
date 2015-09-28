<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chattify - @yield('title', 'home page')</title>

    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
</head>
<body>
    @include('partials.navigation')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>