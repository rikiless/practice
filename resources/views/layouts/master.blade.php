<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Practice</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>

<div id="app">

    @yield('content')

</div>

<script src="{{ asset('js/app.js') }}"></script>

</body>
</html>
