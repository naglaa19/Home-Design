@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html> 
    <head> 
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="{{asset('css/navbar.css')}}">
    </head>
    <body>
            <!--navbar start-->
           
             <!--navbar end-->

<div class="container">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
    @endif
  
    <div class="container">
    
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <form method="POST" action="{{ route('profile/update',$user->id) }}"enctype="multipart/form-data" >
                        @csrf
                        {{-- Name --}}
                        <div class="mb-3">
                          <label for="exampleInputEmail1" class="form-label">Name</label>
                          <input type="text" value="{{ $user->name }}" class="form-control"required name="name"  id="exampleInputEmail1" aria-describedby="emailHelp">
                          @error('name')
                          <div class="text-danger">{{$message}}</div>
                          @enderror
                        </div>

                        {{-- email  --}}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" value="{{ $user->email }}" class="form-control"required name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        {{-- password  --}}
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text"  class="form-control"required name="password"  id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        {{-- image --}}
    
                        <div class="mb-3">
                            @if($user->image!==null)
                            <img width="100px" height="100px" src="{{ asset('images/profile/'.$user->image) }}">
                            @endif
        
                            <input type="file" class="form-control" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                            @error('image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="hidden"name="old_image" class="form-control" value="{{ $user->image }}">
                        </div>
    
                        <button type="submit" class="btn btn-primary">Edit</button>
                    </form>
            </div>
        </div>
    </div>
    @endsection
    
</body>
</html>