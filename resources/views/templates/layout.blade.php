<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Scopri i viaggi')</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
</head>
<body>
    <!-- start header -->
    @include('partials.header')
    <!-- end header -->

    <!-- start content main -->
    <main>@yield('content')</main>
    <!-- end content main -->

    <!-- start footer -->
    @include('partials.footer')
    <!-- end footer -->
</body>
</html>