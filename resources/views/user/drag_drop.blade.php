@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3D viewer & AR</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/drag_drop.css')}}">
    </head>
    <body>
    <div class="section1">
        <img class="pic_cont" src="{{asset('images/drag_drop/picc5.jpg')}}">
        <div class="div1" >
            <h1> Augmented Reality Drag and Drop!</h1>
            <p class="p1"> Augmented Reality can be considered as one of the biggest technology trends that will let the real-life environment right in front of us.</p>      
        </div>
    </div>
    
    <div class="section3">
        <h3>USING AUGMENTED REALITY INTERIOR DESIGN 
            <br>TO CREATE YOUR DREAM HOUSE</h3>
            <div class="details">
                <div class="details_video">
                    <video autoplay loop muted plays-inline class="ar_video">
                    <source src="{{asset("images/drag_drop/drag_drop_ar.mp4")}}" type="video/mp4">
                    </video>
                </div>
                <div class="details_p">
                    <p class="p4">Augmented reality (AR) is a modern technology trend combining computer-generated input with a real-world environment. Without a doubt, AR is implemented widely in interior design and is considered a highly sought-after trend for beginners, amateurs, and professionals. The key secret of its success lies in the simple fact that designers don’t have to figure out how AR technology works — with the help of advanced tools that support it, a house model can be easily viewed in AR minutes after the interior design is ready.</p>
                </div>
            </div>
    </div>

    <div class="section4">
    <div class="defintion">
        <p class="p5"><span class="AR">Augmented Reality (AR)</span>, as a technology has created a buzz among retailers as well as consumers. AR home apps are booming. You can do home design, room planning, and interior design with augmented reality on your phone.</p>
    </div>
    <div class="def_img">
        <img class="img4" src="{{asset('images/drag_drop/picc1.jpg')}}">
    </div>
    </div>
    <div class="section2">
        <div>
        <h2>Steps to <span class="create">Create</span></h2>
        <p class="p2">The AR application used to develop and test the AR drag and drop paradigm
            <br> has been developed using the Unity engine, and then compiled as an Android apk. 
            <br> AR tracking is performed thanks to the Vuforia SDK, which can be easily integrated in Unity. 
            <br>For shared environments with multiple users accessing AR objects, a server application developed in Unity was running on a PC.</p>
        </div>
        <div class="div2">
            <div class="steps">
            <img class="img1" src="{{asset('images/drag_drop/getcontent.webp')}}">
            <p class="p3">Get your content ready</p>
            </div>
            <div class="steps">
            <img class="img2" src="{{asset('images/drag_drop/pic4.webp')}}">
            <p class="p3">Drag And Drop Develop Yourself</p>
            </div>
            <div class="steps">
            <img class="img3" src="{{asset('images/drag_drop/upload.jpg')}}">
            <p class="p3">Upload your Design</p>
            </div>
        </div>
    </div>
    </body>
</html>
{{-- content  --}}

@endsection