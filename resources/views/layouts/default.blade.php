<!doctype html>
<html>
<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}"/>
</head>
<body>

@yield('sidebar')

@include('partials.header')

<div class="columns" id="app">
    @yield('content')
</div>

@include('partials.footer')

<script src="{{ URL::asset('js/app.js') }}"></script>

</body>
</html>