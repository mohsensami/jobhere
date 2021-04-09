<!DOCTYPE html>
<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0;">
    <title>Panel</title>
{{--    <link rel="stylesheet" href="/assets/css/fontawesome.min.css">--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/assets/css/style.css">
    <link rel="stylesheet" href="/assets/css/responsive_991.css" media="(max-width:991px)">
    <link rel="stylesheet" href="/assets/css/responsive_768.css" media="(max-width:768px)">
    <link rel="stylesheet" href="/assets/css/font.css">
    @yield('style')
</head>
<body>
<div class="sidebar__nav border-top border-left  ">
    @include('panel.layouts.sidebar')
</div>
<div class="content">
    @yield('content')
</div>
</body>

<script src="/assets/js/jquery-3.4.1.min.js"></script>
<script src="/assets/js/js.js"></script>
@yield('script')
</html>
