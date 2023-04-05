@extends('layouts.app')

@section('content')
<head> 
    <title>Create Section</title>
 </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('section/store') }}"enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control"required name="name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Add</button>
                </form>
        </div>
    </div>
</div>
@endsection
