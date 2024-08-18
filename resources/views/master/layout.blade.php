<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PortfolioWeb</title>
</head>

@vite([
    'resources/css/sections/header.css',
    'resources/css/sections/footer.css',
    'resources/css/home.css',
    'resources/js/app.js'
])

<style>
    *{
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }
</style>

<body>
    @include('sections.header')

    @yield('content')

    @include('sections.footer')
</body>
</html>
