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


    <body class="is-preload">

		<!-- Page Wrapper -->
			<div id="page-wrapper">
				<!-- Banner -->
					<section id="banner">
						<div class="inner">
							<h2>Inspiration Spaces</h2>
						</div>
					</section>

				<!-- Wrapper -->
					<section id="wrapper">

						<!-- One -->
							<section id="one" class="wrapper spotlight style1">
								<div class="inner">
									<a href="#" class="image"><img src="{{asset('images/inspiration/pic12.jpg')}}" alt="" /></a>
									<div class="content">
										<h2 class="major">kitchens</h2>
										<p>Create a stylish kitchen island with space for sitting and socialising with METOD cabinets. They come in different depths so you can customise your own dream kitchen island.</p>
									</div>
								</div>
							</section>

						<!-- Two -->
							<section id="two" class="wrapper alt spotlight style2">
								<div class="inner">
									<a href="#" class="image"><img src="{{asset('images/inspiration/pic11.jpg')}}" alt="" /></a>
									<div class="content">
										<h2 class="major">Bedrooms</h2>
										<p>Style your bedroom with items that provide relaxation. Choose a bed that help you get fantastical dreams. To complete the beautiful room of your dreams and fit your life into it, add a matching commodes, dresser, wardrobe and nightstand.</p>
									</div>
								</div>
							</section>

						<!-- Three -->
							<section id="three" class="wrapper spotlight style3">
								<div class="inner">
									<a href="#" class="image"><img src="{{asset('images/inspiration/pic10.jpg')}}" alt="" /></a>
									<div class="content">
										<h2 class="major">Living Rooms</h2>
										<p>Are you starting afresh in a new house? Perhaps you’re preparing for a total house renovation? Finding new pieces for your house is exciting in any case! Choose from our wide selection of designs to enhance existing décor or entirely transform your living area.</p>
									</div>
								</div>
							</section>

						<!-- Four -->
							<section id="four" class="wrapper alt style1">
								<div class="inner">
									<h2 class="major-header">Inspiration Furniture & More Lighting Units & Home Décor</h2>
									<p class="major-header">Explore a variety of luxurious home décor designs on our website.  You may get modern, classic, and contemporary styles . In addition to styles from other countries. The cottage, seaside, country, villa, and manor styles are just a few examples of styles that represent particular house architecture. You’ll find everything you’re looking for.</p>
									<section class="features">
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic8.webp')}}" alt="" /></a>
											<h3 class="major">Home Accessories</h3>
										</article>
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic7.webp')}}" alt="" /></a>
											<h3 class="major">Wall Decor</h3>
										</article>
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic5.webp')}}" alt="" /></a>
											<h3 class="major">Lighting</h3>
										</article>
										<article>
											<a href="#" class="image" id="zoom-in"><img src="{{asset('images/inspiration/pic6.webp')}}" alt="" /></a>
											<h3 class="major">Mirrors</h3>
										</article>
									</section>
								</div>
							</section>

					</section>

			</div>

		<!-- Scripts -->
			<script src="{{asset('inspiration_js/jquery.min.js')}}"></script>
			<script src="{{asset('inspiration_js/jquery.scrollex.min.js')}}"></script>
			<script src="{{asset('inspiration_js/browser.min.js')}}"></script>
			<script src="{{asset('inspiration_js/breakpoints.min.js')}}"></script>
			<script src="{{asset('inspiration_js/util.js')}}"></script>
			<script src="{{asset('inspiration_js/main.js')}}"></script>

	</body>
</html>


@endsection