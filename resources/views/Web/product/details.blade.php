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
                            @if(auth()->guard('user')->check())
                            <form action="{{ route('orders_store') }}" method="post">
                                @csrf
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
                                    <a href="#!" class="active" data-show="Description"> Description </a>
                                </li>
                                <li>
                                    <a href="#!" data-show="Return"> Shipping & Return </a>
                                </li>

                            </ul>
                        </div>
                        <div class="headFilterP">
                            <div id="Description" class="active">
                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.
                                </p>
                                <p>
                                    Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.
                                </p>
                            </div>
                            <div id="Return">
                                <div class="ReturnsPolicy">
                                    <h6>
                                        ReturnsPolicy
                                    </h6>
                                    <p>
                                        You may return most new, unopened items within 30 days of delivery for a full refund. We'll also pay the return shipping costs if the return is a result of our error (you received an incorrect or defective item, etc.).
                                    </p>
                                    <p>
                                        You should expect to receive your refund within four weeks of giving your package to the return shipper, however, in many cases you will receive a refund more quickly. This time period includes the transit time for us to receive your return from the shipper (5 to 10 business days), the time it takes us to process your return once we receive it (3 to 5 business days), and the time it takes your bank to process our refund request (5 to 10 business days).
                                    </p>
                                    <p>
                                        If you need to return an item, simply login to your account, view the order using the 'Complete Orders' link under the My Account menu and click the Return Item(s) button. We'll notify you via e-mail of your refund once we've received and processed the returned item.
                                    </p>
                                </div>
                                <div class="shoppinng">
                                    <h6>
                                        Shipping
                                    </h6>
                                    <p>
                                        We can ship to virtually any address in the world. Note that there are restrictions on some products, and some products cannot be shipped to international destinations.
                                    </p>
                                    <p>
                                        When you place an order, we will estimate shipping and delivery dates for you based on the availability of your items and the shipping options you choose. Depending on the shipping provider you choose, shipping date estimates may appear on the shipping quotes page.
                                    </p>
                                    <p>
                                        Please also note that the shipping rates for many items we sell are weight-based. The weight of any such item can be found on its detail page. To reflect the policies of the shipping companies we use, all weights will be rounded up to the next full pound.
                                    </p>
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
