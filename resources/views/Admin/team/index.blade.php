@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | Team
@endsection
@section('page_name') Team @endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Team {{($setting->title) ?? ''}}</h3>
                    <div class="">
                        <button class="btn btn-secondary btn-icon text-white addBtn">
									<span>
										<i class="fe fe-plus"></i>
									</span>Add New
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <!--begin::Table-->
                        <table class="table table-striped table-bordered text-wrap w-100" id="dataTable">
                            <thead>
                            <tr class="fw-bolder text-muted bg-light">
                                <th class="min-w-25px">#</th>
                                <th class="min-w-50px">Image</th>
                                <th class="min-w-50px">Name IT </th>
                                <th class="min-w-50px">Name EN</th>
                                <th class="min-w-125px">Title IT</th>
                                <th class="min-w-125px">Title EN</th>
                                <th class="min-w-125px">Facebook</th>
                                <th class="min-w-125px">Whatsapp</th>
                                <th class="min-w-125px">Instagram</th>
                                <th class="min-w-50px rounded-end">Action</th>
                            </tr>
                            </thead>
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
                        <h5 class="modal-title" id="example-Modal3">Team data</h5>
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
    <script>
        var columns = [
            {data: 'id', name: 'id'},
            {data: 'image', name: 'image'},
            {data: 'name_it', name: 'name_it'},
            {data: 'name_en', name: 'name_en'},
            {data: 'title_it', name: 'title_it'},
            {data: 'title_en', name: 'title_en'},
            {data: 'facebook', name: 'facebook'},
            {data: 'whatsapp', name: 'whatsapp'},
            {data: 'instagram', name: 'instagram'},

            {data: 'action', name: 'action', orderable: false, searchable: false},
        ]
        showData('{{route('team.index')}}', columns);
        // Delete Using Ajax
        deleteScript('{{route('team.delete')}}');
        // Add Using Ajax
        showAddModal('{{route('team.create')}}');
        addScript();
        // Add Using Ajax
        showEditModal('{{route('team.edit',':id')}}');
        editScript();
    </script>
@endsection


