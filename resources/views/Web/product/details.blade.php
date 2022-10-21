@extends('Web.layouts.master')

@section('page_name')
 @lang('home.cart')
@endsection

@section('content')




    <div class="breadCrumb" style="background: url({{ asset('assets/web/img/banner/55M.jpg') }})">
        <div class="container">
            <div class="breadCrumbA">
                <h6>
                    @lang('home.cart')
                </h6>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @lang('home.home')
                        </a>
                    </li>
                    <li>/</li>
                    <li>
                        @lang('home.cart')
                    </li>
                </ul>
            </div>
        </div>
    </div>


    <content>
        <section class="cartDetails">
            <div class="container">
                <div class="row">
                    <!-- imgCart -->
                    <div class="col-md-6">
                        <!-- img-project -->
                        <div style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
                             class="swiper mySwiper2 cartDetailsswiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="swiper-slideImg">
                                        <img src="{{ asset($product->image1) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slideImg">
                                        <img src="{{ asset($product->image2) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slideImg">
                                        <img src="{{ asset($product->image3) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slideImg">
                                        <img src="{{ asset($product->image4) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slideImg">
                                        <img src="{{ asset($product->image5) }}" />
                                    </div>
                                </div>

                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        <!--  -->
                        <div thumbsSlider="" class="swiper mySwiper thumbsSliderA">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="thumbsSliderImg">
                                        <img src="{{ asset($product->image1) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbsSliderImg">
                                        <img src="{{ asset($product->image2) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbsSliderImg">
                                        <img src="{{ asset($product->image3) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbsSliderImg">
                                        <img src="{{ asset($product->image4) }}" />
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="thumbsSliderImg">
                                        <img src="{{ asset($product->image5) }}" />
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- detailsCart -->
                    <div class="col-md-6">
                        <div class="cartDetailsBox">
                            <div class="cartDetailsBoxTitle">
                                <!-- name -->
                                <h1>
                                    {{ $product->Title }}
                                </h1>
                            </div>
                            <!-- price -->
                            <div class="d-flex align-items-center ">
                                <p class="price">{{ number_format($product->price,2) }}<sup>$</sup> </p>
                                <span class="price2"><del>{{ number_format($product->discount,2) }}$</del></span>
                            </div>
                            <!-- Description -->
                            <div class="Description">
                                <p>
                                   {{ \Illuminate\Support\Str::limit(strip_tags($product->Desc),230) }}
                                </p>
                            </div>
                            <!-- rate -->
                            @if(auth()->guard('user')->check())
                                <form action="{{ route('orders_store') }}" method="post">
                                    @csrf
                            <div class="cartDetailsBoxrate" id="ratingForm" >
                                @for($i = 1; $i < 6; $i++)
                                <i class="fa-regular fa-star"><input hidden type="hidden" name="rate" value="{{$i}}"></i>
                                @endfor
                            </div>
                                    <br>
                            <script>
                                $(".fa-star").mouseover(function(){
                                    $(this).removeClass('fa-regular').addClass('fa-solid');
                                });
                            </script>

                                <input hidden name="user_id" value="{{ user()->id()}}">
                                <input hidden name="product_id" value="{{ $product->id }}">
                            <!-- button + counter -->
                            <div class="ButtonCounter">
                                <!-- button -->
                                <button type="submit" class="AddCart">@lang('home.add_request')</button>
                            </div>
                            </form>
                            @else
                                <form action="{{ route('user.dologin') }}" method="get">
                                    <div class="ButtonCounter">
                                        <!-- button -->
                                        <button type="submit" class="AddCart">@lang('home.add_request')</button>
                                    </div>
                                </form>
                            @endif
                            <!-- info Cart -->
                            <div class="infoCart">
                                <!-- product type -->
                                <div>
                                    <p class="TittleP">
                                       @lang('home.product_type')
                                    </p>
                                    <p class="NameP">
                                        {{ $product->product_type }}
                                    </p>
                                </div>
                                <!-- Vendor -->
                                <div>
                                    <p class="TittleP">
                                      @lang('home.Vendor')
                                    </p>
                                    <p class="NameP">
                                        {{ $product->vendor }}
                                    </p>
                                </div>
                                <!-- tag  -->
                                <div>
                                    <p class="TittleP">
                                       @lang('home.tag')
                                    </p>
                                    <p class="NameP">
                                        {{ $product->tag }}
                                    </p>
                                </div>
                                <h1>@lang('home.rating')({{ $orders->count('rate') }})</h1><hr>
                                <div class="cartDetailsBoxrate" id="ratingForm" >
                                    @for($i = 1; $i < 6; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div> <br>
                                <div class="cartDetailsBoxrate" id="ratingForm" >
                                    @for($i = 1; $i < 4; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div> <br>
                                <div class="cartDetailsBoxrate" id="ratingForm" >
                                    @for($i = 1; $i < 3; $i++)
                                        <i class="fa-solid fa-star"></i>
                                    @endfor
                                </div> <br>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end cartDetails -->
        <!-- =========== -->
        <!-- *************************************** -->
        <!--start filter Cart -->
        <!-- ============ -->
        <section class="filterCart">
            <div class="container">
                <div class="row">
                    <!-- Head filter -->
                    <div class="col-12">
                        <div class="headFilter">
                            <ul>
                                <li>
                                    <a href="#!" class="active" data-show="Description"> @lang('home.description')</a>
                                </li>
                                <li>
                                    <a href="#!" data-show="Return"> @lang('home.return') </a>
                                </li>

                            </ul>
                        </div>
                        <div class="headFilterP">
                            <div id="Description" class="active">
                                <h2>
                                   @lang('home.description')
                                </h2>
                                <p>
                                    {{ strip_tags($product->Desc) }}
                                </p>
                            </div>
                            <div id="Return">
                                <div class="ReturnsPolicy">
                                    <h6>
                                        @lang('home.return')
                                    </h6>
                                    @foreach($settings as $setting)
                                    <p>
                                        {{ $setting->ReturnPolice }}
                                    </p>
                                    @endforeach
                                </div>
                            </div>

                        </div>
                    </div>
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


        <script src="https://code.jquery.com/jquery-3.6.0.min.js"
                integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
                integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
                integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
        </script>


        {{-- toastr js --}}
        <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>


        <script>
            $(document).ready(function() {
                toastr.options.timeOut = 10000;
                @if (Session::has('error'))
                toastr.error('{{ Session::get('error') }}');
                @elseif(Session::has('success'))
                toastr.success('{{ Session::get('success') }}');
                @endif
            });

        </script>

@endsection
