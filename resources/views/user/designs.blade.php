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

{{-- <div class="row">
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
</div> --}}

{{-- <div class="preload pre-hidden">

</div> --}}

<div id="wrapper">


   <!-- Banner -->
     <section id="banner" class="major" >
       <div class="inner" >
         <header class="major">
           <h1>DESIGNS</h1>
         </header>
         <div class="content">
           <p>pepole upload our designs, 
             you can show them and get some ideas to make own design</p>
           <ul class="actions">
             <li><a href="#one" class="button next scrolly">Get Started</a></li>
           </ul>
         </div>
       </div>
     </section>

   <!-- Main -->
     <div id="main">

       <!-- One -->
         <section id="one" class="tiles">
          @foreach ($design as $design)
           <article>
             <span class="image">
               <img src="{{asset('images/designs/'.$design->image)}}" alt="" />
             </span>
             <header class="major">
               <h3><a href="{{route('comments',$design->id)}}" class="link">{{$design->name}}</a></h3>
               <p>{{$design->discreption}}</p>
             </header>
           </article>
           @endforeach
         </section>
       
     </div>

 </div>


   <script src="{{asset('js/jquery.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrolly.min.js')}}"></script>
      <script src="{{asset('js/jquery.scrollex.min.js')}}"></script>
      <script src="{{asset('js/browser.min.js')}}"></script>
      <script src="{{asset('js/breakpoints.min.js')}}"></script>
      <script src="{{asset('js/util.js')}}"></script>
      <script src="{{asset('js/main.js')}}"></script>

      {{-- <script>

        window,addEventListener("load", ()=>{
          const loader = document.querySelector(".preload");

          loader.classList.add("pre-hidden");
          loader.addEventListener("transitionend" , () =>{
            document.body.removeChild(loader);
          })

        })
      </script> --}}
   
   </body>
</html>

@endsection