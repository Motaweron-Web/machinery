<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
    <div class="side-header">
        <a class="header-brand1" href="{{route('adminHome')}}">
            <img src="{{($setting->logo) ?? asset('assets/web/img/logo.png')}}" class="header-brand-img light-logo1" alt="logo">
        </a>
        <!-- LOGO -->
    </div>
    <ul class="side-menu">
        <li><h3>Elements</h3></li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('adminHome')}}">
                <i class="icon icon-home side-menu__icon"></i>
                <span class="side-menu__label">Home</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('admins.index')}}">
                <i class="fe fe-users side-menu__icon"></i>
                <span class="side-menu__label">Admins</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" data-toggle="slide" href="#">
                <i class="fe fe-bookmark side-menu__icon"></i>
                <span class="side-menu__label">About</span><i class="angle fa fa-angle-left"></i>
            </a>
            <ul class="slide-menu">

                <li><a href="{{ route('aboutUs.index') }}" class="slide-item">About Us</a></li>
                <li><a href="{{ route('team.index') }}" class="slide-item">Team</a></li>

            </ul>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('product.index') }}">
                <i class="icon icon-menu side-menu__icon"></i>
                <span class="side-menu__label">Products</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('order.index') }}">
                <i class="icon icon-credit-card side-menu__icon"></i>
                <span class="side-menu__label">Orders</span>
            </a>
        </li>

        <li class="slide">
            <a class="side-menu__item" href="{{ route('user.index')}}">
                <i class="icon icon-user-follow side-menu__icon"></i>
                <span class="side-menu__label">Users</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('project.index') }}">
                <i class="icon icon-pie-chart side-menu__icon"></i>
                <span class="side-menu__label">Projects</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{route('contact.index')}}">
                <i class="icon icon-phone side-menu__icon"></i>
                <span class="side-menu__label">Messages</span>
            </a>
        </li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('setting.index') }}">
                <i class="icon icon-settings side-menu__icon"></i>
                <span class="side-menu__label">Setting</span>
            </a>
        </li>

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" data-toggle="slide" href="#">--}}
{{--                <i class="fe fe-settings side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">الاعدادات</span><i class="angle fa fa-angle-left"></i>--}}
{{--            </a>--}}
{{--            <ul class="slide-menu">--}}

{{--                <li><a href="{{ route('setting.about') }}" class="slide-item"> من نحن</a></li>--}}
{{--                <li><a href="{{ route('setting.terms') }}" class="slide-item">الشروط و الاحكام</a></li>--}}
{{--                <li><a href="{{ route('setting.privacy') }}" class="slide-item">الخصوصية</a></li>--}}

{{--            </ul>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('sliders.index')}}">--}}
{{--                <i class="fe fe-camera side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">البانر المتحرك</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المستخدمين</span>--}}
{{--            </a>--}}
{{--        </li>--}}

{{--        <li class="slide">--}}
{{--            <a class="side-menu__item" href="{{route('users.index')}}">--}}
{{--                <i class="fe fe-user-minus side-menu__icon"></i>--}}
{{--                <span class="side-menu__label">المواقع</span>--}}
{{--            </a>--}}
{{--        </li>--}}



        <li class="slide">
            <a class="side-menu__item" href="{{route('admin.logout')}}">
                <i class="icon icon-lock side-menu__icon"></i>
                <span class="side-menu__label">Logout</span>
            </a>
        </li>

    </ul>
</aside>
