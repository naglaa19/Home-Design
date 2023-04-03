@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html> 
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Comments</title>
        <link rel="stylesheet" type="text/css" href="{{asset('css/comment.css')}}">
        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    <!--Main content-->
    <body>
 
      <div>
        <img class="photo" src="{{asset('images/designs/'.$design->image)}}">
      </div>
      <div class="container">
        <div class="be-comment-block">
          <h1 class="comments-title">{{$comments_count}}</h1>
          @foreach($comment as $comment)
          <div class="be-comment">
            
            <div class="be-img-comment">	
              <a href="blog-detail-2.html">
                <img src="{{asset('images/profile/'.$comment->user->image)}}" alt="" class="be-ava-comment">   
              </a>
            </div>
            
          <div class="be-comment-content">
            {{-- @foreach($commenter as $commenter) --}}
              <span class="be-comment-name">
                <a href="{{route('profile/index',$comment->user->id)}}">{{$comment->user->name}}</a>
                </span>
                {{-- @endforeach/ --}}
              {{-- <span class="be-comment-time">
                <i class="fa fa-clock-o"></i>
                May 27, 2015 at 3:14am
              </span> --}}
      
            <p class="be-comment-text">
              {{$comment->comment}}
            </p>
          </div>
          
        </div>
        @endforeach
        
        <form class="form-block" action="{{route('comment/store')}}" method="POST">
          @csrf
            <div class="col-xs-12">									
              <div class="form-group">
                <textarea class="form-input" name="comment" required="" placeholder="Your comment"></textarea>
              </div>
              <div class="form-group">
                <input class="form-input" type="hidden" value="{{$design->id}}" name="design_id" >
              </div>
            </div>
           <button class="back_color">Submit</button>
          </div>
        </form>
      </div>
      </div>
      <!--End page contnet-->

    <!-- footer section start -->

         
    </body>  

    @endsection