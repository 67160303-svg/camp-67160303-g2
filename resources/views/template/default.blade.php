<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>HTML - @yield('title')</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <style>
    @import url('https://fonts.googleapis.com/css2?family=Itim&family=Mali:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;1,200;1,300;1,400;1,500;1,600;1,700&display=swap');
    body {
    font-family: "Itim", cursive;

    }

    </style>
    @stack('styles')
</head>

<body>
    <div class="container">
        <h1>@yield('header1')</h1>
        @yield('content')
    </div>
    @stack('scripts')
</body>

</html>
