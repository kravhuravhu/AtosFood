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
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.2/css/bootstrap.min.css'>
    <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.3.1/css/all.css'>

    <!-- Theme Style -->
    <link rel="stylesheet" href="/css/style.css">
    <style>
        /* Style the tab */

    </style>
  <title>Atos Food</title>
</head>
<body>
  <div id="untree_co--overlayer"></div>
    <div class="loader">
      <div class="spinner-border text-primary" role="status">
        <span class="sr-only">Loading...</span>
      </div>
    </div>
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

      <nav class="untree_co--site-nav js-sticky-nav">
        <div class="container d-flex align-items-center">
          <div class="logo-wrap">
            <img src= "images/right.png" alt="logo" height="50px" width="80px">
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
                <a href="itemDetails" class="button" data-toggle="modal" data-target="#cartModal">Cart</a>
            </ul>


            <!-- Mobile Toggle -->
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav>

<!--
=====================================================================
                   Cart Items (Add, Remove and Checkout)
=====================================================================
--->      
<div id="cartModal" class="modal">
    <div class="modal-content">
        <span id="close" class="close">&times;</span>
        <h2>Your Cart</h2>
          <div id="cartItems">
            <!-- Cart items will be added dynamically -->
          </div>
        <a href="#" id="removeAllLink" class="remove-all-link">Clear</a>
          <div id="cartTotal">
            <strong>Total:</strong> R<span id="totalAmount">0.00</span>
          </div>
          <button id="checkoutBtn">Checkout</button>
    </div>
</div> 




<!--
=====================================================================
                   Item Details (Quantity, Add to Cart)
=====================================================================
--->

<section class="shop-single-section">
  <div class="auto-container">
    <div class="shop-single">
        <div class="product-details" id = "product_data">
                        <!--Item Details-->
          <div class="basic-details">
            <div id="item-details-container" class="row clearfix"></div>
          </div>
  </div>

<!--  

==================================================================

                    INPUT GROUP TRY OUT

===================================================================


-->



  <!-- <div class="input-group details mb-3 " style = "width: 130px">
  <div class="input-group-prepend">
    <span class="input-group-text decrement-btn">-</span>
  </div>
  <input type="text" class="form-control text-center input-qty bg-white" disabled value="1">
  <div class="input-group-append">
    <span class="input-group-text increment-btn">+</span>
  </div>
</div> -->
<!-- 


============================================================================================================

/////////////////////////////////////////////////////////////////////////////////////////////////////////// -->

<!-- ================================================================================================== -->


<!--
=====================================================================
          Tab Section (Description, Specification, Review)
=====================================================================
--->

<div class="tab">
  <button class="tablinks-review" onclick="openCity(event, 'Description')" id="defaultOpen">Description</button>
  <button class="tablinks-review" onclick="openCity(event, 'Specification')">Specification</button>
  <button class="tablinks-review" onclick="openCity(event, 'Review')">Review</button>
</div>

<!-- Tab content -->

<div id="Description" class="tabcontent">
<!-- Description in here -->
</div>

<!--Specification Sections-->
<div id="Specification" class="tabcontent">
  
</div>
        
<!--Review Section-->
<div id="Review" class="tabcontent">
  <h2 class="title">Customer Reviews</h2>
    <div class="comments-area">
    <div id="reviews" class="display-reviews">
            <!-- Reviews will be displayed here -->
    </div> 
<!--Comment Box-->  
      <div class="comment-box">
        <div class="comment">
          
        </div>
      </div>
<!-- Comment Form (Ratings Stars)-->
      <div class="shop-comment-form">
        <div class="row-clearfic-review">
            <form id="reviewForm">
              <label class="lbl-review" for="firstName">First Name:</label>
              <input class="inpt-review" type="text" id="firstName" name="firstName" required><br><br>
              
              <label class="lbl-review" for="lastName">Last Name:</label>
              <input class="inpt-review" type="text" id="lastName" name="lastName" required><br><br>

              <label class="lbl-review" for="email">Email Address:</label>
              <input class="inpt-review" type="email" id="email" name="email" required><br><br>

              <label class="lbl-review" for="rating">Rating:</label>
              <div id="rating">
                <span class="star" data-rating="1">&#9733;</span>
                <span class="star" data-rating="2">&#9733;</span>
                <span class="star" data-rating="3">&#9733;</span>
                <span class="star" data-rating="4">&#9733;</span>
                <span class="star" data-rating="5">&#9733;</span>
              </div><br><br>

              <label class="lbl-review" for="comment">Comment:</label><br>
              <textarea id="comment" name="comment" rows="4" cols="50" required></textarea><br><br>

              <button class="button-menu" type="submit">Submit Review</button>
            </form>
        </div>
      </div>
    </div>
</div>   
<!--
=====================================================================
                   Product Suggestion Section
=====================================================================
--->

<section class="similar-products-section">
  <div class="auto-container">
    <!-- Sec Title -->
    <div class="sec-title centered">
      <h2>Similar Products</h2>
    </div>

    <div id="suggested-products-container" class="row clearfix">
      <!-- Products Block -->
    </div>
     
  </div>
</section>

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
      <p>we're more than just a meal; we're a community. At Atos Food, we believe that food has the power to bring people together, and we're committed to creating an inviting atmosphere where you can gather with friends and family to enjoy great food and even better company.</p>
    </div>
    <div class="col-md-8 ml-auto">
      <div class="row">
        <div class="col-md-3">
          <h3>Navigation</h3>
          <ul class="list-unstyled">
            <li><a href="home">Home</a></li>
            <li><a href="dashboard">Menu</a></li>
            <li><a href="gallery">Gallery</a></li>
            <li><a href="about">About Us</a></li>
            <li><a href="contact">Contact</a></li>
          </ul>
        </div>
        <div class="col-md-9 ml-auto">
          <div class="row mb-3">
            <div class="col-md-6">
              <h3>Address</h3>
              <address>300 JANADEL AVENUE,HALFWAY HOUSE Midrand 1685 </address>
            </div>
            <div class="col-md-6">
              <h3>Telephone</h3>
              <p>
                <a href="#">+1 234 5678 910</a>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> 
        <a href="index.html">Atos</a>
        . All Rights Reserved. Design by 
        <a href="#" target="_blank" class="text-primary">Atos</a>
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
        <a href="https://www.instagram.com/Atos/"><span class="icon-instagram"></span></a>
      </li>
      <li>
        <a href="https://www.linkedin.com.company/1259"><span class="icon-linkedin"></span></a>
      </li>
      <li>
        <a href="https://www.youtube.com.user/atos"><span class="icon-youtube"></span></a>
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

<!--
=====================================================================
                   JavaScript File Links
=====================================================================
--->

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
<script>src="/js/vendor/features.js"</script>

<script src="/js/main.js"></script>
<!--<script src ="custom.js"></script>-->


        <script>
            function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
  
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
      tabcontent[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
      tablinks[i].className = tablinks[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
    }
    document.getElementById("defaultOpen").click();
        </script>
        </body>
</html>