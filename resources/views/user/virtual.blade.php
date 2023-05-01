@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3D viewer & AR</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/virtual.css')}}">
    </head>
    <body>
               <!-- Section_1-->
    <div class="row">
        <img class="image_1" src="{{asset('images/virtual/man-woman-glasses-virtual-reality.jpg')}}">
    </div>
    <div >
        <h3 class="head_title">La casa</h3>
        <h1 class="head_title">Virtual Reality Showroom</h1>
        <p class="center">Virtual Reality (VR) is an innovative technology that allows users to experience <br>three-dimensional computer-generated environments in a fully immersive way.</p>
    </div>

<div class="section_color">

    <h2 class="head_sec2">Why VR used in home design?</h2>
    <div class="section_2">
            <img class="image_2" src="{{asset('images/virtual/ikea-room-plan.jpg')}}">
        <div class="describ">
            <h3>Importing the model into VR </h3>
            <p>A designer or architect creates a 3D model of the home and The 3D model is then imported into virtual reality software, which allows the user to explore and interact with the model in a 3D environment.</p>
        </div>    
    </div>

    <div  class="section_3">
        <img class="image_3" src="{{asset('images/virtual/VR design.jpg')}}">
        <div class="describ3">
            <h3>Exploring the model</h3>
            <p> The user can walk through the virtual home, examining details such as the layout, materials, and finishes. They can also interact with objects, such as opening doors and drawers, adjusting lighting, and moving furniture.</p> 
        </div>  
    </div>
    <div class="section_4">
        <img class="image_4" src="{{asset('images/virtual/VR-Placing-Furniture.jpg')}}">
        <div class="descrip4">
            <h3>Making changes</h3>
            <p>Based on their experience in VR, the user can make changes to the design, such as adjusting the layout or changing materials. The designer or architect can then update the 3D model to reflect these changes, and the process can be repeated until the user is satisfied with the design.</p>
        </div>
    </div>
</div>
    <div class="section_5">
        <h3 style="text-align:center;color:white;"> virtual Realism</h3>
        <p style="text-align:center;">virtual reality allows customers to better visualize and interact with their home design, providing a more immersive and engaging experience than traditional 2D drawings and renderings.</p>
    </div>

    </body>
</html>
{{-- content  --}}

@endsection