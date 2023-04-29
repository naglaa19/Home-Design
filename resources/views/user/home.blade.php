@extends('layouts.layout')
@section('content')
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Home</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" type="text/css" href="{{asset('css/home.css')}}">
    </head>
    <body class="antialiased">
        <div class="img_in_main">
            <video autoplay loop muted plays-inline class="backVideo">
              <source src="{{asset("images/home/Twinmotion Isometric interior Diagram animation 4K.mp4")}}" type="video/mp4">
            </video>
           <h1 class="par_center">L<span >A</span> C<span >A</span>S<span >A</span></h1>
        
          </div>
          <button onclick="topFunction()" id="myBtn" title="Top"></button>
        
          <!-- this is 3 contener under mian img -->
         <div class="continer_3">
        
          <div class="continer_3_1">
          <div class="continer_3_1_center">
            <div class="continer_3_1_LeftPart">
              <h1 class="H1ForLeftSide">
                Architecture & Design Projects
              </h1>
              <hr >
              <pre class="PForLeftSideFrist">
Our website provides you with all interior design and 
architecture concepts, as well as styling for commercial
residential, and administrative spaces.
By balancing the art and science of designing an interior space
we deliver the perfect
combination of technical and artistic aspects 
to provide our clients with extreme satisfaction.
              </pre>
        
        
            </div>
            <div class="continer_3_1_RightPart">
            <img src="{{asset("images/home/6838fab18b71020c5cc30461cc4fa71d.jpg")}}">
            </div>
            
          </div>
        
          </div>
        
          <div class="continer_3_2">
            <div class="continer_3_2_center">
              <div class="continer_3_2_LeftPart">
              <div id="loader">
                <div id="shadow"></div>
                <div id="box">
                  <img src="{{asset("images/home/vintage-chair-drawing-9851.png")}}" width="500px" height="500px">
                </div>
        
              </div>
          
              </div>
          
              <div class="continer_3_2_RightPart">
              <h1 class="h1_continer_3_2_RightPart">Why Smart Home?
              </h1>
              <hr class="hr2">
              <pre class="pra_continer_3_2_RightPart">
        With smart home automation system, you can control
        your home and be able to keep all of the technology 
        in your home connected through one interface.
        Smart home system is flexible and adaptable to add 
        new devices and appliances step by step.
        You can maximize your home safety and security, and
        keep an eye on your home wherever you are.
        Moreover, you will enjoy more accessibility to monitor
        your power consumption for each electrical device in your house.
                
              </pre>
              </div>
            </div>
        
          </div>
         
         </div>
         <div class="continer_4">
        <div class="continer_4_left">
        <h1 class="continer_4_h1">Full Scope Of Architecture Design Services</h1>
        <hr class="hr_4 " >
        <pre class="continer_4_p">
Our design services focus on creating functional
interiors that match your preferred interior style.
Every project comes with challenges, so our design
team will approach your project individually with
the utmost attention to detail. We will create a
bespoke solution tailored to your needs and wishes.
        </pre>
        </div>
        <div class="continer_4_right">
         
        <img src="{{asset("images/home/Interior-Design-PNG-Image-File.png")}}" >
        </div>
        
         </div>
         <!-- --------------------------------------------------- -->
         <!-- continer_5  -->
        <div class="continer_5">
          <div class="first_p_5">
            <p >Benefits of la casa app Furniture Solution</p>
          </div >
          <div class="first_collaction">
          <div class="first_collaction_one" >
            <div class="img_back_1">
              <img src="{{asset("images/home/icon1_1.png")}}" width="82%">
            </div>
            <div class="p_in_collaction">
              <h1 >Splendid 3D Demonstration</h1>
              <p>Boost customers' buying confidence with a visual experience of the product from the comfort of their mobile phone with app-less AR. Customers who view products in AR are 3x more likely to buy.</p>
            </div>
           
          </div>
          <div class="first_collaction_two">
            <div class="img_back_2">
              <img src="{{asset("images/home/icon3_1.png")}}" width="82%">
            </div>
            <div class="p_in_collaction">
              <h1 >Complete Shopping Experience
              </h1>
              <p>Reshape the shopping experience with the fully-featured panoramic virtual showroom for a fraction of the cost.
        
              </p>
            </div>
          </div>
          <div class="first_collaction_three">
            <div class="img_back_3">
              <img src="{{asset("images/home/icon2_1.png")}}" width="82%">
            </div>
            <div class="p_in_collaction">
              <h1 >Transforming Photography
              </h1>
              <p>No more real photoshoots; everything is done virtually. Create photos/videos with only a few clicks, perfect for advertising, conceptual products, and more.
        
              </p>
            </div>
          </div>
          </div>
          <p class="p_2_continer_5">Featured Products</p>
        <div class="second_collection">
        <div class="second_collection_1">
          <img src="{{asset("images/home/fea1_1x.png")}}" width="300px" height="200px">
          <h1 class="h1_second_collection">3D Viewer & AR</h1>
          <p>Present your products with 3D model and AR interactions.</p>
          <button class="learn">Learn More</button>
        
        </div>
        <div class="second_collection_2">
          <img src="{{asset("images/home/fea2_1x.png")}}" width="300px" height="200px">
          <h1 class="h1_second_collection">Photo & Video Studio™</h1>
          <p>Create product photos and videos virtually, in unlimited scenes.</p>
          <button class="learn">Learn More</button>
        </div>
        <div class="second_collection_3">
          <img src="{{asset("images/home/fea3_1x.png")}}" width="300px" height="200px">
          <h1 class="h1_second_collection">Virtual Showroom</h1>
          <p>Customizable online showroom supporting system integration.</p>
          <button class="learn">Learn More</button>
        </div>
        <div class="second_collection_4">
          <img src="{{asset("images/home/fea4_1x.png")}}"  width="300px" height="200px">
          <h1 class="h1_second_collection">Inspiration Spaces</h1>
          <p>Parameter-based spaces for inspiration and quick orders.</p>
          <button class="learn">Learn More</button>
        </div>
        </div>
        <div class="third_collection">
        
           <div class="image_slider">
           <img src="{{asset("images/home/4f8443799591c97b327faa7f13eb1df9.jpg")}}" width="470px" style="height: 600px;" >
           <img src="{{asset("images/home/5da519561e7201f442c2238e0d33537c.jpg")}}" width="470px" style="height: 600px;" >
           <img src="{{asset("images/home/15f03689b6833ed599fed68c51c0f562.jpg")}}" width="470px" style="height: 600px;">
           <img src="{{asset("images/home/30ac113c4bbaff6283c92a557211a5d4.jpg")}}" width="470px"  style="height: 600px;">
           </div>
           <div class="image_slider">
            <img src="{{asset("images/home/79e991524a2a5d15180c30441299ad8f.jpg")}}" width="470px" style="height: 600px;">
            <img src="{{asset("images/home/878ccb9e6c6d1eb7d5bb92efc210ad63.jpg")}}" width="470px" style="height: 600px;">
            <img src="{{asset("images/home/354720e7960c899078c3bebef2c808b4.jpg")}}" width="470px" style="height: 600px;">
            <img src="{{asset("images/home/8353130280b5c65696caa4d74ea10b6e.jpg")}}" width="470px"  style="height: 600px;">
           </div>
           <div class="image_slider">
            <img src="{{asset("images/home/feee2ec861fbf492f72cdbd3233e863d.jpg")}}" width="470px"  style="height: 600px;" >
            <img src="{{asset("images/home/ffbcb67948def2e346d3d92ab4c64853.jpg")}}" width="470px" style="height: 600px;" >
            <img src="{{asset("images/home/a01d1ef16e697ed1b6dd29d59d568208.jpg")}}" width="470px" style="height: 600px;" >
            <img src="{{asset("images/home/914a2324b832138e8d021c9a5495011d.jpg")}}" width="470px"  style="height: 600px;">
           </div>
           <div class="image_slider">
            <img src="{{asset("images/home/timerSlider/100cf4ce4f9d605343abe45fea053434.jpg")}}" width="470px"  style="height: 600px;">
            <img src="{{asset("images/home/timerSlider/296a26275905a00675cbb277d5d626ea.jpg")}}" width="470px" style="height: 600px;">
            <img src="{{asset("images/home/timerSlider/670f3f9c80608fc75c5f7e720a7bdeca.jpg")}}" width="470px" style="height: 600px;" >
            <img src="{{asset("images/home/timerSlider/662589d12342f47205744c7738bbf0e6.jpg")}}" width="470px"  style="height: 600px;" >
           </div>
        
        </div>
        <p class="continer_5_slider_p">Last Modern Design</p>
        <div class="continer_5_slider">

<div class="slideshow-container">

  <div class="mySlides fade">
    <div class="numbertext">1 / 9</div>
    <img src="images/home/slider/1.jpg" style="width:100%">
    <div class="text">Caption Text</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">2 / 9</div>
    <img src="images/home/slider/2.jpeg" style="width:100%">
    <div class="text">Caption Two</div>
  </div>
  
  <div class="mySlides fade">
    <div class="numbertext">3 / 9</div>
    <img src="images/home/slider/3.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">4 / 9</div>
    <img src="images/home/slider/4.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">5 / 9</div>
    <img src="images/home/slider/5.jpeg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">6 / 9</div>
    <img src="images/home/slider/6.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">7 / 9</div>
    <img src="images/home/slider/7.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">8 / 9</div>
    <img src="images/home/slider/8.png" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  <div class="mySlides fade">
    <div class="numbertext">9 / 9</div>
    <img src="images/home/slider/9.jpg" style="width:100%">
    <div class="text">Caption Three</div>
  </div>
  
  <a class="prev" onclick="plusSlides(-1)">❮</a>
  <a class="next" onclick="plusSlides(1)">❯</a>
  
  </div>
  <br>
  
  <div style="text-align:center">
    <span class="dot" onclick="currentSlide(1)"></span> 
    <span class="dot" onclick="currentSlide(2)"></span> 
    <span class="dot" onclick="currentSlide(3)"></span> 
    <span class="dot" onclick="currentSlide(4)"></span> 
    <span class="dot" onclick="currentSlide(5)"></span> 
    <span class="dot" onclick="currentSlide(6)"></span> 
    <span class="dot" onclick="currentSlide(7)"></span> 
    <span class="dot" onclick="currentSlide(8)"></span> 
    <span class="dot" onclick="currentSlide(9)"></span> 

  </div>
  

</div>
        <div class="contnier_6">
        
          <img src="{{asset("images/home/slider2/1.png")}}" width="500px">
          <img src="{{asset("images/home/slider2/2.png")}}" width="450px">
          <img src="{{asset("images/home/slider2/3.png")}}" width="450px" >
        
          <div class="rightside_contnier_6"> 
           <p class="hello"> Ciao </p> 
           <hr class="hr_rightside_contnier_6"> 
           <p class="see_more"> How Download LA CASA APP</p>
            <a href="#" class="img_readMore"><img src="{{asset("images/home/images.png")}}" width="100px" height="100px"></a>
          </div>
        
        
        </div>
        
        
        </div>
          
        
          </body>
          <script src="{{asset('js/home.js')}}"></script> 
          <script>
    let slideIndex = 0;
    showSlides();

    function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

    
    function showSlides() {
      let i;
      let slides = document.getElementsByClassName("mySlides");
      let dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 2000); // Change image every 2 seconds
    }
    </script>


        <script>
        let L = 0;
        TimerImage();
        
            function plusSlides(i) {
              TimerImage(L += i);
            }
        
           function currentSlide(i) {
           TimerImage(L = i);
           }
        
            function TimerImage() {
              let i;
              let Image = document.getElementsByClassName("image_slider");
              for (i = 0; i < Image.length; i++) {
                Image[i].style.display = "none";  
              }
              L++;
              if (L > Image.length) {L = 1}    
              Image[L-1].style.display = "block";  
              setTimeout(TimerImage, 5000); // Change image every 2 seconds
            }
        
            </script>
        
    </body>
</html>
@endsection