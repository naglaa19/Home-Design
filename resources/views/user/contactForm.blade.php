@extends('layouts.layout')
@section('content')

<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <title>Contact us</title>
  <link rel="stylesheet" type="text/css" href="{{asset('css/contact.css')}}">
  {{-- <link rel="stylesheet" type="text/css" href="{{asset('css/category.css')}}"> --}}
  {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" type="text/css" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet"> --}}
</head>
<body>
<div class="back-nav">
  <img  src="{{asset('img/7acf05bde65f33452c0306982de1251e.jpg')}}">
  <div class="back-text">
    <h1 style="color:#112233 ;
  text-align: center; padding-top:50px;">Contact Us</h1>
    <p>Get inTouch</p>
  </div>
</div>
  <div class="headline">
    <h2>Leave your messgae</h2>
  </div>
  <!--contact section start-->
  <div class="contact-section">
    
    <div class="contact-info">
      <div><i class="fas fa-map-marker-alt"></i>Address, City, Country</div>
      <div><i class="fas fa-envelope"></i>contact@email.com</div>
      <div><i class="fas fa-phone"></i>+00 0000 000 000</div>
      <!-- <div><i class="fas fa-clock"></i>Mon - Fri 8:00 AM to 5:00 PM</div> -->
    </div>
    <div class="contact-form">
      <!-- <h2>Contact Us</h2> -->
      <form class="contact"  method="POST" action="{{ route('contact/store') }}"enctype="multipart/form-data">
        @csrf
        <input type="text" name="name" class="text-box" placeholder="Your Name" required>
        <input type="email" name="email" class="text-box" placeholder="Your Email" required>
        <textarea name="message" rows="5" placeholder="Your Message" required></textarea>
        <button type="submit" name="submit" class="send-btn" value="Send">Send</button>
      </form>
    </div>
  </div>
    {{-- <footer class="footer-distributed">

      <div class="footer-left">

        <a class="navbar-brand" href="{{ url('/') }}">
            <img style="width: 190px" src="{{ asset('images/logo/home.png')}}">
        </a> 

        <p class="footer-links">
          <a href="#" class="link-1">Home</a>
          
          <a href="#">Blog</a>
        
          <a href="#">Pricing</a>
        
          <a href="#">About</a>
          
          <a href="#">Faq</a>
          
          <a href="#">Contact</a>
        </p>

        <p class="footer-company-name">Company Name © 2015</p>
      </div>

      <div class="footer-center">

        <div>
          <i class="fa fa-map-marker"></i>
          <p><span>444 S. Cedros Ave</span> Solana Beach, California</p>
        </div>

        <div>
          <i class="fa fa-phone"></i>
          <p>+1.555.555.5555</p>
        </div>

        <div>
          <i class="fa fa-envelope"></i>
          <p><a href="mailto:support@company.com">support@company.com</a></p>
        </div>

      </div>

      <div class="footer-right">

        <p class="footer-company-about">
          <span>About the company</span>
          Lorem ipsum dolor sit amet, consectateur adispicing elit. Fusce euismod convallis velit, eu auctor lacus vehicula sit amet.
        </p>

        <div class="footer-icons">

          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-twitter"></i></a>
          <a href="#"><i class="fa fa-linkedin"></i></a>
          <a href="#"><i class="fa fa-github"></i></a>

        </div>

      </div>

    </footer> --}}
    </body>
</html>

@endsection