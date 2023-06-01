@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>3D viewer & AR</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/ar.css')}}">
        <noscript><link rel="stylesheet" href="{{asset('css/noscript.css')}}" /></noscript>
    </head>
    {{-- <body>
        <section class="contain">
            <div class="first_section">
                <img class="first_section_img" src="{{asset('images/3d_ar/ar.jpeg')}}" alt="">
                <div class="first_section_header">
                    <h1>3D Model Viewer & Augmented Reality</h1>
                    <h3>Do more than imagine. Let you see your products in every variation and angle.</h3>
                </div>
            </div>

            <div class="second_section">
                <div class="second_section_header">
                    <h1>Why Using AR?</h1>
                </div>
                <div class="icons">
                    <div class="icon_hand">
                        <img src="{{asset('images/3d_ar/icon-hand.png')}}">
                        <p>Increase in customer engagement with AR</p>
                    </div>
                    <div class="icon_chart">
                        <img src="{{asset('images/3d_ar/icon_chart.png')}}">
                        <p>Increase in conversion rate when viewing 3D models in AR</p>
                    </div>
                </div>
            </div>

            <div class="third_section">
                <div class="third_section_video">
                    <video autoplay loop muted plays-inline class="backVideo">
                        <source src="{{asset("images/3d_ar/AR.mp4")}}" type="video/mp4">
                    </video>
                </div>
                <div class="third_section_description">
                    <h2>Augmented Reality</h2>
                    <p>Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
                </div>
            </div>

            <div class="fourth_section">
                <div class="fourth_section_description">
                    <h2>View, customize & configure, all in one place</h2>
                    <p>Turn your viewer into a powerful 3D product configurator with our Professional Suite and add a revolutionary offer to your clients. </p>
                </div>
                <img class="fourth_section_img" src="{{asset("images/3d_ar/AR_color.png")}}">
                <div class="content">
                    <video autoplay loop muted plays-inline class="video">
                        <source src="{{asset("images/3d_ar/color.mp4")}}" type="video/mp4">
                    </video> 
                </div> 
            </div>



            <div class="fifth_section">
                <img src="{{asset("images/3d_ar/room.png")}}">
                <div class="fifth_section_description">
                    <h2>3D Viewer</h2>
                    <p>Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
                </div>
            </div>

        </section>
    </body> --}}


    <body class="landing is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">


				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>3D Model Viewer & Augmented Reality</h2>
							<p>Do more than imagine. Let you see your products in every variation and angle </p>
						</div>
					</section>

				<!-- One -->
					<section id="one" class="wrapper style1 special">
						<div class="inner">
							<header class="major">
								<h2>Why Using AR?</h2>
							</header>
							<ul class="icons major">
								<li>
                                    <img src="{{asset('images/3d_ar/icon-hand.png')}}"> 
                                    <p>Increase in customer engagement <br> with AR</p>
                                </li>
								<li>
                                    <img src="{{asset('images/3d_ar/icon_chart.png')}}">
                                    <p>Increase in conversion rate <br> when viewing 3D models in AR</p>
                                </li>
							</ul>
						</div>
					</section>

				<!-- Two -->
					<section id="two" class="wrapper alt style2">
						<section class="spotlight">
							<div class="image">
                                <video autoplay loop muted plays-inline class="backVideo">
                                    <source src="{{asset("images/3d_ar/AR.mp4")}}" type="video/mp4">
                                </video>
                            </div>
                            <div class="content">
								<h2>Augmented Reality</h2>
								<p>Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
							</div>
						</section>
						<section class="spotlight">
							<div class="image"><img src="{{asset("images/3d_ar/AR_color.png")}}" alt="" /></div><div class="content">
								<h2 class="second-color">View, customize & configure, all in one place</h2>
								<p class="sub-second-color">Turn your viewer into a powerful 3D product configurator with our Professional Suite and add a revolutionary offer to your clients.</p>
							</div>
                            {{-- <div class="fourth_section_description">
                                <h2>View, customize & configure, all in one place</h2>
                                <p>Turn your viewer into a powerful 3D product configurator with our Professional Suite and add a revolutionary offer to your clients. </p>
                            </div>
                            <img class="fourth_section_img" src="{{asset("images/3d_ar/AR_color.png")}}">
                            <div class="content">
                                <video autoplay loop muted plays-inline class="video">
                                    <source src="{{asset("images/3d_ar/color.mp4")}}" type="video/mp4">
                                </video> 
                            </div>  --}}
						</section>
						<section class="spotlight">
							<div class="image">
                                <img src="{{asset("images/3d_ar/room.png")}}">
                            </div>
                            <div class="content">
								<h2>3D Viewer</h2>
								<p>Augmented Reality function brings products to life and enhances Customer Experience. Just a click to see a 3D live preview of your products in real life, increasing conversion and confidence.</p>
							</div>
						</section>
					</section>

				<!-- Three -->
					


			</div>

		<!-- Scripts -->
			<script src="{{asset('ar_js/jquery.min.js')}}"></script>
			<script src="{{asset('ar_js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('ar_js/jquery.scrolly.min.js')}}"></script>
			<script src="{{asset('ar_js/browser.min.js')}}"></script>
			<script src="{{asset('ar_js/breakpoints.min.js')}}"></script>
			<script src="{{asset('ar_js/util.js')}}"></script>
			<script src="{{asset('ar_js/main.js')}}"></script>

	</body>
</html>
@endsection