<div class="modal-body">
    <form id="updateForm" method="POST" enctype="multipart/form-data" action="{{ route('product.update',$products->id)}}" >
    @csrf
        @method('post')
        <input type="hidden" value="{{$products->id}}" name="id">
        <div class="form-group">
            <label for="name" class="form-control-label">Image</label>
            <input type="file" class="dropify" name="image1" data-default-file="{{asset($products->image1)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" multiple="multiple"/>
            <input type="file" class="dropify" name="image2" data-default-file="{{asset($products->image2)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" multiple="multiple"/>
            <input type="file" class="dropify" name="image3" data-default-file="{{asset($products->image3)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" multiple="multiple"/>
            <input type="file" class="dropify" name="image4" data-default-file="{{asset($products->image4)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" multiple="multiple"/>
            <input type="file" class="dropify" name="image5" data-default-file="{{asset($products->image5)}}" accept="image/png,image/webp , image/gif, image/jpeg,image/jpg" multiple="multiple"/>
            <span class="form-text text-danger text-center">Only the following formats are allowed: png, gif, jpeg, jpg,webp</span>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">title en</label>
            <input type="text" class="form-control" name="title_en" id="name_en" value="{{ $products->title_en }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">title it</label>
            <input type="text" class="form-control " name="title_it" id="title_ar" value="{{ $products->title_it }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">price</label>
            <input type="text" class="form-control " name="price" id="title_en" value="{{ $products->price }}">
        </div>

        <div class="form-group">
            <label for="name" class="form-control-label">discount</label>
            <input type="tel" class="form-control" name="discount" id="name_en" value="{{ $products->discount }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">desc en</label>
            <textarea type="text" class="form-control" rows="10" name="desc_en" id="name_en" >{{ $products->desc_en }}</textarea>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">desc it</label>
            <textarea type="text" class="form-control" rows="10" name="desc_it" id="name_en" >{{ $products->desc_it }}</textarea>
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">product type</label>
            <input type="text" class="form-control" name="product_type" id="name_en" value="{{ $products->product_type }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">vendor</label>
            <input type="text" class="form-control" name="vendor" id="name_en" value="{{ $products->vendor }}">
        </div>
        <div class="form-group">
            <label for="name" class="form-control-label">tag</label>
            <input type="text" class="form-control" name="tag" id="name_en" value="{{ $products->tag }}">
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
