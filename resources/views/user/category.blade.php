@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html> 
    <head> 
         <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" type="text/css" href="{{asset('css/category.css')}}">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <title>Categories</title>
    </head>
  	<body class="is-preload">
      <!-- Wrapper -->
        <div id="wrapper">
  
          {{-- <!-- Header -->
            <header id="header">
              <div class="inner">
            </header> --}}
  
          <!-- Main -->
            <div id="main">
              <div class="inner">
              
                <section class="tiles">
                  @foreach($category as $cat)
                  <article class="style1">
                    <span class="image">
                      <img class="immg" src="{{asset('images/category/' .$cat->image)}}" alt="" style="width:100%;"/>
                    </span>
                    <a class="color" href="{{route('/images' , $cat->id)}}">
                      <h2>{{$cat->name}}</h2>
                    </a>
                  </article>
                  @endforeach
                </section>
              </div>
            </div>
  
      <!-- Scripts -->
      <script src="{{asset('js2/jquery.min.js')}}"></script>
      <script src="{{asset('js2/browser.min.js')}}"></script>
      <script src="{{asset('js2/breakpoints.min.js')}}"></script>
      <script src="{{asset('js2/util.js')}}"></script>
      <script src="{{asset('js2/main.js')}}"></script>
  
    </body>
</html>
@endsection