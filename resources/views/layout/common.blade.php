<!DOCTYPE HTML>
<html lang="zh">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    <meta name="description" itemprop="description" content="@yield('description')">
    <meta name="keywords" itemprop="keywords" content="@yield('keywords')">
    <link rel="stylesheet" href="{{asset('/assets/css/layout.css')}}">
    @yield('pageCss')
</head>
<body>
@yield('header')

<div class="contents">
    <!-- contents -->
    <div class="main">
        <h1>hoge Blog</h1>
        <h2>@yield('h2')</h2>
        @yield('content')
    </div>

    <!-- common menu -->
    <div class="sub">
        @yield('submenu')
    </div>
</div>

@yield('footer')
</body>
</html>
