<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{ config('app.name', 'Laravel CRUD') }}</title>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    @yield('content')
                </div>
                <div class="links">
                    <a href="{{url('/')}}">Home</a>
                    <a href="{{url('/about')}}">About</a>
                    <a href="{{url('/services')}}">Services</a>
                </div>
            </div>
        </div>
    </body>
</html>
