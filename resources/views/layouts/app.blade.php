<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
          rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body>
<div id="app">
    <main>
        @yield('page')
    </main>
</div>

<!-- Scripts -->
<script src="https://kit.fontawesome.com/a05cbf66d2.js" crossorigin="anonymous"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script type="application/javascript">

    const app = new Vue({
        el: '#app',
        name: 'Hiya'
    });

</script>

@if(Request::is( Config::get('chatter.routes.home') ) || Request::is( Config::get('chatter.routes.home') . '/*' ))
    {{--Load jQuery only for the forum--}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>
@endif
@yield('js')
</body>
</html>
