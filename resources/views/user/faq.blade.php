@extends('layouts.layout')
@section('content')
<head>
    <meta charset="utf-8">
    <title>Frequently Asked Questions</title>
    <!-- Styles -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/faq.css')}}">
    <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
    crossorigin="anonymous"/>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3"
    crossorigin="anonymous"
  ></script>
 
</head>
<body>

<!--navbar start-->


<div class="back-nav">
  <img style="" src="{{asset('img/7acf05bde65f33452c0306982de1251e.jpg')}}">
  <div class="back-text">
    <h1 style="color:#112233 ;
  text-align: center; padding-top:50px;">Frequently Asked Question</h1>
    <p>Ask Us</p>
  </div>
</div>

<div class="sections">
  {{-- <div class="list-group"  > --}}
    @foreach($section as $sec)
    <a href="{{route('FAQ/show',$sec->id)}}" class="qa-section" style="background-color: aliceblue; " aria-current="true">{{$sec->name}}</a>
    @endforeach
  {{-- </div> --}}
</div>

<div class="containerFluid">
  {{-- <h2>Frequently Asked Questions(FAQs)</h2> --}}
  @foreach($faq as $faq)
  <div class="accordion">
    <div class="icon"></div>
    <h5>{{$faq->question}}</h5>
  </div>
  <div class="panel">
    <p style="color: #ffff">{{$faq->answer}}</p>
  </div>
  @endforeach  
</div>

<script>
      var acc = document.getElementsByClassName("accordion");
      var i;
      var len = acc.length;
      for (i = 0; i < len; i++) {
        acc[i].addEventListener("click", function () {
          this.classList.toggle("active");
          var panel = this.nextElementSibling;
          if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
          } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
          }
        });
      }
  </script>

</body>

@endsection