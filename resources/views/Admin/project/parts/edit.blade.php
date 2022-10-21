<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('project.update',$projects->id)}}" >
    @csrf
        @method('post')
        <input type="hidden" value="{{$projects->id}}" name="id">
        <div class="form-group">
            <label for="name" class="form-control-label">Image</label>
            <input type="file" class="dropify" name="image" data-default-file="{{asset($projects->image)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg"/>
            <span class="form-text text-danger text-center">Only the following formats are allowed: png, gif, jpeg, jpg,webp</span>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Title It</label>
            <input type="text" class="form-control" name="title_it" id="name_ar" value="{{ $projects->title_it }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Title EN</label>
            <input type="text" class="form-control" name="title_en" id="name_en" value="{{ $projects->title_en }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Description IT</label>
            <textarea type="text" class="form-control " rows="10" name="description_it" id="title_ar">{{ $projects->description_it }}</textarea>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Description EN</label>
            <textarea type="text" class="form-control " rows="10" name="description_en" id="title_en">{{ $projects->description_en }}</textarea>
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">Number of Machines</label>
            <input type="number" class="form-control" name="machine" id="name_en" value="{{ $projects->machine }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Address</label>
            <textarea type="text" class="form-control" rows="3" name="address" id="name_en">{{ $projects->address }}</textarea>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Salary</label>
            <input type="text" class="form-control" name="salary" id="name_en" value="{{ $projects->salary }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">Year</label>
            <input type="date" class="form-control" name="year" id="name_en" value="{{ $projects->year }}">
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
