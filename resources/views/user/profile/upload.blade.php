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
      <link rel="stylesheet" type="text/css" href="{{asset('css/upload.css')}}">
      <title>Upload</title>
   </head>
   <body >
<div class="container div">
    <div class="row justify-content-center">
        <div class="col-md-8">
                <form method="POST" action="{{ route('profile/store') }}" enctype="multipart/form-data" >
                    @csrf
      
                    <div class="form-group">
                        <label for="title">Title</label>
                        <input type="text" name="name" id="title" class="form-controll"/>
                      @error('name')
                      <div class="text-danger">{{$message}}</div>
                      @enderror
                    </div>

                    <div class="form-group">
                        <label for="caption">Caption</label>
                        <input type="text" name="caption" id="caption" class="form-controll"/>
                      </div>
                      


                      <div class="form-group">
                        <label for="images">Design</label>
                        <input type="file" class="form-controll" name="image" id="exampleInputEmail1" aria-describedby="emailHelp" value="">
                        {{-- <div class="file-dummy">
                          <div class="default">Please select some files</div>
                        </div> --}}
                        @error('image')
                        <div class="text-danger">{{$message}}</div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <button type="submit">Upload design</button>
                      </div>
                </form>
        </div>
    </div>
</div>


{{-- <form method="POST" action="{{ route('profile/store') }}" enctype="multipart/form-data">
  
    <h1><strong>Upload your</strong> Design</h1>
    
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="name" id="title" class="form-controll"/>
    </div>
    <div class="form-group">
      <label for="caption">Caption</label>
      <input type="text" name="caption" id="caption" class="form-controll"/>
    </div>
    
    <div class="form-group file-area">
          <label for="images">Design</label>
      <input type="file" name="image" id="images" required="required" multiple="multiple"/>
      <div class="file-dummy">
        <div class="default">Please select some files</div>
      </div>
    </div>
    
    <div class="form-group">
      <button type="submit">Upload design</button>
    </div>
    
  </form> --}}
  
   </body>
  
  
  {{-- <a href="http://scribblerockerz.com/drag-n-drop-file-input-without-javascript/" class="back-to-article" target="_blank">back to Article</a> --}}
@endsection