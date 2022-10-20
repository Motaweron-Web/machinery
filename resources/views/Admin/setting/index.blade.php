@extends('Admin/layouts/master')

@section('title')
    {{($setting->title) ?? ''}} | Setting
@endsection
@section('page_name') Setting @endsection
@section('content')

    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title"> Setting</h3>
                </div>
                <div class="card-body">
                    @foreach($settings as $setting)
                    <div class="modal-body">
                        <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('setting.update',$setting->id)}}" >
                            @csrf
                            @method('post')
                            <input type="hidden" value="{{$setting->id}}" name="id">
                            <div class="form-group">
                                <label for="name" class="form-control-label">Title EN</label>
                                <input type="text" class="form-control" name="title_en" id="title_ar" value="{{ $setting->title_en }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Title IT </label>
                                <input type="text" class="form-control" name="title_it" id="title_en" value="{{ $setting->title_it }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">subtitle IT</label>
                                <input type="text" class="form-control" name="subtitle_it" id="title_ar" value="{{ $setting->subtitle_it }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">subtitle EN</label>
                                <input type="text" class="form-control" name="subtitle_en" id="title_en" value="{{ $setting->subtitle_en }}">
                            </div>

                            <div class="form-group">
                                <label for="name" class="form-control-label">phone</label>
                                <input type="text" class="form-control" name="phone" id="phone" value="{{ $setting->phone }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">phone 2</label>
                                <input type="text" class="form-control" name="phone2" id="phone" value="{{ $setting->phone2 }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Email</label>
                                <input type="email" class="form-control" name="email" id="email" value="{{ $setting->email }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Address</label>
                                <textarea type="text" class="form-control" name="address" id="address">{{ $setting->address }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Address Map </label>
                                <textarea type="text" class="form-control" name="address_map" id="address">{{ $setting->address_map }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Facebook</label>
                                <input type="url" class="form-control" name="facebook" id="address" value="{{ $setting->facebook }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Instagram</label>
                                <input type="url" class="form-control" name="insta" id="address" value="{{ $setting->insta }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">whatsapp</label>
                                <input type="url" class="form-control" name="youtube" id="facebook" value="{{ $setting->youtube }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Linkedin</label>
                                <input type="url" class="form-control" name="linkedin" id="linkedin" value="{{ $setting->linkedin }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Footer Content IT</label>
                                <input type="text" class="form-control" name="footer_content_it" id="instagram" value="{{ $setting->footer_content_it }}">
                            </div>
                            <div class="form-group">
                                <label for="name" class="form-control-label">Footer Content EN</label>
                                <input type="text" class="form-control" name="footer_content_en" id="instagram" value="{{ $setting->footer_content_en }}">
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="btn btn-success" id="updateButton">Update</button>
                            </div>
                        </form>
                    </div>
                    <script>
                        $('.dropify').dropify()
                    </script>
                    <script>
                        var allEditors = document.querySelectorAll('.editor');
                        for (var i = 0; i < allEditors.length; ++i) {
                            ClassicEditor.create(allEditors[i]);
                        }
                    </script>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    @include('Admin/layouts/myAjaxHelper')
@endsection
@section('ajaxCalls')

@endsection


