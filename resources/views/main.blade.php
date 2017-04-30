<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Main page')</title>
    @section('css')
        <link rel="stylesheet" href="/css/app.css">
    @show
</head>
<body>
@include('part.menu')
<div class="cobtainer">
    @yield('body')
</div>
<footer>
    copyright 2015-{{ date('Y') }}
    @yield('footer')
</footer>
</body>
</html>