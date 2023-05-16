@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      {{-- <link href='https://fonts.googleapis.com/css?family=Lato:100,200,300,400,500,600,700' rel='stylesheet' type='text/css'> --}}

      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="{{asset('css/edit_profile.css')}}">
      <title>Edit Profile</title>
   </head>
   <body >
            <!--navbar start-->
           
             <!--navbar end-->

<div class="container div">
        <div class="row justify-content-center">
            <div class="col-md-8">
                    <form method="POST" action="{{ route('profile/update',$user->id) }}"enctype="multipart/form-data" >
                        @csrf
                        {{-- Name --}}
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="name" value="{{$user->name}}" id="title" class="form-controll"/>
                          @error('name')
                          <div class="text-danger">{{$message}}</div>
                          @enderror
                        </div>

                        {{-- email  --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="text" value="{{ $user->email }}" class="form-controll"required name="email"  id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>

                        {{-- password  --}}
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Password</label>
                            <input type="text"  class="form-controll"required name="password"  id="exampleInputEmail1" aria-describedby="emailHelp">
                            @error('name')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                        </div>
                        {{-- image --}}
    
                        <div class="form-group">
                            @if($user->image!==null)
                            <img width="100px" height="100px" src="{{ asset('images/profile/'.$user->image) }}">
                            @endif
        
                            <input type="file" class="form-controll" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                            @error('image')
                            <div class="text-danger">{{$message}}</div>
                            @enderror
                            <input type="hidden"name="old_image" class="form-control" value="{{ $user->image }}">
                        </div>
    
                        <div class="form-group">
                            <button type="submit">Edit</button>
                          </div>
                    </form>
            </div>
        
    </div>
    @endsection
    
</body>
</html>