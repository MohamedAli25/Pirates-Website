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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&family=Rubik:wght@400;700&display=swap" rel="stylesheet">

    {{-- Internal Libraries --}}
    <link rel="stylesheet" href="/css/Shared/bootstrap.css">
    <link rel="stylesheet" href="/css/Shared/shared.css">
    <link rel="stylesheet" href="/css/Shared/navbar.css">
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
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    {{-- Internal Libraries --}}
    <script src="{{ asset('js/Shared/navbar.js') }}"></script>
    @yield('js')
</body>
</html>