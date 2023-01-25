
@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('Image/update',$image->id) }}"enctype="multipart/form-data" >
                    @csrf
                    {{-- Name --}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" value="{{ $image->name }}" class="form-control"required name="name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>

                    {{-- image --}}

                    <div class="mb-3">
                        @if($image->image!==null)
                        <img width="100px" height="100px" src="{{ asset('images/images/'.$image->image) }}">
                        @endif
    
                        <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                        @error('image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                        <input type="hidden"name="old_image" class="form-control" value="{{ $image->image }}">
                    </div>


                    {{-- Diecreption --}}
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea2" style="height: 150px"  name="discreption" >{{$image->discreption}}</textarea>
                        <label for="floatingTextarea2">Discreption</label>
                    </div>

                    {{-- category --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category</label>
                        <select name="category_id"  id=""class="form-control">
                            <option value="{{$image->category_id}}">{{ $category->name}}</option>
                        @foreach ($cat as $category)
                        <option value="{{ $category->id}}">{{ $category->name }}</option>
                        @endforeach
                        </select>
                        @error('category_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Edit</button>
                </form>
        </div>
    </div>
</div>
@endsection
