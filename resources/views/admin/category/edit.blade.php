@extends('admin.master')
@section('content')
<div class="row">
    <div class="col-1"></div>
    <div class="col-5">
        <div class="alert alert-primary mb-4 mt-3" role="alert">
            Update Category
          </div>
        <form method="post" enctype="multipart/form-data" action="{{url("/categories/$category->id")}}">
            @csrf
            <div class="mb-3">
                <label for="" class="text-primary mb-2">Category</label>
                <input type="text" name="name" value = "{{$category->name}}" class="form-control mt-2">
            </div>
            <input type="submit" class="btn btn-primary float-end me-2" value="Update">
        
        </form>
    </div>
    <div class="col-6"></div>
</div>
@endsection