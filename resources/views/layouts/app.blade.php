<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title-block')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/jquery.nice-number.min.css">
    <link rel="stylesheet" href="/css/swiper-bundle.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/media.css">
    <link rel="stylesheet" href="/css/font-awesome.min.css">
</head>

<body>

    @include('includes.header')

    @yield('content')

    @include('includes.footer')

<script src="https://code.jquery.com/jquery-1.12.4.min.js"
    integrity="sha384-nvAa0+6Qg9clwYCGGPpDQLVpLNn0fRaROjHqs13t4Ggj3Ez50XnGQqc/r8MhnRDZ"
    crossorigin="anonymous"></script>
<script src="/js/jquery.nice-number.min.js"></script>
<script src="/js/swiper-bundle.min.js"></script>
<script src="/js/script.js"></script>

</body>
</html>