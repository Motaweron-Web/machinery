<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('job.store')}}" >
    @csrf
    <div class="form-group">
        <label for="name" class="form-control-label">الصورة</label>
        <input type="file" class="dropify" name="image" data-default-file="{{asset('assets/uploads/avatar.png')}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
        <span class="form-text text-danger text-center">مسموح فقط بالصيغ التالية : png, gif, jpeg, jpg,webp</span>
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">الاسم بالعربية</label>
        <input type="text" class="form-control" name="title_ar" id="name_ar">
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">الاسم بالانجليزية</label>
        <input type="text" class="form-control" name="title_en" id="name_en">
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">المتطلبات بالعربية</label>
        <textarea type="text" class="form-control editor" name="description_ar" id="title_ar"></textarea>
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">المتطلبات بالانجليزية</label>
            <textarea type="text" class="form-control editor" name="description_en" id="title_en"></textarea>
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
