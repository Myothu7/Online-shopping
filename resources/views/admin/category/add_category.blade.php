@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-6">
            <div class="alert alert-primary mb-4 mt-3" role="alert">
                Add Category
            </div>
            @if($errors->any())
                <div class="alert alert-warning alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                    <ol>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
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
            <form method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">Category</label>
                    <input type="text" name="name" placeholder = "input name" class ="form-control mt-2">
                </div>
                <div class="mb-3">
                    <label for="">Category Photo</label>
                    <input type="file" name="image" placeholder = "Email" class ="form-control mt-2">
                </div>
                <div class="mb-3">
                    <input type="submit" class="btn btn-primary float-end me-2" value="Save">
                </div>
            </form>
        </div>
        <div class="col-5"></div>
    </div>
@endsection