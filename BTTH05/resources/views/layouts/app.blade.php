<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title','default title')</title>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/css/all.min.css">
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/css/solid.css">
    <link rel="stylesheet" href="/fontawesome-free-6.4.2-web/css/brands.css">
</head>
<body>
    <header>
        <!-- Header content -->
    </header>
    <main>
        @yield('content');
    </main>
    <footer>
        <!-- Footer content -->
    </footer>
<script src="{{asset('js/bootstrap.bundle.js')}}"></script>
</body>
</html>