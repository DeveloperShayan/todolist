<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css\app.css') }}">
    <script src="{{ asset('js\app.js') }}"></script>
    <title>Todo List</title>
</head>
<body>
    @include('inc.nav')
    @include('inc.messages')
    <div class="m-2 p-2"></div>
    <div class="container">
        @yield('content')
    </div>

</body>

    <footer class="text-center">Copyright 2022</footer>

</html>