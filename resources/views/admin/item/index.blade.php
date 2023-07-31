@extends('admin.master')
@section('content')
    <div class="row">
        <div class="col-1"></div>
        <div class="col-10">
            <h4 class="text-primary m-2">>>Item</h4>
            @if(session('delete'))
              <div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  {{ session('delete') }}
              </div>
            @endif
            @if(session('update'))
              <div class="alert alert-danger alert-dismissible fade show">
                  <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                  {{ session('update') }}
              </div>
            @endif
            <a href="{{url('/items/add')}}" class="btn btn-primary m-2 float-end">add item</a>
            <table class="table table-hover">
                <thead class="table-primary">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Item</th>
                    <th scope="col">Category</th>
                    <th scope="col">Description</th>
                    <th scope="col">Price</th>
                    <th scope="col">Owner</th>
                    <th scope="col">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  
                  @foreach ($items as $item)
                    <tr>
                      <td>{{$item->id}}</td>
                      <td>{{$item->item}}</td>
                      <td>{{$item->category->name}}</td>
                      <td>{{$item->description}}</td>
                      <td>{{"$".$item->price}}</td>
                      <td>{{$item->owner}}</td>
                      <td>
                        <a href="{{url("/items/$item->id")}}" class="btn btn-sm btn-primary me-2">Update</a>
                        <a href="{{url("/items/delete/$item->id")}}" class="btn btn-sm btn-danger">Delete</a>
                      </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
        <div class="col-1"></div>
    </div>
@endsection