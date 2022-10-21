<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('aboutUs.update',$abouts->id)}}" >
    @csrf
        @method('post')
        <input type="hidden" value="{{$abouts->id}}" name="id">
        <div class="form-group">
            <label for="name" class="form-control-label">Image</label>
            <input type="file" class="dropify" name="image" data-default-file="{{asset($abouts->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">Only the following formats are allowed: png, gif, jpeg, jpg,webp</span>
        </div>
{{--        <div class="form-group">--}}
{{--        <label for="name" class="form-control-label">Title IT</label>--}}
{{--        <input type="text" class="form-control" name="title_it" id="title_ar" value="{{ $abouts->title_it }}">--}}
{{--        </div>--}}
        <div class="form-group">
            <label for="name" class="form-control-label">experience year </label>
            <input type="text" class="form-control" name="title_en" id="title_en" value="{{$abouts->title_en}}">
        </div>
        <div class="form-group">
{{--        <label for="name" class="form-control-label">Sub Title IT</label>--}}
{{--        <input type="text" class="form-control" name="subtitle_it" id="subtitle_ar" value="{{ $abouts->subtitle_it }}">--}}
{{--        </div>--}}
{{--        <div class="form-group">--}}
{{--            <label for="name" class="form-control-label">Sub Title EN</label>--}}
{{--            <input type="text" class="form-control" name="subtitle_en" id="subtitle_en" value="{{$abouts->subtitle_en}}">--}}
{{--        </div>--}}
        <div class="form-group">
        <label for="name" class="form-control-label">Description IT</label>
        <textarea type="text" class="form-control" rows="10" name="description_it" id="description_ar">{{$abouts->description_it}}</textarea>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Description EN</label>
            <textarea type="text" class="form-control" rows="10" name="description_en" id="description_en">{{$abouts->description_en}}</textarea>
        </div>


        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
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
