@extends('admin.master')
@section('content')

<div class="row">
    <span class="m-2">Item list > <span class="text-primary">Update items</span></span>
    <div class="col-1">
    </div>
    <div class="col-10">
        @if($errors->any())
            <div class="alert alert-warning alert-dismissible fade show">
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <ol>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ol>
            </div>
        @endif
        @if(session('success'))
                <div class="alert alert-danger alert-dismissible fade show">
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    {{ session('success') }}
                </div>
        @endif
    </div>
    <div class="col-1"></div>
    <div class="col-1"></div>
    <div class="col-5">
        <p class="bg-info p-1 rounded mb-3 mt-2">Update Item</p>
    <form action="" enctype="multipart/form-data" method="post">
        @csrf
            <div class="mb-3 mt-2">
                <label for="">Item Name<span class="text-danger">*</span></label>
                <input type="text" name="item" placeholder="Input Name" class="form-control" value="{{$item['item']}}">
            </div>
            <div class="mb-3">
                <label for="">Select Category<span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name="category_id" >
                    <option selected value="{{$item->id}}">{{$item->category->name}}</option>
                    @foreach($category as $data)
                        <option value="{{$data->id}}">{{$data->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">Description</label>
                <input type="textarea" name="description" row="4" col="3" class="form-control" placeholder="Enter Description" value="{{$item['description']}}">
            </div>
            <div class="mb-3">
                <label for="">Price<span class="text-danger">*</span></label>
                <input type="text" name="price" placeholder="Enter Price" class="form-control" value="{{$item['price']}}">
            </div>
            <div class="mb-3">
                <label for="">Owner Name<span class="text-danger">*</span></label>
                <input type="text" name="owner" placeholder="Input Owner Name" class="form-control" value="{{$item['owner']}}">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary float-end" value="Update">
                <a href="{{url("/items")}}" class="btn btn-primary float-end me-2">Cancel</a>
            </div>
    </form>
        </div>
            <div class="col-5">
            </div>
   
    <div class="col-1"></div>

</div>
    
@endsection