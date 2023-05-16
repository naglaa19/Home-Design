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
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"/>
      <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">
      <title>Profile</title>
   </head>
   <body >
  {{-- <div class="container container2">
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
            
    </div> --}}

    <div class="row py-5 px-4 ">
      <div class="col-md-5 mx-auto ">
        <!-- Profile widget -->
        <div class="bg-white shadow rounded overflow-hidden cards">
          <div class="px-4 pt-6 pb-0 cover">
            <div class="media align-items-end profile-head">
              <div class="profile mr-4">
                <img
                  src="{{asset('images/profile/'.$user->image)}}"
                  alt="..."
                  width="130"
                  class="rounded mb--4 img-thumbnail"
                  />
                <a href="{{route('profile/edit',$user->id)}}" class="btn btn-outline-dark btn-sm btn-block">Edit Profile</a>
                <a href="{{route('create')}}" class="btn btn-outline-dark btn-sm btn-block">Upload Designs</a>
              </div>
              <div class="media-body mb-5 text-black">
                <h4 class="mt-0 mb-5 name">{{$user->name}}</h4>
              </div>
            </div>
          </div>
          <div class="p-4 d-flex justify-content-end text-center">
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <h5 class="font-weight-bold mb-0 d-block txt">{{$comments}}</h5>
                <small class="text-black txt">
                  <i class="fas fa-image mr-1 txt"></i>Comments</small>
              </li>
              <li class="list-inline-item">
                <h5 class="font-weight-bold mb-0 d-block txt">{{$designs}}</h5>
                <small class="text-black txt">
                  <i class="fas fa-user mr-1 txt"> </i>Designs</small>
              </li>
            </ul>
          </div>
          <div class="py-4 px-4">
            <div class="d-flex align-items-center justify-content-between mb-3">
              <h5 class="mb-0 txt">Designs</h5>
              {{-- <a href="#" class="btn btn-link text-muted">Show all</a> --}}
            </div>
            <div class="row">
               @foreach ($design as $design)
              <div class="col-lg-6 mb-2 pr-lg-1">
                <img
                  src="{{asset('images/designs/'.$design->image)}}"
                  alt=""
                  class="img-fluid rounded shadow-sm"/>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>

   </body>
</html>

@endsection