@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | Products
@endsection
@section('page_name') Products @endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Products {{($setting->title) ?? ''}}</h3>
                    <div class="">
                        <form action="{{ route('order.index') }}" method="get">
                        <button class="btn btn-secondary btn-icon text-white addBtn" type="submit">
									<span>
										<i class="fe fe-repeat"></i>
									</span>Return TO Order
                        </button>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-wrap w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-50px">Main image</th>
                                <th class="min-w-50px">title en</th>
                                <th class="min-w-50px">title it</th>
                                <th class="min-w-50px">price</th>
                                <th class="min-w-50px">discount</th>
                                <th class="min-w-50px">desc en</th>
                                <th class="min-w-50px">desc it</th>
                                <th class="min-w-50px">product type</th>
                            </tr>
                            </thead>
                            <tbody>
                                <th class="min-w-25px">{{ $product->id }}</th>
                                <th class="min-w-50px">{{ $product->image1 }}</th>
                                <th class="min-w-50px">{{ $product->title_en }}</th>
                                <th class="min-w-50px">{{ $product->title_it }}</th>
                                <th class="min-w-50px">{{ $product->price }}</th>
                                <th class="min-w-50px">{{ $product->discount }}</th>
                                <th class="min-w-50px">{{ strip_tags($product->desc_en) }}</th>
                                <th class="min-w-50px">{{ strip_tags($product->desc_it) }}</th>
                                <th class="min-w-50px">{{ $product->product_type }}</th>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!--Delete MODAL -->
        <div class="modal fade" id="delete_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
             aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">delete data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <input id="delete_id" name="id" type="hidden">
                        <p>Are you sure to delete the following data <span id="title" class="text-danger"></span>?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal" id="dismiss_delete_modal">
                            Close
                        </button>
                        <button type="button" class="btn btn-danger" id="delete_btn">delete !</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- MODAL CLOSED -->

        <!-- Create Or Edit Modal -->
        <div class="modal fade" id="editOrCreate" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="example-Modal3">Product data</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body" id="modal-body">

                    </div>
                </div>
            </div>
        </div>
        <!-- Create Or Edit Modal -->
    </div>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')

@endsection


