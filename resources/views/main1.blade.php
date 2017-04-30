<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<img src="http://www.lenagold.ru/fon/clipart/n/nogo/novgod64.jpg" alt="">
<nav>
    <ul>
        <li>line 1</li>
        <li>line 2</li>
        <li>line 3</li>
    </ul>
</nav>
<div class="cobtainer">
    @yield('body')
</div>
<footer>
    copyright 2015-{{ date('Y') }}
</footer>
</body>
</html>