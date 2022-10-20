@extends('Web.layouts.master')

@section('page_name')
 @lang('home.about_us')
@endsection

@section('content')




    <div class="breadCrumb" style="background: url({{ asset('assets/web/img/banner/55M.jpg') }})">
        <div class="container">
            <div class="breadCrumbA">
                <h6>
                    @lang('home.about_us')
                </h6>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @lang('home.home')
                        </a>
                    </li>
                    <li>/</li>
                    <li>
                        @lang('home.about_us')
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <content>
        <!-- start About Us -->
        <section class="About">
            <div class="headTitle text-center">
                <h2>@lang('home.about') <span class="HalfWord">@lang('home.us')</span></h2>
            </div>
            <div class="container">
                <div class="row ">
                    @foreach($abouts as $about)
                    <!-- img AboutUs -->
                    <div class="col-md-6 col-sm-12 ">
                        <div class="imgAboutUs wow fadeInUp" data-wow-delay="1s">
                            <div class="ImgAbout">
                                <img src="{{ asset('assets/web/img/banner/55M.jpg')}}" alt="">
                            </div>
                        </div>
                    </div>
                    <!-- details AboutUs -->
                    <div class="col-md-6 col-sm-12">
                        <div class="detailsAboutUs wow fadeInDown" data-wow-delay="1s">

                            <div class="detailsAboutUsUp">
                                <div class="bgWave"></div>
                                <h2>{{ $about->title_en }}</h2>
                                <p> @lang('home.years_of_experience') </p>
                            </div>
                            <div class="detailsAboutUsDown">
                                <p>
                                    {{ \Illuminate\Support\Str::limit(strip_tags($about->Description),460) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
        <!-- end About Us -->
        <!-- ============ -->


        <!-- start team  -->
        <section class="team">
            <div class="headTitle text-center">
                <h2>@lang('home.our') <span class="HalfWord"> @lang('home.team')</span></h2>
            </div>
            <div class="container">
                <div class="swiper swiperTeam">
                    <div class="swiper-wrapper">
                        @foreach($teams as $team)
                        <div class="swiper-slide">
                            <div class="TeamBox">
                                <div class="imgTeam">
                                    <img src="{{ asset($team->image) }}" alt="">
                                </div>
                                <div class="detailsTeam">
                                    <h6>{{ $team->Name }}</h6>
                                    <p>{{ $team->Title }}</p>
                                </div>
                                <div class="linkTeam">
                                    <ul>
                                        <li>
                                            <a href="{{$team->facebook}}">
                                                <i class="fa-brands fa-facebook-f facebookColor"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$team->whatsapp}}">
                                                <i class="fa-brands fa-whatsapp whatsappColor"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{$team->instagram}}">
                                                <i class="fa-brands fa-instagram instagramColor"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>







        <!-- end team  -->
        <!-- ============= -->


    <!-- start contactUs -->
    <section class="contaUs">
        <div class="container">
            <div class="row">
                @foreach($settings as $setting)
                <div class="col-lg-4">
                    <div class="contatUsdetails">
                        <div class="contatUsIcon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <p>
                           @lang('home.address')
                            <span>
                {{ $setting->address }}
              </span>
                        </p>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-4">
                    <div class="contatUsdetails">
                        <div class="contatUsIcon">
                            <i class="fa-solid fa-phone"></i>
                        </div>
                        <p>
                            {{ $setting->phone }}
                        </p>
                        <p class="number">

                            {{ $setting->phone2 }}
                        </p>
                    </div>
                </div>
                <!--  -->
                <div class="col-lg-4">
                    <div class="contatUsdetails">
                        <div class="contatUsIcon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <p>
                           @lang('home.email')
                        </p>
                        <p class="number">
                            {{ $setting->email }}
                        </p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>


@endsection
