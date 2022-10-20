@extends('Web.layouts.master')

@section('page_name')
 @lang('home.contact_us')
@endsection

@section('content')




    <div class="breadCrumb" style="background: url({{ asset('assets/web/img/banner/55M.jpg') }})">
        <div class="container">
            <div class="breadCrumbA">
                <h6>
                    @lang('home.contact_us')
                </h6>
                <ul>
                    <li>
                        <a href="{{ route('home') }}">
                            @lang('home.home')
                        </a>
                    </li>
                    <li>/</li>
                    <li>
                        @lang('home.contact_us')
                    </li>
                </ul>
            </div>
        </div>
    </div>

        <content>



            <!-- start Contact -->
            <section class="contactUs2">
                <div class="headTitle text-center">
                    <h2>@lang('home.contact') <span class="HalfWord">@lang('home.us')</span></h2>

                </div>
                <div class="container">
                    <form action="{{ route('contact-us-store') }}" method="post">
                        @csrf
                        <div class="row " >
                            <div class="col-md-6">
                                <div class="contactUs2Box">
                                    <input type="text" class="input"  name="name" required="required">
                                    <span>@lang('home.yourname')</span>
                                </div>
                                @error('name')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="contactUs2Box">
                                    <input type="email" class="input"  name="email" required="required">
                                    <span> @lang('home.youremail') </span>
                                </div>
                                @error('email')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="contactUs2Box">
                                    <input type="number" class="input" name="phone"  required="required">
                                    <span> @lang('home.yourphone') </span>
                                </div>
                                @error('phone')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-6">
                                <div class="contactUs2Box">
                                    <input type="number" name="whatsapp" class="input" placeholder="optional" >
                                    <span> @lang('home.whatsapp') </span>
                                </div>
                                @error('whatsapp')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="col-md-12">
                                <div class="contactUs2Box">
                                    <textarea name="message" id="textarea" class="textarea"  required="required"></textarea>
                                    <span class="massage"> @lang('home.message') </span>
                                </div>
                                @error('message')
                                <div class="alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="send text-center">
                                <button  type="submit">
                                    @lang('home.send')
                                </button>
                            </div>
                        </div>

                    </form>
                    <!-- iframe -->
                    @foreach($settings as $setting)
                    <iframe src="{{ $setting->address_map }}" width="100%" height="600" style="border:0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    @endforeach
                </div>
            </section>
            <!-- end services -->
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
