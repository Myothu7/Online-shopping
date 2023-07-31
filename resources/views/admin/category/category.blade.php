@extends('admin.master')
@section('content')
    <div class="row">
      <h4 class="text-primary m-2">>>Category</h4>
        <div class="col-1"></div>
        <div class="col-5">
          @if(session('success'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ session('success') }}
            </div>
          @endif
          @if(session('delete'))
            <div class="alert alert-danger alert-dismissible fade show">
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                {{ session('delete') }}
            </div>
          @endif
            <a href="{{url("/categories/add")}}" class="btn btn-primary float-end mt-4 me-4 mb-5">add category</a>
            <table class="table table-hover">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Category</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($categories as $category)
                    <tr>
                      <td>{{$category->id}}</td>
                      <td>{{$category->name}}</td>
                      <td>
                        <a href="{{url("/categories/$category->id")}}" class="btn btn-sm btn-primary me-2">Update</a>
                        <a href="{{url("/categories/delete/$category->id")}}" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-1"></div>
        <div class="col-5">
        </div>
    </div>
@endsection
