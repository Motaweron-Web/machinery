@extends('Web.layouts.master')

@section('page_name')
 @lang('home.our_product')
@endsection

@section('content')




    <div class="breadCrumb" style="background: url({{ asset('assets/web/img/banner/55M.jpg') }})">
        <div class="container">
            <div class="breadCrumbA">
                <h6>
                    @lang('home.our_product')
                </h6>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @lang('home.home')
                        </a>
                    </li>
                    <li>/</li>
                    <li>
                        @lang('home.our_product')
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <content>

        <!-- start project -->
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
                                                <span class="price2"><del>{{ number_format($product->discount) }}$</del></span>
                                            </div>
                                        </div>
                                        <div class="buttonAdd">
                                            <a href="{{ route('product-details', $product->id) }}">Add <i class="fa-light fa-plus"></i></a>
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
                                            <a href="{{ route('product-details', $product->id) }}">Add <i class="fa-light fa-plus"></i></a>
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
            <div class="container mt-5">
                <!-- pagination -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item ">
                          {{ $products->links() }}
                        </li>
                    </ul>
                </nav>
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
