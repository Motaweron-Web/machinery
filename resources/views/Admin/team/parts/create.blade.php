<div class="modal-body">
    <form id="addForm" class="addForm" method="POST" enctype="multipart/form-data" action="{{route('team.store')}}" >
    @csrf
    <div class="form-group">
        <label for="name" class="form-control-label">Image</label>
        <input type="file" class="dropify" name="image" data-default-file="{{asset('assets/uploads/avatar.png')}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
        <span class="form-text text-danger text-center">Only the following formats are allowed: png, gif, jpeg, jpg,webp</span>
    </div>
    <div class="form-group">
        <label for="name" class="form-control-label">Name IT</label>
        <input type="text" class="form-control" name="name_it" id="name_ar">
    </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Name EN</label>
            <input type="text" class="form-control" name="name_en" id="name_en">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Title IT</label>
            <input type="text" class="form-control" name="title_it" id="title_ar">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Title EN</label>
            <input type="text" class="form-control" name="title_en" id="title_en">
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">facebook</label>
            <input type="url" class="form-control" name="facebook" id="facebook" value="https://www.facebook.com/">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">whatsapp</label>
            <input type="url" class="form-control" name="whatsapp" id="whatsapp" value="https://wa.me/">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">instagram</label>
            <input type="url" class="form-control" name="instagram" id="instagram" value="https://www.instagram.com/">
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="submit" class="btn btn-primary" id="addButton">Add</button>
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
