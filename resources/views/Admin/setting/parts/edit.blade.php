<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('team.update',$teams->id)}}" >
    @csrf
        @method('post')
        <input type="hidden" value="{{$teams->id}}" name="id">
        <div class="form-group">
            <label for="name" class="form-control-label">الصورة</label>
            <input type="file" class="dropify" name="image" data-default-file="{{asset($teams->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">الاسم بالعربية</label>
            <input type="text" class="form-control" name="name_ar" id="name_ar" value="{{ $teams->name_ar }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الاسم بالانجليزية</label>
            <input type="text" class="form-control" name="name_en" id="name_en" value="{{ $teams->name_en }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الوصف بالعربية</label>
            <input type="text" class="form-control" name="title_ar" id="title_ar" value="{{ $teams->title_ar }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">الوصف بالانجليزية</label>
            <input type="text" class="form-control" name="title_en" id="title_en" value="{{ $teams->title_en }}">
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">facebook</label>
            <input type="url" class="form-control" name="facebook" id="facebook" value="{{ $teams->facebook }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">whatsapp</label>
            <input type="url" class="form-control" name="whatsapp" id="whatsapp" value="{{ $teams->whatsapp }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">instagram</label>
            <input type="url" class="form-control" name="instagram" id="instagram" value="{{ $teams->instagram }}">
        </div>








{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">الاسم بالعربية</label>--}}
{{--            <input type="text" class="form-control" name="n" id="title_ar" value="{{$teams->title_ar}}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">الاسم بالانجليزية</label>--}}
{{--            <input type="text" class="form-control" name="title_en" id="title_en" value="{{$teams->title_en}}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">هامش بالعربية</label>--}}
{{--            <input type="text" class="form-control" name="subtitle_ar" id="subtitle_ar" value="{{$teams->subtitle_ar}}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">هامش بالانجليزية</label>--}}
{{--            <input type="text" class="form-control" name="subtitle_en" id="subtitle_en" value="{{$teams->subtitle_en}}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">الوصف بالعربية</label>--}}
{{--            <textarea type="text" class="form-control editor" name="description_ar" id="description_ar">{{$teams->description_ar}}</textarea>--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">الوصف بالانجليزية</label>--}}
{{--            <textarea type="text" class="form-control editor" name="description_en" id="description_en">{{$teams->description_en}}</textarea>--}}
{{--        </div>--}}


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-success" id="updateButton">تحديث</button>
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
