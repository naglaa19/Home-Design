@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html> 
    <head> 
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category.css')}}">
        <link rel="stylesheet" type="text/css" href="{{asset('css/lightbox.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>{{$category->name}}</title>
    </head>
    <body>

      <div class="back-img">
        <img src="{{asset('images/images/black3.jpeg')}}">
        <div class="back-text">
          <h1>{{$category->name}}</h1>
          <p>We Have All Ideas for You</p>
        </div>
      </div>
        
    <!--Start page content-->
    <div class="contanier">
      
        @foreach($image as $img)
        <div class="o">
          
          <a href="{{asset('images/images/'.$img->image)}}" data-lightbox="models" data-title ="{{$img->discreption}}">
            
          <div class="card">
                <img  class='photo' src="{{asset('images/images/'.$img->image)}}">
            </div>
             
          </a>
          
        </div>
        @endforeach
      
    </div>

   <script src="{{asset('js/lightbox.js')}}"></script> 
    <!-- footer section start -->


  </body>
</html>
@endsection