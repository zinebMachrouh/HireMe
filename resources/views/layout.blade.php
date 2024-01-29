<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="shortcut icon" href="{{asset('assets/logo.png')}}" type="image/x-icon">
    @yield('style')
    <title>@yield('title')</title>
</head>
<body>
    @yield('content')
    @yield('script')
</body>
</html>