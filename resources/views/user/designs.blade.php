@extends('layouts.layout')

@section('content')

<!DOCTYPE html>
<html lang="en">
   <head>

      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <title>Designs</title>
      
      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('css/design.css')}}">
   </head>
   <body>
<!--Start page content-->

<div class="row">
   @foreach ($design as $design)
    <div class="image">
        <div id="zoom-In">
            <figure class="figure">
               <a class="img-link" href="{{route('comments',$design->id)}}"> 
                  <img src="{{asset('images/designs/'.$design->image)}}" alt="{{$design->name}}" /> 
               </a>
            </figure>
        </div> 
    </div>
    @endforeach
</div>

   
   </body>
</html>

@endsection