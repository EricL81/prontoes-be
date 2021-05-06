<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @yield('title')

    <!-- Fonts -->
    <!--     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 -->
    <link rel="icon" type="image/x-icon" sizes="16x16" href="/css/favicon.ico">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel='stylesheet' href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css'>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">

    <script type="module" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule="" src="https://unpkg.com/ionicons@5.4.0/dist/ionicons/ionicons.js"></script>
    <!-- Styles -->


</head>

<body class="antialiased">
    @include('includes._nav')
    @if(session('announcement.create.success'))
    <div class="alert alert-success">{{session('announcement.create.success')}}</div>
    @endif
    @if(session('access.denied.revisor.only'))
    <div class="alert alert-danger">{{session('access.denied.revisor.only')}}</div>
    @endif

    @yield('content')

    <script src="{{mix('js/app.js')}}"></script>
    @include('includes._footer')
</body>

</html>
