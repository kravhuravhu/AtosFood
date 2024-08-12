
<!DOCTYPE html>
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
  <?php if (isset($component)) { $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da = $component; } ?>
<?php $component = App\View\Components\AppLayout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('app-layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\AppLayout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

<!-- 
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

      <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
          <div class="logo-wrap">
          <img src= "images/right.png" alt="logo" height="50px" width="70px">
          </div>
          <div class="site-nav-ul-wrap text-center d-none d-lg-block">
            <ul class="site-nav-ul js-clone-nav">
              <li><a href="home">Home</a></li>
              <li class="has-children">
                <a href="menu">Menu</a>
                <ul class="dropdown">
                  <li>
                    <a href="menu">Breakfast</a>
                  </li>
                  <li>
                    <a href="menu">Lunch</a>
                  </li>
                  <li>
                    <a href="menu">Snacks & Drinks</a>
                  </li>
                  <li>
                    <a href="menu">Dessert</a>
                  </li>
                </ul>
              </li>
              <li><a href="gallery">Gallery</a></li>
              <li><a href="about">About Us</a></li>
              <li class="active"><a href="contact">Contact</a></li>
            </ul>
          </div>
          <div class="icons-wrap text-md-right">

            <ul class="icons-top d-none d-lg-block">
              <li class="mr-4">             
                -
                <a href="#" class="js-search-toggle"><span class="icon-search2"></span> --
                <li>
                 <a href="<?php echo e(route('login')); ?>" class="button">Login</a>
                  <a href="<?php echo e(route('register')); ?>" class="button">SignUp</a>
                  </li>
              </li>
             
            </ul>


             Mobile Toggle -
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav> -->
      

      <main class="untree_co--site-main">
        

        <div class="untree_co--site-hero inner-page bg-light" style="background-color: #fff;">
          <div class="container">
            <div class="row align-items-center">
              <div class="col-md-9">
                <div class="site-hero-contents" data-aos="fade-up">
                  <h1 class="hero-heading">Need Help?</h1>
                  <div class="sub-text w-75">
                    <p>If you need help with an order, payment, delievry or your account, you can find the information below. If you have any special requests, feel free to fill in the contact form.</p>
                  
<br>
<button class="accordion">Help with an Order</button>
<div class="panel">
    <p><strong>Manage Your Order:</strong></p>
   <p> You can edit your order, remove items, or add items to your order by clicking <a href="http://127.0.0.1:8000/itemDetails" style="color: blue;">click here.</a>
</div>

<button class="accordion">Account</button>
<div class="panel">
    <p><strong>Unable to Sign In?</strong></p>
    <ul>
        <li>If you can't sign in to your account, <a href="http://127.0.0.1:8000/profile" style="color: blue;">click here</a> to reset your password.</li>
    </ul>
    <p>If you want to update your profile information, please <a href="http://127.0.0.1:8000/profile" style="color: blue;">click here.</a></p>
</div>

<button class="accordion">Payment and Delivery</button>
<div class="panel">
    <p>Please <a href="http://127.0.0.1:8000/checkout" style="color: blue;">click here</a> to add your card details and delievry address.</p>
    
</div>

<button class="accordion">Placing an order</button>
<div class="panel">
    <p>If you need help placing an order, please <a href="http://127.0.0.1:8000/dashboard" style="color: blue;">click here.</a></p>
    
</div>

      
                  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="untree_co--site-section">
        <div class="container">
            <div class="row">
                <div class="col-12" data-aos="fade-up">
                    <h2 class="display-4 mb-5">Contact Us</h2>
                </div>
                <div class="col-md-6 mb-5 mb-md-0" data-aos="fade-up" data-aos-delay="100">
                    <form action="connection" method="post">
                      <?php echo csrf_field(); ?>
                        <div class="form-group">
                            <label for="name">Your Name *</label>
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Your Email *</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" class="form-control" id="subject">
                        </div>
                        <div class="form-group">
                            <label for="message">Message *</label>
                            <textarea name="message" class="form-control" id="message" cols="30" rows="10" required></textarea>
                        </div>
                        <div class="form-group">
                            <input type="submit" value="Send" class="btn btn-black px-5 text-white">
                        </div>
                    </form>
                </div>
                <div class="col-md-4 ml-auto" data-aos="fade-up" data-aos-delay="200">
                    <div class="media-29190">
                        <span class="label">Email</span>
                        <p><a href="#">info@atosfood.net</a></p>
                    </div>
                    <div class="media-29190">
                        <span class="label">Phone</span>
                        <p><a href="#">+27 11 895 2080</a></p>
                    </div>
                    <div class="media-29190">
                        <span class="label">Address</span>
                        <p>300 JANADEL STREET, HALFWAY HOUSE Midrand 1686</p>
                    </div>
                    <div class="media-29190">
                        <span class="label">Social</span>
                        <ul class="icons-top icons-dark">
                            <li><a href="https://www.facebook.com/Atos/"><span class="icon-facebook"></span></a></li>
                            <li><a href="https://www.twitter.com/Atos/"><span class="icon-twitter"></span></a></li>
                            <li><a href="https://www.instagram.com/"><span class="icon-instagram"></span></a></li>
                            <li><a href="https://www.linkedin.com/company/atos"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
        <div class="untree_co--site-section py-5 bg-body-darker cta">
          <div class="container">
            <div class="row">
              <div class="col-12 text-center">
                <h3 class="m-0 p-0">If you have any special requests, please feel free to call us. <a href="tel://+27 11 895 2080">+27 11 895 2080</a></h3>
              </div>
            </div>
          </div>
        </div>

      </main>






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
<?php 

// $error = '';
// try {
//     include 'http://localhost/Tuesday/resources/views/connection.php';
// } catch (Exception $e) {
//     $error = $e->getMessage();
// }
// if (!empty($error)) {
//     echo "Error including connection.php: $error";
// }

?>
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
<script src="/js/needHelp.js"></script>

<script src="js/main.js"></script>
</body>
</html>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da)): ?>
<?php $component = $__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da; ?>
<?php unset($__componentOriginal8e2ce59650f81721f93fef32250174d77c3531da); ?>
<?php endif; ?><?php /**PATH C:\xampp\htdocs\Wednesday\resources\views/contact.blade.php ENDPATH**/ ?>