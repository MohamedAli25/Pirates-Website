<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Pirates Egypt IT Committee">
    <meta name="description" content="Student Activity">
    <meta name="keywords" content="Pirates Egypt,Student Activity">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="type" content="Organization">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    {{-- External Libraries --}}
    <script src="https://kit.fontawesome.com/1493d0f1e3.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;700&family=Rubik:wght@300;400;700&display=swap" rel="stylesheet">

    {{-- Internal Libraries --}}
    <link rel="stylesheet" href="/css/bootstrap/bootstrap.css">
    <link rel="stylesheet" href="/css/components/navbar.css">
    @yield('css')

    {{-- Icon --}}
    <link rel="icon" href="/images/pirates logo.png">
</head>
<body>
    {{-- Navbar --}}
    <x-navbar/>
    {{-- Content --}}
    <div id="content">
        @yield('content')
    </div>
    {{-- Footer --}}
    {{-- <x-footer/> --}}
    {{-- External Libraries --}}
    <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    {{-- Internal Libraries --}}
    <script src="/js/Shared/navbar.js"></script>
    @yield('js')
</body>
</html>