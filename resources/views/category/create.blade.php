@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('Category/store') }}"enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control"required name="name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                      @error('name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>
    </div>
</div>
@endsection
