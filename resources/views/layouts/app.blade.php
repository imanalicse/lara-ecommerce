<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'NSW') }}</title>

    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div id="app">
        <header>
            <div class="logo">
                <a href="https://www.records.nsw.gov.au">
                    <img src="{{asset('images/nsw-logo.png')}}" alt="">
                </a>
            </div>
            <div class="title-bar">
                <h1>Catalogue</h1>
            </div>
        </header>
        <div class="container">
            @yield('content')
        </div>

        <div class="common-footer">
            <p class="develop-buy"> Web Development by <a href="https://www.iman.com" target="_blank">Iman Ali</a></p>
        </div>
    </div>
    <script src="{{asset('js/app.js?')}}"></script>

</body>
</html>
