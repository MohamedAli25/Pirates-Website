<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Student Activity">
    <meta name="keywords" content="Pirates Egypt,Student Activity">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="author" content="Pirates Egypt IT Committee">
    <meta name="type" content="Organization">
    <title>@yield('title')</title>

    {{-- External Libraries --}}
    <script src="https://use.fontawesome.com/4e185a11e7.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700&display=swap" rel="stylesheet">

    {{-- Internal Libraries --}}
    <link rel="stylesheet" href="/css/Shared/bootstrap.css">
    <link rel="stylesheet" href="/css/Shared/shared.css">
    @yield('css')

    {{-- Icon --}}
    <link rel="icon" href="/images/pirates logo.png">
</head>
<body>
    {{-- Navbar --}}

    {{-- Content --}}
    <div class="margin-top-for-navbar">
        @yield('content')
    </div>
    {{-- Footer --}}
    
    {{-- External Libraries --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js" integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous"></script>
    @yield('js')
</body>
</html>