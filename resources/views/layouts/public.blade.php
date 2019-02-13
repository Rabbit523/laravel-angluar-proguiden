<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ProGuiden | @yield('title') </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css', env('REDIRECT_HTTPS')) }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-theme.min.css', env('REDIRECT_HTTPS')) }}">
    <link rel="stylesheet" href="{{ asset('css/proguiden.no.css', env('REDIRECT_HTTPS')) }}"> 
    @yield('styles')
    <script src="{{ asset('js/vendor/modernizr-2.8.3-respond-1.4.2.min.js', env('REDIRECT_HTTPS')) }}"></script>
</head>

<body class="proguiden">
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->

    @include('elements.header')
    @yield('content') 
    @include('elements.footer')

    <script src="{{ asset('js/vendor/jquery-1.11.2.min.js', env('REDIRECT_HTTPS')) }}"></script>
    <script>
        window.jQuery || document.write(`<script src="{{ asset('js/vendor/jquery-1.11.2.min.js', env('REDIRECT_HTTPS')) }}"><\/script>`)
    </script>
    <script src="{{ asset('js/vendor/bootstrap.min.js', env('REDIRECT_HTTPS')) }}"></script>
    <script src="https://use.fontawesome.com/4618193c9c.js"></script> 
    @yield('scripts')
</body>

</html>