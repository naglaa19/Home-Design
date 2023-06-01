@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Virtual Showroom</title>
        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/virtual.css')}}">
    </head>
    <body class="is-preload">

		<!-- Header -->
			<div id="header">
				<h1>Virtual Reality Showroom</h1>
				<p>Virtual Reality (VR) is an innovative technology that allows users to experience <br>three-dimensional computer-generated environments in a fully immersive way.
			</div>

		<!-- Main -->
			<div id="main">

				<header class="major container medium">
					<h2>Why VR used in home design?</h2>
				</header>

				<div class="box alt container">
					<section class="feature left">
						<a href="#" class="image icon solid "><img src="{{asset('images/virtual/ikea-room-plan.jpg')}}" alt="" /></a>
						<div class="content">
							<h3>Importing the model into VR</h3>
							<p>A designer or architect creates a 3D model of the home and The 3D model is then imported into virtual reality software, which allows the user to explore and interact with the model in a 3D environment.</p>
						</div>
					</section>


					<section class="feature right">
						<a href="#" class="image icon solid "><img src="{{asset('images/virtual/VR design.jpg')}}" alt="" /></a>
						<div class="content">
							<h3>Exploring the model</h3>
							<p> The user can walk through the virtual home, examining details such as the layout, materials, and finishes. They can also interact with objects, such as opening doors and drawers, adjusting lighting, and moving furniture.</p>
						</div>
					</section>


					<section class="feature left">
						<a href="#" class="image icon solid "><img src="{{asset('images/virtual/VR-Placing-Furniture.jpg')}}" alt="" /></a>
						<div class="content">
							<h3>Making changes</h3>
							<p>Based on their experience in VR, the user can make changes to the design, such as adjusting the layout or changing materials. The designer or architect can then update the 3D model to reflect these changes, and the process can be repeated until the user is satisfied with the design.</p>
						</div>
					</section>
				</div>

				

				<footer class="major container medium">
					<h3>virtual Realism</h3>
					<p>virtual reality allows customers to better visualize and interact with their home design, providing a more immersive and engaging experience than traditional 2D drawings and renderings.</p>
				</footer>

			</div>

		<!-- Scripts -->
			<script src="{{asset('virtual_js/jquery.min.js')}}"></script>
			<script src="{{asset('virtual_js/browser.min.js')}}"></script>
			<script src="{{asset('virtual_js/breakpoints.min.js')}}"></script>
			<script src="{{asset('virtual_js/util.js')}}"></script>
			<script src="{{asset('virtual_js/main.js')}}"></script>

	</body>
</html>
{{-- content  --}}

@endsection