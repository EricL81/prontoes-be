<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{mix('css/app.css')}}">


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

    <main>
        @yield('content')
    </main>

    <script src="{{mix('js/app.js')}}"></script>
    @include('includes._footer')
</body>

</html>
