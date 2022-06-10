<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    @include('layouts.fe.parts.part-meta')
    <!-- CSS -->
    @include('layouts.fe.parts.part-css')
    @yield('curpage')
</head>
<body>
    @include('layouts.fe.parts.part-header')
        @yield('content')
    @include('layouts.fe.parts.part-footer')
    @include('layouts.fe.parts.part-js')
    @stack('scripts')
</body>
</html>