@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
      <title>Profile</title>
   </head>
   <body >
  <div class="container container2">
    <div class="center">
   <div class="card">
      <img class="user_pic" src="{{asset('images/profile/'.$user->image)}}">
      <span class="user_name">{{$user->name}}</span> 
      <a href="{{route('profile/edit',$user->id)}}"><button class="edit">Edit Profile</button></a>
      <a href="{{route('profile/create')}}"><button class="upload">Upload Design</button></a>
      <div class="details">
         <table class="details1">
            <tr class="tr1">
               <th class="th1">{{$designs}}</th>
               <th class="th1">{{$comments}}</th>
            </tr>
            <tr class="tr1">
               <td class="td1">Designs</td>
               <td class="td1">Comments</td>
            </tr>
         </table>
      </div>
   </div>
</div>
</div> 
   <div class="container1"> 
   
            <div class="top">
                @foreach ($design as $design)
                <ul class="img-container">
                  <li class="imgg">
                     <a class="imgg" href="#img_1">
                        <img class="img" src="{{asset('images/designs/'.$design->image)}}">
                     </a>
                  </li>
                </ul>
                @endforeach 
            </div>
            
    </div>


   </body>
</html>

@endsection