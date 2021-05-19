<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <script src="/js/app.js"></script>
    @yield('title')
    
</head>
<body>
@include('common.navbar')

@yield('content')

@include('common.footer')  

</body>
</html>