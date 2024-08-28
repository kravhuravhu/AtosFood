<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">

  <meta name="description" content="" />
  <meta name="keywords" content="" />

    <link href="https://fonts.googleapis.com/css?family=Cormorant+Garamond:400,500i,700|Roboto:300,400,500,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="/css/vendor/icomoon/style.css">
    <link rel="stylesheet" href="/css/vendor/owl.carousel.min.css">
    <link rel="stylesheet" href="/css/vendor/aos.css">
    <link rel="stylesheet" href="/css/vendor/animate.min.css">
    <link rel="stylesheet" href="/css/vendor/bootstrap.css">

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/style.css">

    <title>Atos Food</title>
  </head>
  <body>

  <div id="untree_co--overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <nav class="untree_co--site-mobile-menu">
      <div class="close-wrap d-flex">
        <a href="#" class="d-flex ml-auto js-menu-toggle">
          <span class="close-label">Close</span>
          <div class="close-times">
            <span class="bar1"></span>
            <span class="bar2"></span>
          </div>
        </a>
      </div>
      <div class="site-mobile-inner"></div>
    </nav>
    <div class="untree_co--site-wrap">
  @auth
    <!-- User is authenticated, so display only the application layout -->
    <x-app-layout></x-app-layout>
  @else
    <!-- User is not authenticated, so display the navigation and login/signup buttons -->
    <nav class="untree_co--site-nav js-sticky-nav">
      <div class="container d-flex align-items-center">
        <div class="logo-wrap">
          <img src="images/right.png" alt="logo" height="70px" width="70px">
        </div>
        <div class="site-nav-ul-wrap text-center d-none d-lg-block">
          <ul class="site-nav-ul js-clone-nav">
            <li><a href="home">Home</a></li>
            <li><a href="dashboard">Menu</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>
        <div class="icons-wrap text-md-right">
          <a href="{{ route('login') }}" class="button">Login</a>
          <a href="{{ route('register') }}" class="button">Sign Up</a>
        </div>
      </div>
    </nav>
  @endauth
</div>


    <!-- <div class="untree_co--site-wrap"> -->
<!-- 
      <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
          <div class="logo-wrap">
          <img src= "images/right.png" alt="logo" height="50px" width="70px">
          </div>
          <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
              <li><a href="home">Home</a></li>
              <li class="has-children"><a href="dashboard">Menu</a></li>
              <li  class="active"><a href="gallery">Gallery</a></li>
              <li><a href="about">About Us</a></li>
              <li><a href="contact">Contact</a></li>
            </ul>
          </div>
          <div class="icons-wrap text-md-right">

            <ul class="icons-top d-none d-lg-block">
             
            </ul>


            Mobile Toggle -
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav>  -->

      <main class="untree_co--site-main">
    
              <div class="col-3 relative"  data-aos="fade-up" data-aos-delay="100">

                <div class="owl-carousel owl-gallery-small">
                  <div class="slide-thumb bg-image" style="background-image: url('images/food5.jpg')"><a href="#"></a></div>
                  <div class="slide-thumb bg-image" style="background-image: url('images/food5.jpg')"><a href="#"></a></div>
                  <div class="slide-thumb bg-image" style="background-image: url('images/food5.jpg')"><a href="#"></a></div>
                  <div class="slide-thumb bg-image" style="background-image: url('images/food5.jpg')"><a href="#"></a></div>
                </div>

              </div>
            </div>
          </div>

        </div>

        <div class="untree_co--site-section">
          <div class="container">
            <div class="row justify-content-center text-center pt-0 pb-5">  
              <div class="col-lg-4 section-heading" data-aos="fade-up">
                <h3 class="text-center">Our Galleries</h3>
              </div>
            </div>
            <div class="row gutter-2" id="gutter_2">
              <!-- Images containers -->
            </div>
          </div>
        </div>

        
        

    
        <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a href="tel://+123456789012">+27 11 895 2080</a></h3>
              </div>
            </div>
          </div>
        </div>

      </main>
<!--
=====================================================================
                   Footer (About US, Social Media Details)
=====================================================================
---> 
<footer class="untree_co--site-footer">

<div class="container">
  <div class="row">
    <div class="col-md-4 pr-md-5">
      <h3>About Us</h3>
      <p>At Atos Food, we passionately believe in the ability of food to bring people together. Our mission is to provide a welcoming environment where friends and families can gather to enjoy not only delicious food but also each other's company. Join us in creating memorable moments around the table, where great meals meet even greater connections.</p>
    </div>
    <div class="col-md-8 ml-auto">
      <div class="row">
        <div class="col-md-3">
          <h3>Navigation</h3>
          <ul class="list-unstyled">
            <li><a href="home">Home</a></li>
            <li><a href="menu">Menu</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-9 ml-auto">
          <div class="row mb-3">
            <div class="col-md-6">
              <h3>Address</h3>
              <address>300 JANADEL AVENUE,HALFWAY HOUSE Midrand 1686 </address>
            </div>
            <div class="col-md-6">
              <h3>Telephone</h3>
              <p>
                <a href="#">+27 11 895 2080</a>
              </p>
            </div>
          </div>

        </div>
        
      </div>
    </div>
  </div>
  <div class="row mt-5 pt-5 align-items-center">
    <div class="col-md-6 text-md-left">
      <p>
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="https://atos.net/en/south-africa">Atos</a>. All Rights Reserved. Designed by the Interns of <a href="https://atos.net/en/south-africa" style="color: blue;">Atos</a>.
      </p>
    <!-- Link back to Untree.co can't be removed. Template is licensed under CC BY 3.0. If you purchased a license you can remove this. -->
    </div>
    <div class="col-md-6 text-md-right">
      <ul class="icons-top icons-dark">
      <li>
<a href="https://www.facebook.com/Atos/"><span class="icon-facebook"></span></a>
</li>
<li>
<a href="https://www.twitter.com/Atos/"><span class="icon-twitter"></span></a>
</li>
<li>
<a href="https://www.instagram.com/"><span class="icon-instagram"></span></a>
</li>
<li>
<a href="https://www.linkedin.com/company/atos"><span class="icon-linkedin"></span></a>
</li>
<li>
<a href="https://www.youtube.com/@Atos/"><span class="icon-youtube"></span></a>
</li>
    </ul>

    </div>
  </div>
</div>
</footer>
</div>


  <script src="/js/vendor/jquery-3.3.1.min.js"></script>
    <script src="/js/vendor/popper.min.js"></script>
    <script src="/js/vendor/bootstrap.min.js"></script>

    <script src="/js/vendor/owl.carousel.min.js"></script>
    
    <script src="/js/vendor/jarallax.min.js"></script>
    <script src="/js/vendor/jarallax-element.min.js"></script>
    <script sr c="/build/assetsjs/vendor/ofi.min.js"></script>

    <script src="/js/vendor/aos.js"></script>

    <script src="/js/vendor/jquery.lettering.js"></script>
    <script src="/js/vendor/jquery.sticky.js"></script>

    <script src="/js/vendor/TweenMax.min.js"></script>
    <script src="/js/vendor/ScrollMagic.min.js"></script>
    <script src="/js/vendor/scrollmagic.animation.gsap.min.js"></script>
    <script src="/js/vendor/debug.addIndicators.min.js"></script>


    <script src="/js/main.js"></script>
  </body>
</html>