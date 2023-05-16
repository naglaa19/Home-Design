@extends('layouts.layout')
@section('content')

<!DOCTYPE html>
<html> 
    <head> 
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Comments</title>
        

        {{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> --}}
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="{{asset('css/comment.css')}}">
      </head>
           <body>
            <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        
                   <!-- begin timeline -->
                   <ul class="timeline">
                    <li>
                       <div class="timeline-icon">
                          <a href="javascript:;">&nbsp;</a>
                       </div>
                       <!-- end timeline-icon -->
                       <!-- begin timeline-body -->
                       <div class="timeline-body">
                          <div class="timeline-header">
                            {{-- @foreach ($design as $design)
                             <span class="userimage"><img src="{{asset('images/profile/',$design->user->image)}}" alt=""></span>
                             <span class="username"><a href="javascript:;">Sean Ngu</a> <small></small></span>
                             @endforeach --}}
                          </div>
                          <div class="timeline-content">
                            <img class="photo1" src="{{asset('images/designs/'.$design->image)}}" alt="" />
                          </div>
                          <div class="timeline-likes">
                             <div class="stats-right">
                                <span class="stats-text">{{$comments_count}} Comments</span>
                             </div>
                            
                          </div>
                          <div class="timeline-footer">
                            @foreach($comment as $comment)
                            <div class="be-comment">
                              
                              <div class="be-img-comment">	
                                <a href="blog-detail-2.html">
                                  <img src="{{asset('images/profile/'.$comment->user->image)}}" alt="" class="be-ava-comment">   
                                </a>
                              </div>
                              
                            <div class="be-comment-content">
                              
                                <span class="be-comment-name">
                                  <a class="name" href="{{route('profile/index',$comment->user->id)}}">{{$comment->user->name}}</a>
                                </span>
                                  
                              <p class="be-comment-text">
                                {{$comment->comment}}
                              </p>
                            </div>
                            
                          </div>
                          @endforeach
                          
                          </div>
                          <div class="timeline-comment-box">
                             {{-- <div class="user"><img src="https://bootdey.com/img/Content/avatar/avatar3.png"></div> --}}
                             <div class="input">
                                  {{-- <form action="{{route('comment/store')}}" method="POST">
                                    @csrf
                                        <div class="input-group">
                                          <div class="form-group">
                                            <input class="form-input" type="hidden" value="{{$design->id}}" name="design_id" >
                                          </div>
                                               
                                            <input type="text" name="comment" class="form-control rounded-corner" placeholder="Write a comment...">
                                              <button class="back_color">Submit</button>
                                    
                                        </div>
                                      </div> 
                                  </form> --}}
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
                       </div>
                       <!-- end timeline-body -->
                    </li>
                    <li>
                         
               </body>
</html>
    @endsection



          {{-- <div>
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
            
              <span class="be-comment-name">
                <a href="{{route('profile/index',$comment->user->id)}}">{{$comment->user->name}}</a>
              </span>
                
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
      </div> --}}
