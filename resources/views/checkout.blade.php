<!doctype html>
<html lang="en">
 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="author" content="Untree.co">
  <link rel="shortcut icon" href="favicon.png">
 
  <meta name="description" content="" />
  <meta name="keywords" content="" />
  <!-- Include flatpickr CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
 
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
  <body class="body-checkout">
 
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
    <x-app-layout>
 
 
    <!-- <div class="untree_co--site-wrap">
 
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
            -- Mobile Toggle -
            <a href="#" class="d-block d-lg-none burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
              <span></span>
            </a>
          </div>
        </div>
      </nav> -->
 
 
      <div class="container-checkout">
    <h1 class="h1-checkout">Checkout</h1>
 
    <!-- Order Summary -->
    <div class="order-summary">
        <h2 class="ord-sum-text">Order Summary</h2>
        <table class="table-summary" id="checkoutItemsTable">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                </tr>
            </thead>
            <tbody id="checkoutItems">
                <!-- Items will be dynamically added here -->
            </tbody>
        </table>
 
        <div class="checkout-total">
            <h3>Total Amount: R<span id="totalAmount">0.00</span></h3>
        </div>
 
 
    </div>
 
   
 
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Retrieve cart items from sessionStorage
        const cartItems = JSON.parse(sessionStorage.getItem('checkoutCartItems')) || [];
 
        // Reference to the checkout items table body
        const checkoutItemsBody = document.getElementById('checkoutItems');
 
        // Populate the checkout items table
        cartItems.forEach(item => {
            const row = document.createElement('tr');
            row.innerHTML = `
                <td><img src="${item.image}" alt="${item.name} Image" class="checkout-item-image"></td>
                <td>${item.name}</td>
                <td>${item.quantity}</td>
                <td>R${item.price}</td>
                <td>R${(item.quantity * item.price).toFixed(2)}</td>
            `;
            checkoutItemsBody.appendChild(row);
        });
 
        // Calculate and display total amount
        const totalPrice = cartItems.reduce((acc, item) => acc + (item.quantity * item.price), 0);
        document.getElementById('totalAmount').textContent = totalPrice.toFixed(2);
    });

    document.addEventListener('DOMContentLoaded', function() {
      const form = document.querySelector('.form-checkout');

      console.log(form);
 
      form.addEventListener('submit', function(event) {
          event.preventDefault();
         
          // Retrieve cart items from sessionStorage
          const cartItems = JSON.parse(sessionStorage.getItem('checkoutCartItems')) || [];
         
          // Collect form data
          const formData = new FormData(form);
          formData.append('cartItems', JSON.stringify(cartItems));
 
          // Send data to submit_order.php using fetch
          fetch('/LoadMenu/fetch_order.php', {
              method: 'POST',
              body: formData
          })
          .then(response => {
              if (!response.ok) {
                  throw new Error('Network response was not ok');
              }
              return response.json();
          })
          .then(data => {
              // Handle success response
              console.log('Order placed successfully:', data);
 
              // Log orderID and customer name to console
              console.log("Order ID:", data.orderID);
              console.log("Customer Name:", data.customerName);
              console.log("Address Name:", data.customerAddress);
              console.log("Items:", data.cartItems);
                       
              // After placing order, update stock
              fetch('/LoadMenu/update_stock.php', {
                  method: 'POST',
                  body: formData
              })
              .then(stockResponse => {
                  if (!stockResponse.ok) {
                      throw new Error('Stock update failed');
                  }
                  return stockResponse.json();
              })
              .then(stockData => {
                  console.log('Stock updated successfully:', stockData);
              })
              .catch(stockError => {
                  console.error('Error updating stock:', stockError);
              });
 
              //localStorage.removeItem('cartItems');
              // thank you for order
              window.location.href = '/completed';
             
          })
          .catch(error => {
              // Handle error scenario
              console.error('Error placing order:', error);
          });
      });
  });
 
   
 
 
    document.addEventListener('DOMContentLoaded', function() {
    // Retrieve cart items from sessionStorage
    const cartItems = JSON.parse(sessionStorage.getItem('checkoutCartItems')) || [];
 
    // Reference to the checkout items table body
    const checkoutItemsBody = document.getElementById('checkoutItems');
 
    // Populate the checkout items table
    cartItems.forEach(item => {
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><img src="${item.image}" alt="${item.name} Image" class="checkout-item-image"></td>
            <td>${item.name}</td>
            <td>${item.quantity}</td>
            <td>R${item.price.toFixed(2)}</td>
            <td>R${(item.quantity * item.price).toFixed(2)}</td>
        `;
        checkoutItemsBody.appendChild(row);
    });
 
    // Calculate and display total amount
    const totalPrice = cartItems.reduce((acc, item) => acc + (item.quantity * item.price), 0);
    document.getElementById('totalAmount').textContent = totalPrice.toFixed(2);
 
    // Function to send checkout items data to server
    function sendOrderToServer() {
        const data = {
            cartItems: cartItems,
            totalPrice: totalPrice.toFixed(2)
            // Add any additional data you need to send to the server
        };
 
        // Send data to server using AJAX
        const xhr = new XMLHttpRequest();
        xhr.open('POST', 'store_cart_itemsphp'); // Replace with your server-side script URL
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.onload = function() {
            if (xhr.status === 200) {
                console.log('Order details successfully saved to database.');
                // Optionally, redirect to a thank you page or handle success
            } else {
                console.error('Error saving order details to database.');
                // Handle error here
            }
        };
        xhr.send(JSON.stringify(data));
    }
 
    // Call the function to send order data when checkout process is completed
    // For example, if you have a checkout button with id 'checkoutBtn'
    document.getElementById('checkoutBtn').addEventListener('click', function() {
        sendOrderToServer();
        // Redirect to the checkout page after saving order details (if needed)
        window.location.href = 'checkout.php'; // Replace with your checkout page URL
    });
});
 
document.addEventListener('DOMContentLoaded', function() {
    flatpickr('#expiry_date', {
        dateFormat: 'Y-m-d',
        minDate: 'today',
        disableMobile: true
    });
});
/***
======================================================================================
                              Terms & Conditions Modal
======================================================================================
***/
document.addEventListener('DOMContentLoaded', function() {
    const termsLink = document.getElementById('terms-link');
    const modal = document.getElementById('modal-checkout');
    const closeModal = document.querySelector('.close-checkout');
 
    // Open modal when Terms and Conditions link is clicked
    termsLink.addEventListener('click', function(event) {
        event.preventDefault();
        modal.style.display = 'block';
    });
 
    // Close modal when close button (x) is clicked
    closeModal.addEventListener('click', function() {
        modal.style.display = 'none';
    });
 
    // Close modal when user clicks outside of modal content
    window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.style.display = 'none';
        }
    });
 
    // Prevent modal from closing if user clicks inside the modal content
    modal.addEventListener('click', function(event) {
        event.stopPropagation();
    });
});
//====================================END=============================================
 
/***
=======================================================================================
                                CVV Data input validation
=======================================================================================
***/
       // Function to validate each form field in real-time
       function validateField(fieldId, regex, errorMessage) {
        var field = document.getElementById(fieldId);
        var errorField = document.getElementById(fieldId + 'Error');
 
        if (!regex.test(field.value)) {
            field.classList.add('invalid');
            errorField.textContent = errorMessage;
            return false;
        } else {
            field.classList.remove('invalid');
            errorField.textContent = '';
            return true;
        }
    }
 
    // Function to handle dynamic type validation based on input events
    function handleInputValidation() {
        var nameRegex = /^[A-Za-z ]+$/;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var phoneRegex = /^\d{10}$/;
        var cardNumberRegex = /^\d{16}$/;
        var expiryDateRegex = /^\d{2}\/\d{2}$/;
        var cvvRegex = /^\d{3}$/;
 
        validateField('name', nameRegex, 'Name should contain only letters and spaces.');
        validateField('email', emailRegex, 'Please enter a valid email address.');
        validateField('phone', phoneRegex, 'Phone number should be 10 digits.');
        validateField('card_number', cardNumberRegex, 'Card number should be 16 digits.');
        validateField('expiry_date', expiryDateRegex, 'Expiry date should be in MM/YY format.');
        validateField('cvv', cvvRegex, 'CVV should be a 3-digit number.');
    }
 
    // Enable/disable checkout button based on form validity
    var form = document.querySelector('.form-checkout');
    var checkoutButton = document.getElementById('checkoutButton');
 
    form.addEventListener('input', function(event) {
        handleInputValidation();
 
        if (form.checkValidity()) {
            checkoutButton.removeAttribute('disabled');
        } else {
            checkoutButton.setAttribute('disabled', 'true');
        }
    });
</script>
 
<style>
    /* Adjust image size in the checkout summary table */
    .checkout-item-image {
        max-width: 50px; /* Adjust the max-width as per your design */
        height: auto;
    }
        /* Adjust image size in the checkout summary table */
        .checkout-item-image {
        max-width: 50px; /* Adjust the max-width as per your design */
        height: auto;
    }
 
    .input-checkout {
  padding: 8px;
  border: 1px solid #ccc;
  border-radius: 4px;
  font-size: 14px;
}
 
/* Modal styles */
#modal-checkout {
  display: none; /* Hide the modal by default */
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
 
  background-color: rgba(0,0,0,0.4); /* Black background with opacity */
}
 
 
/* Modal content */
.modal-content {
  background-color: #fefefe;
  margin: 15% auto; /* 15% from the top and centered */
  padding: 20px;
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
  max-height: 50%; /* Limit height of the modal */
  overflow-y: auto; /* Enable vertical scrolling */
}
 
/* Close button */
.close-checkout {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 24px;
    font-weight: bold;
    cursor: pointer;
}
 
/* Terms link styling */
.terms a {
    color: #007bff; /* Bootstrap's primary link color */
    text-decoration: none;
    cursor: pointer;
}
 
.terms a:hover {
    text-decoration: underline;
}
 
.modal-content, .terms-heading {
  text-align : centre;
}
 
</style>
 
 
<!-- Customer Information -->
<div class="customer-info">
    <h2 class="h2-checkout">Customer Information</h2>
    <!--<form class="form-checkout" action="submit_order.php" method="POST" onsubmit="return validateForm()">-->
    <form class="form-checkout" method="POST">
        <label class="label-checkout" for="name">Name</label>
        <input class="input-checkout" type="text" id="name" name="name" minlength="1" maxlength="30" pattern="[A-Za-z ]+" title="Name should contain only letters and spaces" required>
        <div id="nameError" class="error-message"></div>
 
        <label class="label-checkout" for="email">Email</label>
        <input class="input-checkout" type="email" id="email" name="email" maxlength="30" required>
        <div id="emailError" class="error-message"></div>
 
        <label class="label-checkout" for="selectedOptions">Deliver To</label>
        <select id="selectedOptions" name="selectedOptions" required>
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
            <!-- Add more options as needed -->
        </select>
        <div id="selectedOptionsError" class="error-message"></div>

        <label class="label-checkout" for="phone">Phone</label>
        <input class="input-checkout" type="tel" id="phone" name="phone" maxlength="10" pattern="[0-9]{10}" title="Phone number should be 10 digits" required>
        <div id="phoneError" class="error-message"></div>
 
        <label class="label-checkout" for="payment">Payment Method</label>
        <select id="payment" name="payment" required>
            <option value="">Select Payment Method</option>
            <option value="credit_card">Credit Card</option>
            <option value="paypal">Debit</option>
        </select>
        <div id="paymentError" class="error-message"></div>
 
        <label class="label-checkout" for="card_number">Credit Card Number</label>
        <input class="input-checkout" type="text" id="card_number" name="card_number" pattern="[0-9]{16}" maxlength="16"title="Card number should be 16 digits" required>
        <div id="cardNumberError" class="error-message"></div>
 
      <div class="label-div">
        <div>
          <label class="label-checkout" for="expiry_date">Expiry Date</label>
          <input class="input-date" type="text" id="expiry_date" name="expiry_date" pattern="\d{2}/\d{2}" title="Format: MM/YY" required>
          <div id="expiryDateError" class="error-message"></div>
        </div>
 
        <div>
          <label class="label-checkout" for="cvv">CVV</label>
          <input class="input-cvv" type="text" id="cvv" name="cvv" pattern="[0-9]{3}"maxlength="3" title="CVV should be a 3-digit number" required>
          <div id="cvvError" class="error-message"></div>
        </div>
      </div>
 
        <div class="terms">
            <p class="terms-label">By checking out, you agree to our <a href="#" id="terms-link">Terms and Conditions</a>.</p>
        </div>
 
        <button class="button-checkout" type="submit" id="checkoutButton" >Place Order</button>
    </form>
</div>
 
 
 <!--
========================================================================
                        Modal for Terms and Conditions
========================================================================
 -->
  <!-- Modal -->
  <div id="modal-checkout" class="modal">
                <div class="modal-content">
                  <span class="close-checkout">&times;</span>
                  <h1 class="tC-heading">Terms and Conditions</h1>
                 
                  <h1 class="tC-sub-heading">Ordering Process</h1>
                 
                  <p>
                    <h5>
                  Users may place orders through our mobile application or website.
                  Orders are processed based on availability and restaurant operating hours.
                    </h5>
                  </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Payment</h1>
                  <p>
                  <h5>
                  Payment for orders can be made via credit card, debit card, or other accepted methods specified at checkout.
                  All payments are processed securely through our payment gateway.
</h5>  
                </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Delivery</h1>
                  <p>
                  <h5>
                  Delivery times are estimated and may vary based on traffic, weather, and restaurant preparation time.
                  Users must provide accurate delivery information including address and contact details.
</h5>  
                </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Cancellation and Refunds</h1>
                  <p>
                  <h5>
                  Orders can be canceled before they are processed by contacting customer support.
                  Refunds for canceled orders are subject to our refund policy and may take a few business days to process.
</h5>
                </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Quality and Satisfaction</h1>
                  <p>
                  <h5>
                  We strive to ensure food quality and customer satisfaction. Please contact us immediately if you encounter any issues with your order.
</h5>  
                </p>  
                  <br></br>
                  <h1 class="tC-sub-heading">User Responsibilities</h1>
                  <p>
                  <h5>
                  Users are responsible for maintaining the confidentiality of their account credentials.
                  Users must provide accurate and up-to-date information when placing orders.
</h5>  
                </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Privacy</h1>
                  <p>
                  <h5>
                  We respect user privacy and handle personal information in accordance with our Privacy Policy.
                  User data is used solely for order processing and improving our services.
</h5>  
                </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Changes to Terms</h1>
                  <p>
                  <h5>
                  We reserve the right to update these terms and conditions at any time. Users will be notified of any changes via email or app notification.
</h5>  
                </p>
                  <br></br>
                  <h1 class="tC-sub-heading">Contact Us</h1>
                  <p>
                  <h5>
                  For questions or concerns regarding these terms and conditions, please contact our customer support team.
</h5>  
                </p>
                </div>
              </div>
 
           </form>
    </div>
</div>
 
</div>
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
        Copyright &copy;<script>document.write(new Date().getFullYear());</script> <a href="index.html">Atos</a>. All Rights Reserved. Design by <a href="#" target="_blank" class="text-primary">Atos</a>
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
 
 
<!-- Include flatpickr JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
 
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
<script>
        document.addEventListener('DOMContentLoaded', function() {
            // Retrieve selectedOptions from localStorage
            var selectedOptionsJSON = localStorage.getItem('selectedOptions');
           
            if (selectedOptionsJSON) {
                var selectedOptions = JSON.parse(selectedOptionsJSON);
               
                // Display selected options in a <textarea>
                var selectedOptionsTextarea = document.getElementById('selectedOptionsDisplay');
                selectedOptionsTextarea.textContent = selectedOptions.join('\n');
            } else {
                // Handle case where no options were previously selected
                var selectedOptionsTextarea = document.getElementById('selectedOptionsDisplay');
                selectedOptionsTextarea.textContent = 'No options selected.';
            }
        });
  </script>
<script src="/js/main.js"></script>
</body>
</html>
</x-app-layout>