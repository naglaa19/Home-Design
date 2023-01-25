
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('Image/store') }}"enctype="multipart/form-data" >
                    @csrf
                    {{-- Name --}}
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control"required name="name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>

                    {{-- image --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Image</label>
                        <input type="file" class="form-control" required name="image" id="exampleInputEmail1"
                               aria-describedby="emailHelp">
                        @error('image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    {{-- Discreption --}}
                    <div class="form-floating">
                        <textarea class="form-control" id="floatingTextarea2" style="height: 150px" name="discreption"></textarea>
                        <label for="floatingTextarea2">Discreption</label>
                    </div>
  
                    <br>
                    {{-- category --}}
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Category</label>
                        <select name="category_id" id="" class="form-control" required>
                            @foreach ($category as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('cat_id')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>
    </div>
</div>
@endsection
