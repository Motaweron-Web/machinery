<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('aboutUs.store')}}" >
    @csrf
    <div class="form-group">
        <label for="name" class="form-control-label">الصورة</label>
        <input type="file" class="dropify" name="image" data-default-file="{{asset('assets/uploads/avatar.png')}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
        <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">الاسم بالايطالي</label>
        <input type="text" class="form-control" name="title_it" id="title_ar">
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">الاسم  الانجليزية  </label>
        <input type="text" class="form-control" name="title_en" id="title_en">
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">هامش بالايطالي</label>
        <input type="text" class="form-control" name="subtitle_it" id="subtitle_ar">
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label"> هامش الانجليزية</label>
        <input type="text" class="form-control" name="subtitle_en" id="subtitle_en">
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">الوصف بالايطالي</label>
        <textarea type="text" class="form-control editor" name="description_it" id="description_ar"></textarea>
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">الوصف الانجليزية  </label>
        <textarea type="text" class="form-control editor" name="description_en" id="description_en"></textarea>
    </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
            <button type="submit" class="btn btn-primary" id="addButton">اضافة</button>
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
