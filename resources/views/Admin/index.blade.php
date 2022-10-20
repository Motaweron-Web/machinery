@extends('Admin/layouts/master')
@section('title')
      Dashboard
@endsection
@section('page_name')
    Home
@endsection
@section('content')


    <div class="row">
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="bold font-weight-bolder">Project Count</h6>
                            <h3 class="mb-2 number-font">{{ $projects->count() }}</h3>
                            <div class="progress h-2">
                                <div class="progress-bar bg-orange
                                    @if($projects->count() > 5 )
                                 w-10
                                @elseif($projects->count() > 15)
                                    w-25
                                @elseif($projects->count() > 45)
                                    w-50
                                @elseif($projects->count() > 70)
                                    w-75
                                @elseif($projects->count() > 90)
                                    w-100
                                @elseif($projects->count() > 150)
                                    w-260
                                @elseif($projects->count() > 200)
                                    w-337
                                 @endif
                                " role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="bold font-weight-bolder">Product Count</h6>
                            <h3 class="mb-2 number-font">{{ $products->count() }}</h3>
                            <div class="progress h-2">
                                <div class="progress-bar bg-secondary
                                @if($products->count() > 5 )
                                 w-10
                                @elseif($products->count() > 15)
                                    w-25
                                @elseif($products->count() > 45)
                                    w-50
                                @elseif($products->count() > 70)
                                    w-75
                                @elseif($products->count() > 90)
                                    w-100
                                @elseif($products->count() > 150)
                                    w-260
                                @elseif($products->count() > 200)
                                    w-337
                                 @endif
                                " role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4 col-md-4 col-sm-12 col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h6 class="">User Count</h6>
                            <h3 class="mb-2 number-font">{{ $users->count() }}</h3>
                            <div class="progress h-2">
                                <div class="progress-bar bg-secondary1
                                @if($users->count() > 5 )
                                 w-10
                                @elseif($users->count() > 15)
                                    w-25
                                @elseif($users->count() > 45)
                                    w-50
                                @elseif($users->count() > 70)
                                    w-75
                                @elseif($users->count() > 90)
                                    w-100
                                @elseif($users->count() > 150)
                                    w-260
                                @elseif($users->count() > 200)
                                    w-337
                                 @endif"
                                     role="progressbar"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8 col-sm-12 col-xl-8">
            <div class="card">
                <div class="card-header">
                    <a class="btn btn-sm btn-info" href="{{ route('contact.index') }}"><i class="fa fa-reply"></i>Go To Massage</a>
                    <h3 class="card-title">Massage</h3>
                    <span class="btn btn-sm btn-danger">{{$contactus->count()}}</span>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover  mb-0 text-nowrap">
                            <thead>
                            <tr>
                                <th>الاسم</th>
                                <th>الرسالة</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contactus as $contact)
                                <tr>
                                    <td>{{ $contact->name }}</td>
                                    <td>{{ $contact->message }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-lg-4 col-md-12 col-xl-4">
            <div class="card overflow-hidden">
                <div class="card-header">
                    <h3 class="card-title">Orders Count</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="card shadow-none">
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <i class="bx bxl-shopify fs-50 text-primary" style="font-size: 130px"></i>
                                        <h4 class="mt-3 mb-0 number-font fs-20">{{ $orders->count() }}</h4>
                                        <p class="text-muted mb-0">Order</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
@section('js')

@endsection

