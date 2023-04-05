@extends('layouts.app')
@section('content')
<head> 
    <title>Edit Section</title>
 </head>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('section/update', $section->id ) }}"enctype="multipart/form-data" >
                    @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label">Name</label>
                      <input type="text" class="form-control"required name="name" value='{{ $section->name }}'  id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
        </div>
    </div>
</div>
@endsection
