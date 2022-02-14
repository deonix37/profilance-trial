<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>@yield('title', config('app.name', 'Laravel'))</title>
        @section('css')
            <link href="{{ mix('css/app.css') }}" rel="stylesheet">
        @show
        @section('js')
            <script src="{{ mix('js/app.js') }}" defer></script>
        @show
    </head>
    <body>
        <div class="wrapper">
            @yield('content')
        </div>
    </body>
</html>
