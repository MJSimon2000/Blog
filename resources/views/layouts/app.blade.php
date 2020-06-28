<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog | @yield('page_title')</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
    @include('layouts.navbar')
    @yield('content')
</body>
<script src="/js/app.js"></script>
</html>