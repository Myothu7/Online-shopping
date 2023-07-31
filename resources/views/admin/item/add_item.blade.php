@extends('admin.master')
@section('content')

<div class="row">
    <span class="m-2">Item list > <span class="text-primary">Add items</span></span>
    <div class="col-1">
    </div>
    <div class="col-10">
        <p class="bg-info p-1 rounded mb-2 mt-2">Add Item</p>
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
    <form action="" enctype="multipart/form-data" method="post">
        @csrf
            <h4>Item Information</h4>
            <div class="mb-3 mt-2">
                <label for="">Item Name<span class="text-danger">*</span></label>
                <input type="text" name="item" placeholder="Input Name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Select Category<span class="text-danger">*</span></label>
                <select class="form-select" aria-label="Default select example" name="category_id" >
                    <option selected>Select Category</option>
                    @foreach($categories as $category)
                    <option value="{{$category['id']}}">{{$category['name']}}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="">Price<span class="text-danger">*</span></label>
                <input type="text" name="price" placeholder="Enter Price" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Description</label>
                <textarea class="form-control" name="description" rows="3" placeholder="Enter Description"></textarea>
            </div>
            <div class="mb-3">
                <label for="">Select item Condition<span class="text-danger">*</span></label>
                <select class="form-select" name="type">
                    <option selected>Select Item Condition</option>
                    <option value="Sale">Sale</option>
                    <option value="Buy">Buy</option>
                    <option value="Exchange">Exchange</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="">Item Photo<span class="text-danger">*</span></label>
                <input type="file" class="form-control" name="image">
            </div>
        </div>
            <div class="col-5">
                <h4>Owner Information</h4>
                <div class="mb-3 mt-2">
                    <label for="">Owner Name<span class="text-danger">*</span></label>
                    <input type="text" name="owner" placeholder="Input Owner Name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Contact Number</label>
                    <input type="text" name="phone" placeholder="09xxxxxxxxx" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Address</label>
                    <input type="text" name="address" placeholder="Enter Address" class="form-control">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary float-end" value="Save">
                    <a href="{{url("/items/add")}}" class="btn btn-primary float-end me-2">Cancel</a>
                </div>
            </div>
    </form>
    <div class="col-1"></div>

</div>
    
@endsection