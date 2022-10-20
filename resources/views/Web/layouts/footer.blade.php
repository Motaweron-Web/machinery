<div class="container ">
    <div class="row  text-center">
        <div class="col-lg-4 col-md-4">
            <div class="imgFooter">
                <img src="{{asset('assets/web/img/logo.png')}}" alt="logo">
            </div>
            @foreach($settings as $setting)
            <div class="detailsFooter">
                {{ $setting->Content }}
            </div>
        </div>
        <div class="col-lg-4 col-md-4">

            <ul class="LinkeFooter">
                <h5> @lang('home.useful_link') </h5>
                <li>
                    <a href="{{ route('user.do-login') }}">
                       @lang('home.join_us')
                    </a>
                </li>
                <li>
                    <a href="{{ route('contact-us') }}">
                        @lang('home.contact_us')
                    </a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}">
                        @lang('home.about_us')
                    </a>
                </li>
                <li>
                    <a href="{{ route('project-index') }}">
                        @lang('home.our_project')
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-lg-4 col-md-4">

            <ul class="socialFooter">
                <h5> @lang('home.follow_us') </h5>
                <li>
                    <a href="{{ $setting->facebook }}">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ $setting->insta }}">
                        <i class="fa-brands fa-instagram"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ $setting->youtube }}">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </li>
                <li>
                    <a href="{{ $setting->linkedin }}">
                        <i class="fa-brands fa-linkedin-in"></i>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    @endforeach
</div>
<div class="Copyright text-center">
    <p>
        @lang('home.footer')
    </p>
</div>
<!-- <a target="_blank" href="motaweron.com"> المطورون </a> -->
