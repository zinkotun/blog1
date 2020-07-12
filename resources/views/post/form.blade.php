<div class="form-group">
    <label for="title">Title</label>
    <input type="text" placeholder="entertitle" name="title" id="title" class="form-control" value="{{old('title')?? $post->title?? ""}}">
    <div class="error">{{$errors->first('title')}}</div>
</div>
<div class="form-group">
    <label for="content">Content</label>
    <input type="text" name="content"  placeholder="enetercontent" id="content" class="form-control"  value="{{old('content')?? $post->content?? ""}}">
    <div class="error">{{$errors->first('content')}}</div>
</div>
<div class="form-group">
    <label for="author">Author</label>
        <select name="customer_id" id="customer_id"  class="form-control" >
        @foreach($customers as $customer)
            <option value="{{$customer->id}}" {{(($post->customer_id??"")==$customer->id)?"selected":""}}> {{$customer->name}} </option>
        @endforeach
    </select>
    <div class="error">{{$errors->first('customer_id')}}</div>
</div>

<div class="form-group ">
    <lable for="image">Image</lable>
    <div class="custom-file mb-3">
    <input type="file" name="image" id="image" class="custom-file-input">
    <label class="custom-file-label" for="image">Choose file</label>
</div>
</div>

