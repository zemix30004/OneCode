<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css"></link>
    <title>@yield('page.title', config('app.name'))</title>
</head>
<body>
    <div class="d-flex flex-column justify-content-between min-vh-100 text-center">

        @include('includes.header')
    <main class="flex-grow-1 py-3">
    @yield('content')
    </main>

    @include('includes.footer')
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/js/bootstrap.min.js"></script>
</body>
</html>
