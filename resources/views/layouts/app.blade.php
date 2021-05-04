<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posty</title>
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">
</head>

<body>
    @include('inc.navbar')
    <div class="container mt-3">
        @yield('content')
    </div>

    <script src="https://kit.fontawesome.com/5af6abf745.js" crossorigin="anonymous"></script>
    <script src="{{ asset('/js/app.js') }}"></script>
</body>

</html>