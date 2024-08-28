setTimeout(function() {

  AOS.init({
    duration: 800,
    easing: 'ease',
    once: false
  });
 
 }, 800 );
 
 $(function() {
 
   'use strict';
 
   $(".loader").delay(700).fadeOut("slow");
   $("#untree_co--overlayer").delay(700).fadeOut("slow");	
 
 
 
   var jarallaxPlugin = function() {
     objectFitImages();
     jarallax(document.querySelectorAll('.jarallax'));
     jarallax(document.querySelectorAll('.jarallax-keep-img'), {
       keepImg: true,
     });
   };
   // jarallaxPlugin();
 
   var letteringPlugin = function() {
     $('.hero-heading').lettering('words');
     setTimeout(function() {
       $('.hero-heading > span > span').lettering('letters');
     }, 200)
   };
   letteringPlugin();
 
   var searchToggle = function() {
     $('.js-search-toggle').on('click', function(e) {
       e.preventDefault();
       if ( $('.search-wrap').hasClass('active') ) {
         $('.search-wrap').removeClass('active')
       } else {
         $('.search-wrap').addClass('active')
         setTimeout(function() {
           $('#s').focus();
         }, 50);
       }
 
       
 
     });
   };
   searchToggle();
 
 
   var siteMenuClone = function() {
 
     $('.js-clone-nav').each(function() {
       var $this = $(this);
       $this.clone().attr('class', 'site-nav-wrap').appendTo('.site-mobile-inner');
     });
 
 
     setTimeout(function() {
       
       var counter = 0;
       $('.untree_co--site-mobile-menu .has-children').each(function(){
         var $this = $(this);
         
         $this.prepend('<span class="arrow-collapse collapsed">');
 
         $this.find('.arrow-collapse').attr({
           'data-toggle' : 'collapse',
           'data-target' : '#collapseItem' + counter,
         });
 
         $this.find('> ul').attr({
           'class' : 'collapse',
           'id' : 'collapseItem' + counter,
         });
 
         counter++;
 
       });
 
     }, 1000);
 
     $('body').on('click', '.arrow-collapse', function(e) {
       var $this = $(this);
       if ( $this.closest('li').find('.collapse').hasClass('show') ) {
         $this.removeClass('active');
       } else {
         $this.addClass('active');
       }
       e.preventDefault();  
       
     });
 
     $(window).resize(function() {
       var $this = $(this),
         w = $this.width();
 
       if ( w > 768 ) {
         if ( $('body').hasClass('offcanvas') ) {
           $('body').removeClass('offcanvas');
         }
       }
     })
 
     // $('body').on('click', '.js-menu-toggle', function(e) {
     // 	var $this = $(this);
     // 	e.preventDefault();
 
     // 	if ( $('body').hasClass('offcanvas') ) {
     // 		$('body').removeClass('offcanvas');
     // 		$this.removeClass('active');
     // 	} else {
     // 		$('body').addClass('offcanvas');
     // 		$this.addClass('active');
     // 	}
     // }) 
 
     // // click outisde offcanvas
     // $(document).mouseup(function(e) {
    //    var container = $(".untree_co--site-mobile-menu");
    //    if (!container.is(e.target) && container.has(e.target).length === 0) {
    //      if ( $('body').hasClass('offcanvas') ) {
     // 			$('body').removeClass('offcanvas');
     // 		}
    //    }
     // });
   }; 
   siteMenuClone();
 
 
   
   
 
   var MobileToggleClick = function() {
     $('.js-menu-toggle').click(function(e) {
 
       // alert();
       e.preventDefault();
       // var $this = $(this);
 
       if ( $('body').hasClass('offcanvas') ) {
         $('body').removeClass('offcanvas');
         $('.js-menu-toggle').removeClass('active');
       } else {
         $('body').addClass('offcanvas');	
         $('.js-menu-toggle').addClass('active');
       }
 
 
     });
 
     // click outisde offcanvas
     $(document).mouseup(function(e) {
       var container = $(".untree_co--site-mobile-menu");
       if (!container.is(e.target) && container.has(e.target).length === 0) {
         if ( $('body').hasClass('offcanvas') ) {
           $('body').removeClass('offcanvas');
           $('body').find('.js-menu-toggle').removeClass('active');
         }
       }
     }); 
   };
   MobileToggleClick();
 
   var swiperPlugin = function() {
     var swiper = new Swiper('.swiper-container', {
       slidesPerView: 'auto',
       spaceBetween: 10,
       items: 2,
       pagination: {
         el: '.swiper-pagination',
         clickable: true,
       },
     });
   };
   // swiperPlugin();
   
   var roomAnimateAsymmetry = function() {
 
     $(".suite-title").lettering('words');
 
     var controller = new ScrollMagic.Controller();
 
     $('.suite-wrap').each(function(){
 
       var pic1 = $(this).find('.pic1'),
         pic2 = $(this).find('.pic2'),
         excerpt = $(this).find('.suite-excerpt'),
         overlay = $(this).find('.overlay'),
         words = $(this).find('.suite-title > span > span');
 
 
     var tl = new TimelineMax();
 
     tl
       .fromTo(overlay, 2, { skewX: 7 }, { skewX:0, xPercent: 100, transformOrigin: "0% 100%", ease:Expo.easeInOut }, '-=2')
       .fromTo([pic1, pic2], 2, { scale: 1.5 }, { scale: 1.0, ease:Expo.easeInOut }, '-=2')
       .staggerTo(words, 2, { y: 0, ease:Expo.easeInOut }, 0.1, '-=2' )
       .fromTo(excerpt, 2, { opacity: 0, y: 50, autoAlpha: 0 }, { opacity: 1, autoAlpha: 1, y: 0, ease:Expo.easeOut }, '-=1')
       
 
     
 
     // Scene 1
 
     var scene1 = new ScrollMagic.Scene({
       triggerElement: this,
       // duration: "100%",
       duration: "0%",
       reverse: false,
       offset: "-200%",
       // triggerHook: 0,
     })
 
     .setTween(tl)
     // .addIndicators({
     // 	name: 'reveal',
     // 	colorTrigger: 'black',
     // 	indent: 0,
     // 	colorStart: 'green',
 
     // })
     .addTo(controller);
 
 
     })
   };
   roomAnimateAsymmetry();
 
   var roomAnimate = function() {
     // $(".suite-title").lettering('words');
     var controller = new ScrollMagic.Controller();
     $(".room-animate .heading").lettering('words');
 
     $('.room-animate').each(function() {
       var $this = $(this);
 
       var	bgImage = $this.find('.bg-image'),
         overlay = $this.find('.overlay'),
         words = $this.find('.heading span span'),
         excerpt = $this.find('.room-exerpt');
 
       var tl = new TimelineMax();
 
       tl
         .set(bgImage, { scale: '1.2' })
         .to(overlay, 5, { height: '100%', ease: Power4.easeOut } )
         .to(bgImage, 2, { scale: '1.0', ease: Power4.easeInOut }, '-=5' )
         .staggerTo(words, 2, { y: 0, ease:Expo.easeInOut }, 0.1, '-=4.5' )
 
         .fromTo(excerpt, 2, { autoAlpha: 0, y: 100 }, {autoAlpha: 1, y: 0, ease: Power4.easeInOut }, '-=4' )
         
 
 
       var scene1 = new ScrollMagic.Scene({
         triggerElement: this,
         // duration: "100%",
         duration: "0%",
         reverse: false,
         offset: "-250%",
         // triggerHook: 0,
       })
 
       .setTween(tl)
       // .addIndicators({
       // 	name: 'reveal',
       // 	colorTrigger: 'black',
       // 	indent: 0,
       // 	colorStart: 'green',
       // })
       .addTo(controller);
 
 
     })
   };
   roomAnimate();
 
   var stickyPlugin = function() {
     $(".js-sticky-nav").sticky({topSpacing:0});
   };
   stickyPlugin();
 
   var heroInnerPage = function() {
     $('.inner-page .hero-heading').lettering('words');
     setTimeout(function() {
       $('.inner-page .hero-heading > span > span').lettering('letters');
     }, 200)
 
     var tl = new TimelineMax();
 
     setTimeout(function() {
       tl 
         .set('.inner-page .hero-heading > span > span > span > span', {y: "100%", transformStyle:"preserve-3d"})
         .set('.inner-page .sub-text', {y: 20, autoAlpha: 0, transformStyle:"preserve-3d"})
         .staggerFromTo('.inner-page .hero-heading > span > span > span > span', 2, {opacity: 1, rotation: "20%", y:"100%"}, {opacity: 1, rotation: 0, y: "0%", ease: Expo.easeInOut}, 0.03, '+=0', allComplete)
         .fromTo('.inner-page .sub-text', 1, { autoAlpha: 0, y: 20 }, { autoAlpha: 1, y: 0, ease: Expo.easeInOut }, '-=1')
     }, 300);
 
     var allComplete = function() {
 
     }
 
   }
   heroInnerPage();
 
    
   var owlCarouselPlugin = function() {
     var owl = $('.slide-one-item'),
       owlHeroSlider = $('.owl-hero');
 
     var tl = new TimelineMax();
 
     owlHeroSlider.owlCarousel({
         center: false,
         items: 1,
         loop: true,
         stagePadding: 0,
         margin: 0,
         animateOut: 'fadeOut',
         animateIn: 'fadeIn',
         // smartSpeed: 1500,
         autoplay: true,
         autoplayHoverPause: true,
         dots: true,
         nav: true,
         navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
         onInitialize: function() {
           setTimeout(function() {
             owlHeroSlider.trigger('stop.owl.autoplay');
             tl 
               .set('.owl-item.active .hero-heading > span > span > span > span', {y: "100%", transformStyle:"preserve-3d"})
               .set('.owl-item.active .sub-text', {y: 20, autoAlpha: 0, transformStyle:"preserve-3d"})
               .staggerFromTo('.owl-item.active .hero-heading > span > span > span > span', 2, {opacity: 1, rotation: "20%", y:"100%"}, {opacity: 1, rotation: 0, y: "0%", ease: Expo.easeInOut}, 0.03, '+=0', allComplete)
               .fromTo('.owl-item.active .sub-text', 1, { autoAlpha: 0, y: 20 }, { autoAlpha: 1, y: 0, ease: Expo.easeInOut }, '-=1')
           }, 300);
         }
     });
     
   //   owlHeroSlider.on('initialize.owl.carousel', function(event) {
   //   	console.log('nice');
       
     // })
     // .owl-item.active 
     owlHeroSlider.on('translate.owl.carousel', function(event) {
 
       setTimeout(function() {
         owlHeroSlider.trigger('stop.owl.autoplay');
         tl 
         .set('.owl-item.active .hero-heading > span > span > span > span', {y: "100%", transformStyle:"preserve-3d"})
         .set('.owl-item.active .sub-text', {y: 20, autoAlpha: 0, transformStyle:"preserve-3d"})
         .staggerFromTo('.owl-item.active .hero-heading > span > span > span > span', 2, {opacity: 1, rotation: "20%", y:"100%"}, {opacity: 1, rotation: 0, y: "0%", ease: Expo.easeInOut}, 0.03, '+=0', allComplete)
         .fromTo('.owl-item.active .sub-text', 1, { autoAlpha: 0, y: 20 }, { autoAlpha: 1, y: 0, ease: Expo.easeInOut }, '-=1')
       }, 50)
       // TweenMax.set('.hero-heading span span', { y: '100%' });
       // TweenMax.staggerTo('.hero-heading span span', 2, { y: '0%', ease:Expo.easeInOut}, 0.3);
     })
 
     function allComplete() {
       owlHeroSlider.trigger('play.owl.autoplay');
     }
 
     $('.slide-one-item').owlCarousel({
         center: false,
         items: 1,
         loop: true,
         stagePadding: 0,
         margin: 0,
         smartSpeed: 1500,
         autoplay: false,
         dots: false,
         nav: false,
         navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">']
     });
 
     $('.thumbnail li').each(function(slide_index){
         $(this).click(function(e) {
             owl.trigger('to.owl.carousel',[slide_index,1500]);
             e.preventDefault();
         })
     })
 
     owl.on('changed.owl.carousel', function(event) {
         $('.thumbnail li').removeClass('active');
         $('.thumbnail li').eq(event.item.index - 2).addClass('active');
     })
 
 
 
 
 
 
     var owlGalBig = $('.owl-gallery-big').owlCarousel({
       loop: true,
       margin: 0,
       items: 1,
       nav: true,
       dots: true,
       navText: ['<span class="icon-keyboard_arrow_left">', '<span class="icon-keyboard_arrow_right">'],
       smartSpeed: 1000,
       onInitialized: function(e) {
         var carousel = e.relatedTarget;
         $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
       }
     });
     var owlGalSmall =$('.owl-gallery-small').owlCarousel({
       loop: true,
       margin:0,
       items: 1,
       nav: false,
       dots: false,
       mouseDrag: false,
       touchDrag: false,
       startPosition: 1,
       smartSpeed: 1000,
     });
     /* Gallery */
     
     
     var changed = false;
     owlGalBig.on("dragged.owl.carousel", function (event) {
       setTimeout(function() {
         var direction = event.relatedTarget['_drag']['direction'];
         if ( direction == 'left' && changed == true) {
           owlGalSmall.trigger('next.owl.carousel');
         } else if ( direction == 'right' && changed == true ) {
           owlGalSmall.trigger('prev.owl.carousel');
         } else {
           console.log(direction + " and " + changed);
         }
         changed = false;
       }, 10)
       
     });		
     owlGalBig.on('changed.owl.carousel', function(e) {
       changed = true;
       // alert();
       if (!e.namespace)  {
         return;
       }
       var carousel = e.relatedTarget;
       $('.slider-counter').text(carousel.relative(carousel.current()) + 1 + '/' + carousel.items().length);
     })
 
     $('.owl-gallery-big .owl-nav .owl-prev').click(function() {
       owlGalSmall.trigger('prev.owl.carousel');
     });
     $('.owl-gallery-big .owl-nav .owl-next').click(function() {
       owlGalSmall.trigger('next.owl.carousel');
     });  	
 
     $('.owl-gallery-small a').on('click', function(e) {
 
       e.preventDefault();
       owlGalBig.trigger('next.owl.carousel');
       owlGalSmall.trigger('next.owl.carousel');
 
     })
 
   };
   owlCarouselPlugin();
 
 });
 /***
 ================================================================
                     Randomize the Gallery
 ================================================================
 ***/
 document.addEventListener("DOMContentLoaded", function() {
  const imageContainer = document.getElementById('gutter_2');
 
  fetch('/LoadMenu/fetch_images.php')
      .then(response => response.json())
      .then(data => {
          if (data.error) {
              imageContainer.innerHTML = `<p>${data.error}</p>`;
              return;
          }
         
          if (!Array.isArray(data) || data.length === 0) {
              imageContainer.innerHTML = '<p>No images found.</p>';
              return;
          }
         
          imageContainer.innerHTML = data.map(item => `
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="">
                <a href="#" data-item-id="${item.itemID}" data-fancybox="gallery" class="img_details">
                    <img src="${item.itemImage}" alt="${item.itemName}" class="img-gallery"/>
                </a>
            </div>
          `).join('');
         
          // clicking on images
          imageContainer.querySelectorAll('.img_details').forEach(link => {
            link.addEventListener('click', function(event) {
                event.preventDefault();
   
                // Accessing the data attributes
                const itemId = this.getAttribute('data-item-id');
                const item = data.find(i => i.itemID === itemId);
   
                if (item) {
                    localStorage.setItem('selectedItem', JSON.stringify(item));
                    console.log("Clicked Image - Item ID: ", itemId, ", Item Name: ", item.itemName, ", Image URL: ", item.itemImage);
                    console.log("Stored item in localStorage: ", item);
                    window.location.href = 'itemDetails';
                } else {
                    console.error(`Item with ID ${itemId} not found in data.`);
                }
            });
        });
      })
      .catch(error => {
          console.error('Error fetching images:', error);
          imageContainer.innerHTML = '<p>Error loading images.</p>';
      });
     
});
 

 /***
 ================================================================
     Fetching Items From Database to Menu & Filtering
 ================================================================
 ***/
 document.addEventListener('DOMContentLoaded', function() {
     let allItems = [];
 
     function loadItems(category = 'all') {
      const menuContainer = document.getElementById('menu-container');
      if (!menuContainer) {
          console.error('Menu container not found');
          return;
      }
      menuContainer.innerHTML = '';
  
      const filteredItems = category === 'all' 
          ? allItems 
          : allItems.filter(item => item.itemCategory.toLowerCase() === category);
  
      filteredItems.forEach(item => {
          const itemElement = document.createElement('div');
          itemElement.className = 'col-md-4';
          itemElement.dataset.aos = 'fade-up';
  
          let itemContent = `
              <a href="${item.itemImage}" data-fancybox="gallery">
                  <img src="${item.itemImage}" alt="Image" class="img-menu">
              </a>
              <h4>${item.itemName}</h4>
              <p>R ${item.itemPrice}</p>
              <a href="itemDetails" class="button-menu" data-item-id="${item.itemID}">Order Now</a>
          `;
  
          if (item.itemStock <= 0) {
              itemElement.classList.add('out-of-stock');
              itemContent = `
                  <a href="${item.itemImage}" data-fancybox="gallery">
                      <img src="${item.itemImage}" alt="Image" class="img-menu out-of-stock-image">
                  </a>
                  <h4>${item.itemName}</h4>
                  <p>R ${item.itemPrice}</p>
                  <p class="out-of-stock-text">Out of Stock</p>
              `;
          }
  
          itemElement.innerHTML = itemContent;
          menuContainer.appendChild(itemElement);
      });
    }
  
 
     fetch('/LoadMenu/fetch_menu.php')
         .then(response => response.json())
         .then(data => {
             allItems = data;
             loadItems();
         })
         .catch(error => console.error('Error fetching menu items:', error));
 
     // Filtering
   document.querySelectorAll('.filter').forEach(link => {
     link.addEventListener('click', function(event) {
       event.preventDefault();
       const category = this.getAttribute('data-category');
       loadItems(category);
     });
   });
 
     document.addEventListener('click', function(event) {
         if (event.target.classList.contains('button-menu')) {
             event.preventDefault();
             const itemID = event.target.getAttribute('data-item-id');
             const item = allItems.find(i => i.itemID === itemID);
             if (item) {
                 localStorage.setItem('selectedItem', JSON.stringify(item));
                 window.location.href = 'itemDetails';
             }
         }
     });
 });
 document.addEventListener('DOMContentLoaded', function() {
  const filters = document.querySelectorAll('.filter');

  filters.forEach(filter => {
      filter.addEventListener('click', function(event) {
          event.preventDefault();
          // Remove active class from all filters
          filters.forEach(f => f.classList.remove('active'));
          // Add active class to the clicked filter
          this.classList.add('active');
          
          // Your filtering logic here
          const category = this.getAttribute('data-category');
          filterItems(category);
      });
  });
  
  function filterItems(category) {
      const menuItems = document.querySelectorAll('#menu-container .menu-item');
      menuItems.forEach(item => {
          if (category === 'all' || item.getAttribute('data-category') === category) {
              item.style.display = '';
          } else {
              item.style.display = 'none';
          }
      });
  }
});

 
 //showing the active nav links on the menu

 
 /***
 ================================================================
     Getting Selected item details.
 ================================================================
 ***/
 document.addEventListener('DOMContentLoaded', function() {
     const itemDetailsContainer = document.getElementById('item-details-container');
     const suggestedProductsContainer = document.getElementById('suggested-products-container');
     const selectedItem = localStorage.getItem('selectedItem');

     const specifications_p = document.getElementById('Specification');
     
     const description_p = document.getElementById('Description');

     let allItems = [];
 
     // update on quantity
     function updatePrice(quantity, itemPrice) {
         const originalPrice = parseFloat(itemPrice);
         const totalPrice = originalPrice * quantity;
         return totalPrice.toFixed(2);
     }
 
     if (selectedItem) {
         const item = JSON.parse(selectedItem);
         itemDetailsContainer.innerHTML = `
             <div class="image-column col-lg-6 col-md-12 col-sm-12">
                 <figure class="image-box">
                     <a href="${item.itemImage}" class="lightbox-image" title="${item.itemName}">
                         <img class="img-details-main" src="${item.itemImage}" alt="${item.itemName}">
                     </a>
                 </figure>
             </div>
             <div class="info-column col-lg-6 col-md-12 col-sm-12">
                 <div class="inner-column">
                     <h2>${item.itemName}</h2>
                     <div class="text">${item.itemDescription}</div>
                     <div class="price">Price : <span id="displayPrice">R${updatePrice(1, item.itemPrice)}</span></div>
                     <div class="other-options clearfix">
                         <div class="item-quantity">
                             <label class="field-label">Quantity:</label>
                             <input id="quantityInput" class="quantity-spinner" type="number" value="1" min="1" max="20" name="quantity">
                         </div>
                        <button id="addToCartBtn" class="button-menu">Add to Cart</button>
                     </div>
                 </div>
             </div>
         `;

         description_p.innerHTML = `
          <p>${item.itemDescription}</p>
        `;
 
         specifications_p.innerHTML = `
          <p>${item.itemSpecs.replace(/;|\•/g, '<br>')}</p>
        `;
 
         fetch('/LoadMenu/fetch_menu.php')
             .then(response => response.json())
             .then(data => {
                 allItems = data;
                 renderSuggestedProducts(item.itemCategory, allItems);
             })
             .catch(error => console.error('Error fetching menu items:', error));
     } else {
         itemDetailsContainer.innerHTML = '<p>Item not found.</p>';
     }
 
   itemDetailsContainer.addEventListener('input', function(event) {
         if (event.target && event.target.id === 'quantityInput') {
             const quantityInput = event.target;
             const quantity = parseInt(quantityInput.value, 10);
             const displayPrice = document.getElementById('displayPrice');
             const itemPrice = JSON.parse(selectedItem).itemPrice;
             const totalPrice = updatePrice(quantity, itemPrice);
             displayPrice.textContent = `R${totalPrice}`;
         }
     });
 
     function renderSuggestedProducts(category, items) {
         suggestedProductsContainer.innerHTML = '';
         const categoryItems = items.filter(item => item.itemCategory.toLowerCase() === category.toLowerCase());
         const relatedItems = items.filter(item => item.itemCategory.toLowerCase() !== category.toLowerCase());
         const randomRelatedItems = relatedItems.sort(() => 0.5 - Math.random()).slice(0, 3);
         const suggestions = [...categoryItems, ...randomRelatedItems].sort(() => 0.5 - Math.random()).slice(0, 4);
 
         suggestions.forEach(item => {
             const itemElement = document.createElement('div');


             itemElement.className = 'product-block col-lg-3 col-md-6 col-sm-12';
             
             if(item.itemStock <= 0) {             
              itemElement.classList.add('out-of-stock');
              itemElement.innerHTML = `
                  <figure class="image-box">
                    <img class="img-details" src="${item.itemImage}" alt="${item.itemName}">
                  </figure>
                  <h4>${item.itemName}</h4>
                  <p>R ${item.itemPrice}</p>
                  <p class="out-of-stock-text">Out of Stock</p>
              `;
             } else {
                itemElement.innerHTML = `
                    <div class="inner-box">
                        <figure class="image-box">
                            <img class="img-details" src="${item.itemImage}" alt="${item.itemName}">
                        </figure>
                        <div class="lower-content">
                            <h4><a>${item.itemName}</a></h4>
                            <div class="price">R${item.itemPrice}</div>
                            <div class="lower-box">
                                <a href="itemDetails" class="button-menu" data-item-id="${item.itemID}">Order Now</a>
                            </div>
                        </div>
                    </div>
                `;
             }
 
             suggestedProductsContainer.appendChild(itemElement);
         });
     }
 
     document.addEventListener('click', function(event) {
         if (event.target.classList.contains('button-menu')) {
             event.preventDefault();
             const itemID = event.target.getAttribute('data-item-id');
             const item = allItems.find(i => i.itemID === itemID);
             if (item) {
                 localStorage.setItem('selectedItem', JSON.stringify(item));
                 window.location.href = '/itemDetails';
             }
         }
     });
 });
 
 /*** 
 ============================================================================
         Fetcing Cart items from ItemDetails
 ============================================================================  
 ***/

 document.addEventListener('DOMContentLoaded', function() {
  const itemDetailsContainer = document.getElementById('item-details-container');
  const selectedItem = localStorage.getItem('selectedItem');
  let cartItems = []; 

  // Function to update price based on quantity
  function updatePrice(quantity, itemPrice) {
      const originalPrice = parseFloat(itemPrice);
      const totalPrice = originalPrice * quantity;
      return totalPrice.toFixed(2);
  }

  // Function to render cart items in the modal
  function renderCart() {
      const cartItemsContainer = document.getElementById('cartItems');
      const totalAmountDisplay = document.getElementById('totalAmount');
      cartItemsContainer.innerHTML = ''; // Clear existing items
      let totalPrice = 0;
      cartItems.forEach(item => {
          const itemTotalPrice = parseFloat(item.price) * item.quantity;
          totalPrice += itemTotalPrice;
          cartItemsContainer.innerHTML += `
          <div class="cart-item">
                 
                      <img class="img-details" src="${item.image}" alt="${item.image} Image">
                  
 
                  <div class="crt-m-d-d">
                    <div class="crt-m-d">${item.name}</div>
                  </div>
 
                  <div class="crt-m-d-d">
                    <div class="crt-m-d">Quantity: ${item.quantity}</div>
                  </div>
 
                  <div class="crt-m-d-d">
                    <div class="crt-m-d">Price: R${item.price}</div>
                  </div>
                 
                  <div class="crt-m-d-d">
                    <div class="crt-m-d">Total: R${itemTotalPrice}</div>
                  </div>
 
                  <button class="remove-item" data-name="${item.name}">Remove</button>
              </div>
          `;
      });
      totalAmountDisplay.textContent = totalPrice.toFixed(2);
  }

  
  function addToCart(name, price, image, quantity, category) {
      const existingItem = cartItems.find(item => item.name === name);
      if (existingItem) {
          existingItem.quantity = parseInt(existingItem.quantity,10) + parseInt(quantity);
      } else {
          cartItems.push({
              name: name,
              price: price,
              image: image,
              quantity: quantity,
              category: category
          });
      }
      localStorage.setItem('cartItems', JSON.stringify(cartItems));
      renderCart();
      alert('Item added to cart successfully');
  }

  // Event listener for quantity input change in item details
  itemDetailsContainer.addEventListener('input', function(event) {
      if (event.target && event.target.id === 'quantityInput') {
          const quantityInput = event.target;
          const quantity = parseInt(quantityInput.value, 10);
          const displayPrice = document.getElementById('displayPrice');
          const itemPrice = JSON.parse(selectedItem).itemPrice;
          const totalPrice = updatePrice(quantity, itemPrice);
          displayPrice.textContent = `R${totalPrice}`;
      }
  });

  // Event listener for Add to Cart button click
  itemDetailsContainer.addEventListener('click', function(event) {
      if (event.target && event.target.id === 'addToCartBtn') {
          const itemName = JSON.parse(selectedItem).itemName;
          const itemPrice = JSON.parse(selectedItem).itemPrice;
          const itemImage = JSON.parse(selectedItem).itemImage;
          const itemQuantity = document.getElementById('quantityInput').value;
          const itemCategory = JSON.parse(selectedItem).itemCategory;
          addToCart(itemName, itemPrice, itemImage, itemQuantity, itemCategory);
      }
  });

  // Event listener for Remove button click in cart
  document.getElementById('cartItems').addEventListener('click', function(event) {
      if (event.target && event.target.classList.contains('remove-item')) {
          const itemName = event.target.getAttribute('data-name');
          cartItems = cartItems.filter(item => item.name !== itemName);
          localStorage.setItem('cartItems', JSON.stringify(cartItems));
          renderCart();
      }
  });

  // Event listener for Remove All Items link click
  document.getElementById('removeAllLink').addEventListener('click', function(event) {
    event.preventDefault(); // Prevent default link behavior
    cartItems = [];
    localStorage.removeItem('cartItems'); // Clear local storage
    renderCart();
    alert('All items will be removed from your cart');
    });
   

  // Initialize cart items from localStorage on page load
  const storedCartItems = localStorage.getItem('cartItems');
  if (storedCartItems) {
      cartItems = JSON.parse(storedCartItems);
      renderCart();
  }

  // Function to open cart modal
  function openCartModal() {
      const cartModal = document.getElementById('cartModal');
      cartModal.style.display = 'block';
      renderCart();
  }

  // Close cart modal when user clicks on the close button (X)
  document.querySelector('.close').addEventListener('click', function() {
      const cartModal = document.getElementById('cartModal');
      cartModal.style.display = 'none';
  });

  // Close cart modal when user clicks outside the modal
  window.addEventListener('click', function(event) {
      const cartModal = document.getElementById('cartModal');
      if (event.target === cartModal) {
          cartModal.style.display = 'none';
          
      }
  });

  // Event listener for checkout button click
  document.getElementById('checkoutBtn').addEventListener('click', function() {
    localStorage.setItem('cartItemsForCheckout', JSON.stringify(cartItems));
      window.location.href = 'checkout';
  });
});

 /**

 /*** 
 ========================================================================
          Storing user input & Sending Deliver Address to checkout Page
 ========================================================================
 ***/
 function saveOptions() {
  // Get selected options from <select>
  var selectedOptions = Array.from(document.getElementById('selectedOptions').selectedOptions)
                              .map(option => option.value);
  
  // Store selectedOptions array in localStorage
  localStorage.setItem('selectedOptions', JSON.stringify(selectedOptions));
  


  // Redirect to Menu and force to the user to login or sign In
  window.location.href = 'register';
}

/*** 
 ========================================================================
                      Adding Cart items to Checkout Summary
 ========================================================================
 ***/
//  document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Store cart items in sessionStorage for checkout page access
//   sessionStorage.setItem('checkoutCartItems', JSON.stringify(cartItems));

//   // Redirect to the checkout page
//   window.location.href = 'checkout.php'; // Replace with your checkout page URL

  
// });
document.addEventListener('DOMContentLoaded', function() {
  const button = document.getElementById('checkoutBtn');

  // Function to handle the initial click
  function handleClick() {
  button.click(); // Simulate a click
  }
document.getElementById('checkoutBtn').addEventListener('click', function() {
  // Retrieve cart items from localStorage
  const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

  // Store cart items in sessionStorage for checkout page access
  sessionStorage.setItem('checkoutCartItems', JSON.stringify(cartItems));

  // Prepare data to send to the server
  const data = {
    cartItems: cartItems
    // Add any other relevant data from your cart modal here
  };
  
 
  // Send data to the server using AJAX
  const xhr = new XMLHttpRequest();
  xhr.open('POST', 'store_cart_items.php'); // Replace with your server-side script URL
  xhr.setRequestHeader('Content-Type', 'application/json');
  xhr.onload = function() {
    if (xhr.status === 200) {
      console.log('Cart details successfully saved to database.');
      // Redirect to the checkout page after successful save
      window.location.href = 'checkout.php'; // Replace with your checkout page URL
    } else {
      console.error('Error saving cart details to database.');
      // Handle error here
    }
  };
  xhr.send(JSON.stringify(data));
});
button.addEventListener('click', handleClick);
});

/***
=======================================================================
                   Display reviews from Database
=======================================================================
***/
document.addEventListener('DOMContentLoaded', function() {
    fetch('/Reviews/fetch_reviews.php')
        .then(response => {
            if (!response.ok) {
                throw new Error('Network response was not ok');
            }
            return response.json();
        })
        .then(data => {
            // Check if the response contains an 'error' field
            if (data.error) {
                throw new Error(data.error); // Throw an error if 'error' is present
            }
 
            // Assuming data is an array of reviews
            const reviewsContainer = document.getElementById('reviews');
            let reviewsHtml = '';
 
            data.forEach(review => {
                // Calculate the number of filled stars
                let starsHtml = '';
                for (let i = 1; i <= 5; i++) {
                    if (i <= review.rating) {
                        starsHtml += '<span class="star" data-rating="' + i + '">&#9733;</span>';
                    } else {
                        starsHtml += '<span class="star" data-rating="' + i + '">&#9734;</span>';
                    }
                }
 
                reviewsHtml += `
                    <div class="review">
                        <h3 class="review-name"><strong>${review.name} ${review.surname}</strong></h3>
                        <h5 class="review-comment">${review.comment}</h5>
                        <h4 class="review-date">Date Posted: ${review.datePosted}</h4>
                         <div class="review-move-stars" id="rating">
                            ${starsHtml}
                        </div>
                    </div>
                `;
            });
 
            reviewsContainer.innerHTML = reviewsHtml;
        })
        .catch(error => {
            console.error('Error fetching reviews:', error.message);
            // Handle error display or logging as needed
        });
});
 
 /***
 ========================================================================
                      Adding New Review on Item Details
 ========================================================================
 ***/
 
// Function to handle form submission
document.getElementById('reviewForm').addEventListener('submit', function(event) {
  event.preventDefault(); // Prevent form from submitting and refreshing the page
 
  // Get form values
  const firstName = document.getElementById('firstName').value;
  const lastName = document.getElementById("lastName").value;
  const rating = document.querySelector("#rating .star.active").getAttribute("data-rating");
  const comment = document.getElementById("comment").value;

 
  // Get current date
  var currentDate = new Date().toLocaleDateString();

  const formData = new FormData();
  formData.append('reviewFirst', firstName);
  formData.append('reviewLast', lastName);
  formData.append('reviewRating', rating);
  formData.append('reviewComment', comment);
  formData.append('reviewDate', currentDate);

  // Create review object
  var review = {
    firstName: firstName,
    lastName: lastName,
    rating: rating,
    comment: comment,
    currentDate: currentDate
  };

  fetch('/Reviews/add_reviews.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    console.log("From PHP: ", data);
    if (data.status === 'success') {
      console.log("Added successfully");
      document.getElementById("reviewForm").reset(); 
    } else {
      console.error('Error adding review:', data.message);
    }
  })
  .catch(error => {
    console.error('Fetch error:', error);
  });

  displayReview(review);
  
});
 
// Function to display the review
function displayReview(reviews) {
  var reviewsContainer = document.getElementById("reviews");
 
  // Create review element
  var reviewDiv = document.createElement("div");
  reviewDiv.classList.add("review");
  let starsHtml = '';
  for (let i = 1; i <= 5; i++) {
      if (i <= reviews.rating) {
          starsHtml += '<span class="star" data-rating="' + i + '">&#9733;</span>';
      } else {
          starsHtml += '<span class="star" data-rating="' + i + '">&#9734;</span>';
      }
  }
  // Construct HTML for review
  var reviewHTML = `
    <h3 class="review-name"><strong>${reviews.firstName} ${reviews.lastName}</strong></h3>
    <h5 class="review-comment">${reviews.comment}</h5>
    <h4 class="review-date">Date Added: ${reviews.currentDate}</h4>
    <div class="review-move-stars" id="rating">
      ${starsHtml}
    </div>
   
  `;
 
  reviewDiv.innerHTML = reviewHTML;
 
  // Append review to reviews container

  reviewsContainer.prepend(reviewDiv); // Add new review at the beginning
}
 
// Function to handle star rating selection
document.querySelectorAll("#rating .star").forEach(function(star) {
  star.addEventListener("click", function() {
    document.querySelectorAll("#rating .star").forEach(function(s) {
      s.classList.remove("active");
    });
    star.classList.add("active");
  });
});

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Retrieve existing cart items in sessionStorage (if any)
//   const existingCheckoutItems = JSON.parse(sessionStorage.getItem('checkoutCartItems')) || [];

//   // Combine existing checkout items with new cart items
//   const updatedCheckoutItems = [...existingCheckoutItems, ...cartItems];

//   // Store combined items in sessionStorage for checkout page access
//   sessionStorage.setItem('checkoutCartItems', JSON.stringify(updatedCheckoutItems));

//   // Optionally, clear localStorage after use
//   localStorage.removeItem('cartItemsForCheckout');

//   // Redirect to the checkout page
//   window.location.href = 'checkout.php'; // Replace with your checkout page URL
// });

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Retrieve existing checkout items from sessionStorage (if any)
//   const existingCheckoutItems = JSON.parse(sessionStorage.getItem('checkoutCartItems')) || [];

//   // Filter out items that are no longer in the cart (e.g., removed in modal)
//   const updatedCheckoutItems = existingCheckoutItems.filter(existingItem =>
//       cartItems.some(cartItem => cartItem.id === existingItem.id)
//   );

//   // Store updated items in sessionStorage for checkout page access
//   sessionStorage.setItem('checkoutCartItems', JSON.stringify(updatedCheckoutItems));

//   // Optionally, clear localStorage after use
//   localStorage.removeItem('cartItemsForCheckout');

//   // Redirect to the checkout page
//   window.location.href = 'checkout.php'; // Replace with your checkout page URL
// });

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Store cart items in sessionStorage for checkout page access
//   sessionStorage.setItem('checkoutCartItems', JSON.stringify(cartItems));

//   // Send data to server using fetch API (replace with your server URL)
//   fetch('store_cart_items.php', {
//     method: 'POST',
//     headers: {
//       'Content-Type': 'application/json',
//     },
//     body: JSON.stringify({ cartItems: cartItems }),
//   })
//   .then(response => {
//     if (!response.ok) {
//       throw new Error('Network response was not ok');
//     }
//     // Redirect to the checkout page after successful response
//     window.location.href = 'checkout.php'; // Replace with your checkout page URL
//   })
//   .catch(error => {
//     console.error('Error:', error);
//     // Handle errors as needed
//   });
// });

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Get cart items from modal
//   var cartItems = document.getElementById('cartItems').innerHTML;
//   var cartTotal = document.getElementById('totalAmount').innerHTML;

//   // Get checkout table and total amount elements
//   var checkoutItemsTable = document.getElementById('checkoutItemsTable');
//   var checkoutItems = document.getElementById('checkoutItems');
//   var checkoutTotal = document.getElementById('checkoutTotal');

//   // Update checkout items table
//   checkoutItems.innerHTML = cartItems;
//   checkoutTotal.innerHTML = '<h3>Total Amount: R<span id="totalAmount">' + cartTotal + '</span></h3>';
// });

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Store cart items in sessionStorage for checkout page access
//   sessionStorage.setItem('checkoutCartItems', JSON.stringify(cartItems));

//   // Redirect to the checkout page
//   window.location.href = 'checkout.php'; // Replace with your checkout page URL
// });

// document.getElementById('checkoutBtn').addEventListener('click', async function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Store cart items in sessionStorage for checkout page access
//   await storeCheckoutCartItems(cartItems);

//   // Redirect to the checkout page
//   window.location.href = 'checkout.php'; // Replace with your checkout page URL
// });

// async function storeCheckoutCartItems(cartItems) {
//   // Store cart items in sessionStorage asynchronously
//   await sessionStorage.setItem('checkoutCartItems', JSON.stringify(cartItems));
// }

// document.addEventListener('DOMContentLoaded', async function() {
//   // Retrieve cart items from sessionStorage asynchronously
//   const cartItems = await getCheckoutCartItems();

//   // Reference to the checkout items table body
//   const checkoutItemsBody = document.getElementById('checkoutItems');

//   // Clear previous table content
//   checkoutItemsBody.innerHTML = '';

//   // Populate the checkout items table
//   cartItems.forEach(item => {
//       const row = document.createElement('tr');
//       row.innerHTML = `
//           <td><img src="${item.image}" alt="${item.name} Image" class="checkout-item-image"></td>
//           <td>${item.name}</td>
//           <td>${item.quantity}</td>
//           <td>R${item.price}</td>
//           <td>R${(item.quantity * item.price).toFixed(2)}</td>
//       `;
//       checkoutItemsBody.appendChild(row);
//   });

//   // Calculate and display total amount
//   const totalPrice = cartItems.reduce((acc, item) => acc + (item.quantity * item.price), 0);
//   document.getElementById('totalAmount').textContent = totalPrice.toFixed(2);
// });

// async function getCheckoutCartItems() {
//   // Retrieve cart items from sessionStorage asynchronously
//   const cartItems = await JSON.parse(sessionStorage.getItem('checkoutCartItems')) || [];
//   return cartItems;
// }

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];
  
//   // Construct checkout page URL with cart items as URL parameters
//   let checkoutUrl = 'checkout.php'; // Replace with your checkout page URL
//   if (cartItems.length > 0) {
//       checkoutUrl += '?items=' + encodeURIComponent(JSON.stringify(cartItems));
//   }

//   // Redirect to the checkout page
//   window.location.href = checkoutUrl;
// });


// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Construct checkout page URL with cart items as URL parameters
//   let checkoutUrl = 'checkout.php'; // Replace with your checkout page URL
//   if (cartItems.length > 0) {
//       checkoutUrl += '?items=' + encodeURIComponent(JSON.stringify(cartItems));
//   }

//   // Redirect to the checkout page
//   window.location.href = checkoutUrl;
// });

// document.getElementById('checkoutBtn').addEventListener('click', function() {
//   // Retrieve cart items from localStorage (assuming they are stored there)
//   const cartItems = JSON.parse(localStorage.getItem('cartItemsForCheckout')) || [];

//   // Iterate through items in modal cart to sync quantities
//   const modalCartItems = document.getElementById('cartItems').querySelectorAll('.cart-item');
//   modalCartItems.forEach((modalCartItem, index) => {
//       const quantityInput = modalCartItem.querySelector('.cart-item-quantity-input');
//       cartItems[index].quantity = parseInt(quantityInput.value) || 0; // Update quantity in cartItems
//   });

//   // Store updated cart items in sessionStorage for checkout page access
//   sessionStorage.setItem('checkoutCartItems', JSON.stringify(cartItems));

//   // Redirect to the checkout page
//   window.location.href = 'checkout.php'; // Replace with your checkout page URL
// });



