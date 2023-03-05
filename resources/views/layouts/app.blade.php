<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Crud</title>
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    @vite(['resources/css/app.css'])
</head>
<body class="bg-white">

    <div class="container my-4">
        @yield('content')
    </div>

    @vite(['resources/js/app.js', 'resources/css/app.css', 'resources/sass/app.scss'])
    @yield('scripts')
</body>
</html>