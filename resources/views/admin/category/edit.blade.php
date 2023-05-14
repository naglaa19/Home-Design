@extends('layouts.app')
@section('content')
<head> 
    <title>Edit Category</title>
 </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('Category/update', $category->id ) }}"enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control"required name="name" value='{{ $category->name }}'  id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name')
                        <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      @if($category->image!==null)
                      <img width="100px" height="100px" src="{{ asset('images/category/'.$category->image) }}">
                      @endif
  
                      <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                      @error('image')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                      <input type="hidden"name="old_image" class="form-control" value="{{ $category->image }}">
                  </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection
