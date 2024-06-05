
<head>
    <title>@yield('title')</title>
</head>
<body>
    <nav>
    <table class="table">
        @include('partials.nav')
        <hr>
        @yield('content')
    </table>
    </nav>
</body>
