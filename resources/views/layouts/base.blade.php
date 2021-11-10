<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>@yield('subtitle', 'subtitel') - @yield('title', config('app.name'))</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body class="h-screen w-screen">
@yield('content_base')
</body>
</html>
