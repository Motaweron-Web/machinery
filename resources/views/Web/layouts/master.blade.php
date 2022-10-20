<!doctype html>
<html dir="{{ LaravelLocalization::getCurrentLocaleDirection() }}">

<head>
    @include('Web.Layouts.head')
</head>

<body>
    <header>
        @include('Web.Layouts.header')
    </header>
    <div class="scrollTop">
        <i class="fa-sharp fa-solid fa-circle-up"></i>
    </div>

        <!--Content-area open-->
        @yield('content')
        <!--Content-area open-->
<footer>
    @include('Web.Layouts.footer')
</footer>

@include('Web.Layouts.script')

</body>
</html>
