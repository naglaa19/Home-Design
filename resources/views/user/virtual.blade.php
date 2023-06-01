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
    <body class="homepage is-preload">
		<div id="page-wrapper">

			<!-- Header -->
				<div id="header-wrapper">
					

					<!-- Hero -->
						<section id="hero" class="container">
							<header>
								<h2>Virtual Reality Showroom</h2>
							</header>
							<p>Virtual Reality (VR) is an innovative technology that allows users to experience three-dimensional computer-generated environments in a fully immersive way.</p>
						</section>

				</div>
			
    <div class="wrapper">
        <section class="container">
            <header class="major">
                <h2>Why VR used in home design?</h2>
                
            </header>
            <div class="row features">
                <section class="col-4 col-12-narrower feature">
                    <div class="image-wrapper first">
                        <a href="#" class="image featured"><img src="{{asset('images/virtual/ikea-room-plan.jpg')}}" alt="" /></a>
                    </div>
                    <h3>Importing the model into VR</h3>
                    <p>A designer or architect creates a 3D model of the home and The 3D model is then imported into virtual reality software, which allows the user to explore and interact with the model in a 3D environment.</p>
                </section>
                <section class="col-4 col-12-narrower feature">
                    <div class="image-wrapper">
                        <a href="#" class="image featured"><img src="{{asset('images/virtual/VR design.jpg')}}" alt="" /></a>
                    </div>
                    <h3>Exploring the model</h3>
                    <p> The user can walk through the virtual home, examining details such as the layout, materials, and finishes. They can also interact with objects, such as opening doors and drawers, adjusting lighting, and moving furniture.</p>
                </section>
                <section class="col-4 col-12-narrower feature">
                    <div class="image-wrapper">
                        <a href="#" class="image featured"><img src="{{asset('images/virtual/VR-Placing-Furniture.jpg')}}" alt="" /></a>
                    </div>
                    <h3>Making changes</h3>
                    <p>Based on their experience in VR, the user can make changes to the design, such as adjusting the layout or changing materials. The designer or architect can then update the 3D model to reflect these changes, and the process can be repeated until the user is satisfied with the design.</p>
                </section>
            </div>

        </section>
    </div>
<!-- Promo -->
<div id="promo-wrapper">
<section id="promo">
<h2>virtual reality allows customers to better visualize and interact with their home design, providing a more immersive and engaging experience than traditional 2D drawings and renderings.</h2>
</section>
</div>
		<!-- Scripts -->
			<script src="{{asset('virtual_js/jquery.min.js')}}"></script>
			<script src="{{asset('virtual_js/browser.min.js')}}"></script>
			<script src="{{asset('virtual_js/breakpoints.min.js')}}"></script>
			<script src="{{asset('virtual_js/util.js')}}"></script>
			<script src="{{asset('virtual_js/main.js')}}"></script>
			<script src="{{asset('virtual_js/jquery.dropotron.min.js')}}"></script>

	</body>
</html>
{{-- content  --}}

@endsection