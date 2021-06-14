<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css">
    <title>@yield('title-block')</title>
</head>
<body>
@include('inc.header')

@if(Request::is('/'))
    @include('inc.hello')
@endif

<div class="container mt-5">
    @include('inc.messages')

    <div class="row">
        <div class="col-lg-8 col-md-12">
            @yield('content')
        </div>
        <div class="col-lg-4 col-md-4 d-md-block d-sm-none d-none">
            @include('inc.aside')
        </div>
    </div>
</div>

@include('inc.footer')
</body>
</html>
