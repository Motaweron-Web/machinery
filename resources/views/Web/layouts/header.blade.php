<nav class="navbar navbar-expand-lg navbar-light ">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{asset('assets/web/img/logo.png')}}" alt="logo">
        </a>
        <!-- nav link -->
        <ul class="navbar-nav  mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="{{ route('home') }}">@lang('home.home')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'about-us') active @endif" href="{{ route('about-us') }}">@lang('home.about_us')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'project-index' || Route::currentRouteName() == 'project-details') active @endif " href="{{ route('project-index') }}">  @lang('home.our_project')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'product-index' || Route::currentRouteName() == 'product-details' ) active @endif " href="{{ route('product-index') }}"> @lang('home.our_product')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link @if(Route::currentRouteName() == 'contact-us') active @endif" href="{{route('contact-us')}}">@lang('home.contact_us')</a>
            </li>
            @if(auth()->guard('user')->check())
             <li class="nav-item">
              <a class="nav-link" href="{{ route('user.logout') }}"> <i class="fa-light fa-door-open fs-4"></i> @lang('home.logout')</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="{{ route('user.do-login') }}"> <i class="fa-light fa-door-closed fs-4"></i> @lang('home.login')</a>
            </li>
            @endif

            <div class="langueButton">
                <button class="@if(app()->getLocale() == 'it')Ar @else active @endif">
                    <a href="{{ url('/it/') }}">IT</a>
                </button>
                <button class="@if(app()->getLocale() == 'en')En @else active @endif" >
                    <a href="{{ url('/en/') }}">EN</a>
                </button>
            </div>
        </ul>
        <!-- nav link responsive -->
        <div class="toggleMenu">
            <span ></span>
            <span ></span>
            <span ></span>
        </div>

    </div>

</nav>
<!-- menu -->
<div class="navMenuResponsive">
    <div class="navMenuLink">
        <a class="nav-link @if(Route::currentRouteName() == 'home') active @endif" aria-current="page" href="{{ route('home') }}">@lang('home.home')</a>

        <a class="nav-link @if(Route::currentRouteName() == 'about-us') active @endif" href="{{ route('about-us') }}">@lang('home.about_us')</a>

        <a class="nav-link @if(Route::currentRouteName() == 'project-index' || Route::currentRouteName() == 'project-details') active @endif " href="{{ route('project-index') }}">  @lang('home.our_project')</a>

        <a class="nav-link @if(Route::currentRouteName() == 'product-index' || Route::currentRouteName() == 'product-details' ) active @endif " href="{{ route('product-index') }}"> @lang('home.our_product')</a>

        <a class="nav-link @if(Route::currentRouteName() == 'contact-us') active @endif" href="{{route('contact-us')}}">@lang('home.contact_us')</a>

        @if(auth()->guard('user')->check())
            <a class="nav-link" href="{{ route('user.logout') }}"> <i class="fa-light fa-door-open fs-4"></i> @lang('home.logout')</a>
        @else
            <a class="nav-link" href="{{ route('user.do-login') }}"> <i class="fa-light fa-door-closed fs-4"></i> @lang('home.login')</a>
        @endif
        <div class="langueButton">
            <button class="@if(app()->getLocale() == 'it')Ar @else active @endif">
                <a href="{{ url('/it/') }}">IT</a>
            </button>
            <button class="@if(app()->getLocale() == 'en')En @else active @endif" >
                <a href="{{ url('/en/') }}">EN</a>
            </button>
        </div>

        <ul class="sideMenuSocials">
            <li>
                <a href="{{ $setting->youtube }}">
                    <i class="fa-brands fa-whatsapp"></i>
                </a>
            </li>
            <li>
                <a href="{{ $setting->insta }}">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </li>
            <li>
                <a href="{{ $setting->linkedin }}">
                    <i class="fa-brands fa-linkedin"></i>
                </a>
            </li>
            <li>
                <a href="{{ $setting->facebook }}">
                    <i class="fa-brands fa-facebook"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<script src="{{ asset('assets/web/js/popper.min.js') }}"></script>
<script src="{{ asset('assets/web/js/jquery.min.js')}}"></script>
<script>
    $(".toggleMenu").click(function () {
        $(this).toggleClass("active");
        if ($(this).hasClass("active")) {
            $(".navbar").addClass("color");
            $(".navbar-brand").addClass("color");
        }else{
            $(".navbar").removeClass("color")
            $(".navbar-brand").removeClass("color")
        }
        $(".navMenuResponsive").toggleClass("active");
    });
</script>





