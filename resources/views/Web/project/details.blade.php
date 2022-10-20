@extends('Web.layouts.master')

@section('page_name')
 @lang('home.our_project')
@endsection

@section('content')




    <div class="breadCrumb" style="background: url({{ asset('assets/web/img/banner/55M.jpg') }})">
        <div class="container">
            <div class="breadCrumbA">
                <h6>
                    @lang('home.our_project')
                </h6>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @lang('home.home')
                        </a>
                    </li>
                    <li>/</li>
                    <li>
                        @lang('home.our_project')
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <content>
        <!-- projectDetails -->
        <section class="projectDetails">

            <div class="container">
                <!-- img-project -->
                <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                     class="swiper mySwiper2 projectDetailsswiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide" data-src="img/banner/pexels-anamul-rezwan-1078884.jpg" data-fancybox="gallery">
                            <img src="{{ asset($project->image) }}" />
                        </div>
                    </div>
                </div>
                <!--  -->
            </div>
        </section>







        <!-- ============= -->
        <!-- ============= -->
        <!-- ============= -->
        <!-- ============= -->
        <!-- projectDetails2 -->
        <!-- ============= -->
        <section class="projectDetails2">
            <div class="container">
                <div class="row">

                    <!-- text -->
                    <div class="col-md-12 pe-5">
                        <div class="projectDetails2All2">
                            <h6>
                                {{ $project->Title }}
                            </h6>
                            <div class="projectDetails2Box2">
                                <p>
                                     {{ strip_tags($project->Description) }}
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- ============= -->
        <!-- ============= -->
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
