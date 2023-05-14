@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Inspiration Spaces</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/inspiration.css')}}">
    </head>
    <body>
        <div class="Div1">
            <div class="Div2"><h1 class="H1">Inspiration Spaces</h1> </div>
            <img src="{{asset('images/inspiration/pic1.png')}}">
          </div>
          <div>
            <h2 class="H2">Classic Style</h2>
      </div> 
        
<div class="row">
    <div class="image">
        <div id="zoom-In">
            <figure>
                <img src="{{asset('images/inspiration/pic2.webp')}}">
            </figure>
            <h3 class="H3">Dining Rooms</h3>
        </div>
    </div>
    <div class="image">
        <div id="zoom-In">
            <figure>
                <img src="{{asset('images/inspiration/pic3.webp')}}">
            </figure>
            <h3 class="H3">Bed Rooms</h3>
        </div>
    </div>
    <div class="image">
        <div id="zoom-In">
            <figure>
                <img src="{{asset('images/inspiration/pic4.webp')}}">
            </figure>
            <h3 class="H3">Reception Sofa Sets</h3>
        </div>
    </div>
  
    <div class="image">
        <div id="zoom-In">
            <figure>
                <img src="{{asset('images/inspiration/pic5.webp')}}">
            </figure>
            <h3 class="H3">Lighting</h3>
        </div>
    </div>
  
    
    <div>
      <h2 class="H2">Decorative Units</h2>
    </div>
    
  <div class="row">
  <div class="image">
    <div id="zoom-In">
        <figure>
            <img src="{{asset('images/inspiration/pic6.webp')}}">
        </figure>
        <h3 class="H3">Mirrors</h3>
    </div>
  </div>
  <div class="image">
    <div id="zoom-In">
        <figure>
            <img src="{{asset('images/inspiration/pic7.webp')}}">
        </figure>
        <h3 class="H3">Wall Decor</h3>
    </div>
  </div>
  <div class="image">
    <div id="zoom-In">
        <figure>
            <img src="{{asset('images/inspiration/pic8.webp')}}">
        </figure>
        <h3 class="H3">Home Accessories</h3>
    </div>
  </div>
  
  <div class="image">
    <div id="zoom-In">
        <figure>
            <img src="{{asset('images/inspiration/pic9.webp')}}">
        </figure>
        <h3 class="H3">Decorative Shelves</h3>
    </div>
  </div>
  
   <h4 class="H4">Inspiration Furniture & More Lighting Units & Home Décor</h4> 
  <div class="paragraph">
     <p>
       Explore a variety of luxurious home décor designs on our website.  You may get modern, classic, and contemporary styles . In addition to styles from other countries. The cottage, seaside, country, villa, and manor styles are just a few examples of styles that represent particular house architecture. You’ll find everything you’re looking for
     </p>
  </div>
    <div>
        <h4 class="H4">Living Rooms</h4>
        <p class="paragraph1">
            Are you starting afresh in a new house? Perhaps you’re preparing for a total house renovation? Finding new pieces for your house is exciting in any case! Choose from our wide selection of designs to enhance existing décor or entirely transform your living area.  
        </p>  
    </div>  
    <img class="photo2" src="{{asset('images/inspiration/pic10.jpg')}}">   
    </div>

    <div>
        <h4 class="H5">Bedrooms</h4>
        <p class="paragraph1">
            Style your bedroom with items that provide relaxation. Choose a bed that help you get fantastical dreams. To complete the beautiful room of your dreams and fit your life into it, add a matching commodes, dresser, wardrobe and nightstand.
        </p>  
    </div>  
    <img class="photo2" src="{{asset('images/inspiration/pic11.jpg')}}">   
    </div>

    <div>
        <h4 class="H5">kitchens</h4>
        <p class="paragraph1">
            Create a stylish kitchen island with space for sitting and socialising with METOD cabinets. They come in different depths so you can customise your own dream kitchen island
        </p>  
    </div>  
    <img class="photo3" src="{{asset('images/inspiration/pic12.jpg')}}">   
    </div>

    </body>
</html>
{{-- content  --}}

@endsection