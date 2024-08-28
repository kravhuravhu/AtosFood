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
<!--
=====================================================================
                   Navigation & Sign Up/Registration
=====================================================================
--->
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



            <!-- Mobile Toggle -->
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav>

      <div class="untree_co--site-main">
        

        <div class="owl-carousel owl-hero">

          <div class="untree_co--site-hero overlay" style="background-image: url('images/bg.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-12">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                  <h1 class="hero-heading">Away from the Hustle and Bustle of City Life </h1>
                  <div class="search-container">
                  <!-- <form id="optionForm">
                    <select class="search-bar" name="selectedOptions[]" id="selectedOptions">
                        <option value="" disabled selected hidden>Enter your Delivery Address</option>
                        <option value="Atos">Atos</option>
                        <option value="Auditorium">Auditorium</option>
                        <option value="Conference Centre">Conference Centre</option>
                        <option value="Gym">Gym</option>
                        <option value="Innomatics">Innomatics</option>
                        <option value="Reception">Reception</option>
                        <option value="Saint-Gobain">Saint-GoBain</option>
                        <option value="Sabric">Sabric</option>
                        <option value="SiemensEnergy">Siemens Energy</option>
                        <option value="SiemensHealth">Siemens Healthineers</option>
                        <option value="SoloPlan">Solo Plan</option> 
                         Add more options as needed --
                    </select>
                    <button class="search-button" type="button" onclick="saveOptions()">Submit</button>
                </form> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="untree_co--site-hero overlay"  style="background-image: url('images/bg.jpg')">
            <div class="container">
              <div class="row align-items-center justify-content-center">
                <div class="col-md-7">
                  <div class="site-hero-contents text-center" data-aos="fade-up">
                    <h1 class="hero-heading">Delivering food at the comfort of your office </h1>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="untree_co--site-section float-left pb-0 featured-rooms">

          <div class="container pt-0 pb-5">
            <div class="row justify-content-center text-center">  
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Our Menu</h3>
              </div>
            </div>
          </div>

          <div class="container-fluid pt-5">
            <div class="suite-wrap overlap-image-1">

              <div class="suite">
                <div class="image-stack">
                  <div class="image-stack-item image-stack-item-top" data-jarallax-element="-50">
                    <div class="overlay"></div>
                    <img src="/images/7.jpg" alt="Image" class="img-fluid pic1">
                  </div>
                  <div class="image-stack-item image-stack-item-bottom">
                    <div class="overlay"></div>
                    <img src="/images/7.jpg" alt="Image" class="img-fluid pic2">
                  </div>
                </div>
              </div> <!-- .suite -->

              <div class="suite-contents" data-jarallax-element="50">
                <h2 class="suite-title">Feed your Cravings</h2>
                <div class="suite-excerpt">
                  <p>With every bite, you'll taste the passion and dedication we put into every dish. Experience the difference at Atos Food - where every meal is a celebration of flavor and fulfillment.</p>
                  <p><a href="register" class="readmore">Order Now</a></p>
                </div>
              </div>
            </div>

            <div class="suite-wrap overlap-image-2">

              <div class="suite">
                <div class="image-stack">
                  <div class="image-stack-item image-stack-item-top">
                    <div class="overlay"></div>
                    <img src="images/3.jpg" alt="Image" class="img-fluid pic1">
                  </div>
                  <div class="image-stack-item image-stack-item-bottom" data-jarallax-element="-50">
                    <div class="overlay"></div>
                    <img src="images/3.jpg" alt="Image" class="img-fluid pic2">
                  </div>
                </div>
              </div>

              <div class="suite-contents" data-jarallax-element="50">
                <h2 class="suite-title">Meals</h2>
                <div class="suite-excerpt pr-5">
                  <p>we're more than just a meal; we're a community.</p>
                  <p><a href="register" class="readmore">Order Now</a></p>
                </div>
              </div>

            </div>

          </div>
        </div>

        <div class="untree_co--site-section">
          <div class="container">
            <div class="container pt-0 pb-5">
            <div class="row justify-content-center text-center">  
              <div class="col-lg-6 section-heading" data-aos="fade-up">
                <h3 class="text-center">Why Choose Us?</h3>
              </div>
            </div>
          </div>
            <div class="row custom-row-02192 align-items-stretch">
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/parking.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Simplified Ordering Process</h3>
                  <p>We understand the complexities of managing orders in a small business. That's why Atos Food App offers a streamlined ordering process, consolidating orders from multiple sources into one easy-to-navigate platform. Say goodbye to confusion and hello to efficiency.</p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/internet.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Culinary Excellence</h3>
                    Our team of talented chefs is passionate about creating culinary masterpieces that tantalize the taste buds. With a dedication to innovation and creativity, we're constantly pushing the boundaries to deliver dishes that are both delicious and unforgettable.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/wifi.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Diverse Menu</h3>
                  <p>Whether you're in the mood for a classic comfort food dish or craving something new and exciting, our diverse menu has something for everyone. From hearty burgers and sandwiches to fresh salads and vegetarian options, we offer a wide range of choices to suit every palate.</p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/elevator.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Exceptional Service</h3>
                  <p> At Atos Food, we believe that great food should be accompanied by great service. Our friendly and attentive staff is here to ensure that your dining experience is nothing short of exceptional. From the moment you walk in the door to the last bite of your meal, we're dedicated to making your visit memorable</p>
                </div>
              </div>
              
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/partners.svg" alt="Image" class="img-fluid">
                  </div>

                  <h3>Community Commitment</h3>
                  <p>We're more than just a restaurant; we're a part of the community. At Atos Food, we're committed to giving back and supporting local initiatives. When you choose us, you're not just supporting a business – you're supporting a community.</p>
                </div>
              </div>
              <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
                <div class="media-29191 text-center h-100">
                  <div class="media-29191-icon">
                    <img src="images/svg/washing-machine.svg" alt="Image" class="img-fluid">
                  </div>
                  <h3>Comfortable Atmosphere</h3>
                  <p>Sit back, relax, and enjoy your meal in our welcoming and comfortable atmosphere. Whether you're dining with friends, family, or flying solo, our cozy restaurant provides the perfect backdrop for a memorable dining experience..</p>                
                </div>
              </div>

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


      </div>
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

    <!-- Search -->
    <div class="search-wrap">
      <a href="#" class="close-search js-search-toggle">
        <span>Close</span>
      </a>
      <div class="container">
        <div class="row justify-content-center align-items-center text-center">
          <div class="col-md-12">
            <form action="#">
              <input type="search" name="s" id="s" placeholder="Type a keyword and hit enter..."  autocomplete="false">
            </form>    
          </div>
        </div>
      </div>
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

   
    <script src="/js/main.js" defer></script>
  </body>
</html>