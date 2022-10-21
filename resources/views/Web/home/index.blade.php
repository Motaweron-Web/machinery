@extends('Web.layouts.master')

@section('page_name')
 @lang('home.home')
@endsection

@section('content')



    <!-- start banner -->
    <section class="banner ">
        <!-- headQuote -->
        @foreach($settings as $setting)
        <div class="headQuote ">
            <div class="wow zoomInDown">
                <h3>
                    {{$setting->Title}}
                </h3>
                <p>

                    {{ $setting->SubTitle }}

                </p>
            </div>
            <div class="buttonLogin wow fadeInUp" data-wow-delay="1s">
                @if(auth()->guard('user')->check())
                    @else
                <button>
                    <a href="{{ route('user.dologin') }}" class="login">  @lang('home.join_us') </a>
                </button>
                    @endif
            </div>
        </div>
        @endforeach
        <div id="particles-js"></div>
        <!-- <canvas class="particles-js-canvas-el" width="1158" height="902" style="width: 100%; height: 100%;"></canvas> -->
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">

                    <img src="{{asset('assets/web')}}/img/banner/pexels-pixabay-416405.jpg" alt="banner">
                </div>
                <div class="swiper-slide">

                    <img src="{{asset('assets/web')}}/img/banner/55M.jpg" alt="banner">
                </div>
                <div class="swiper-slide">

                    <img src="{{asset('assets/web')}}/img/banner/56M.png" alt="banner">
                </div>

            </div>

        </div>
        <!-- buttonDown -->

        <!-- <div class="buttonScrollDown">
              <i class="fa-solid fa-chevrons-down"></i>
            </div> -->
    </section>

    <!-- end banner -->
    <!-- =========== -->


    <!-- start project -->
    <!-- ============= -->
    <section class="job wow fadeInUp">
        <div class="headTitle text-center">
            <h2>@lang('home.our') <span class="HalfWord">@lang('home.projects')</span></h2>
        </div>
        <div class="container">
            <div class="row">
                <!--  -->
                @foreach($projects as $project)
                <div class="col-lg-4">
                    <div class="JobBox wow fadeInRight" data-wow-delay=".8s">
                        <div class="imgJob">
                            <img src="{{ asset($project->image) }}" alt="">
                            <span class="time"> <i class="fa-solid fa-clock-three"></i> {{ $project->year }}</span>
                        </div>
                        <div class="detailsJop">
                            <h4>
                                {{ $project->Title }}
                            </h4>
                            <p>
                                <i class="fa-light fa-location-dot"></i> {{ $project->address }}
                            </p>
                            <ul>
                                <li>
                                    <i class="fa-light fa-industry-windows"></i> {{ $project->machine }} machines have been supplied
                                </li>
                                <li>
                                    <i class="fa-regular fa-calendar-days"></i> {{ $project->year }}
                                </li>
                                <li>
                                    <i class="fa-regular fa-money-bill"></i> {{ number_format($project->salary,2) }}
                                </li>

                            </ul>
                        </div>
                        <div class="button">
                            <button>
                                <a href="{{ route('project-details',$project->id) }}">
                                    @lang('home.read_more')<i class="fa-solid fa-angles-right"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--  -->
            </div>
        </div>
    </section>

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
                            <img src="{{ asset($about->image) }}" alt="aboutus">
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
                                {{\Illuminate\Support\Str::limit(strip_tags($about->Description),460)}}
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



    <!-- start product -->
    <section class="project">
        <div class="headTitle text-center">
            <h2>@lang('home.our') <span class="HalfWord">@lang('home.products')</span></h2>
        </div>
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="swiper projectSwiper">
                        <div class="swiper-wrapper">
                            <!--  -->
                            @foreach($products as $product)
                            <div class="swiper-slide">
                                <div class="ProductsA">
                                    <div class="imgProductsA">
                                        <img src="{{ asset($product->image1) }}" alt="product">
                                    </div>
                                    <div class="ProductsATitle">
                                        <h6>
                                            {{ $product->Title }}
                                        </h6>

                                    </div>
                                    <div class="priceRate">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <p class="price">{{ number_format($product->price,2) }}<sup>$</sup> </p>
                                            <span class="price2"><del>{{ number_format($product->discount,2) }}$</del></span>
                                        </div>
                                    </div>
                                    <div class="buttonAdd">
                                        <a href="{{ route('product-details', $product->id) }}">@lang('home.add') <i class="fa-light fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--  -->
                        </div>
                    </div>
                        <div class="swiper-pagination"></div>
                </div>
            </div>
        </div>
        <!-- 2 -->
        <div class="container-fluid projectSwiperrtl">
            <div class="row align-items-center">
                <div class="col-12">
                    <div class="swiper projectSwiper">
                        <div class="swiper-wrapper">
                            <!--  -->
                            @foreach($products as $product)
                            <div class="swiper-slide">
                                <div class="ProductsA">
                                    <div class="imgProductsA">
                                        <img src="{{ asset($product->image1)  }}" alt="product">
                                    </div>
                                    <div class="ProductsATitle">
                                        <h6>
                                           {{ $product->Title }}
                                        </h6>

                                    </div>
                                    <div class="priceRate">
                                        <div class="d-flex align-items-center justify-content-center">
                                            <p class="price">{{ number_format($product->price,2) }}<sup>$</sup> </p>
                                            <span class="price2"><del>{{ number_format($product->discount,2) }}$</del></span>
                                        </div>
                                    </div>
                                    <div class="buttonAdd">
                                        <a href="{{ route('product-details', $product->id) }}">@lang('home.add') <i class="fa-light fa-plus"></i></a>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--  -->
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- end project -->
    <!-- ============ -->



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
