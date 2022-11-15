<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="./images/favicon-32x32.ico" type="image/x-icon">
    <link rel="stylesheet" href="{{asset('/css/index.css')}}">
    <link rel="stylesheet" href="{{asset('/css/authentication.css')}}">
    <title>@yield('title')</title>
    @yield('head')
</head>
<body>
    {{-- Content --}}
    @yield('content')

    {{-- JavaScript --}}
    @yield('js')
</body>
</html>