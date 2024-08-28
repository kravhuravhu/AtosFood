/* global moment:false, Chart:false, Sparkline:false */
 
$(function () {
  'use strict'
 
  // Make the dashboard widgets sortable Using jquery UI
  $('.connectedSortable').sortable({
    placeholder: 'sort-highlight',
    connectWith: '.connectedSortable',
    handle: '.card-header, .nav-tabs',
    forcePlaceholderSize: true,
    zIndex: 999999
  })
  $('.connectedSortable .card-header').css('cursor', 'move')
 
  // jQuery UI sortable for the todo list
  $('.todo-list').sortable({
    placeholder: 'sort-highlight',
    handle: '.handle',
    forcePlaceholderSize: true,
    zIndex: 999999
  })
 
  // bootstrap WYSIHTML5 - text editor
  $('.textarea').summernote()
 
  $('.daterange').daterangepicker({
    ranges: {
      Today: [moment(), moment()],
      Yesterday: [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
      'Last 7 Days': [moment().subtract(6, 'days'), moment()],
      'Last 30 Days': [moment().subtract(29, 'days'), moment()],
      'This Month': [moment().startOf('month'), moment().endOf('month')],
      'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
    },
    startDate: moment().subtract(29, 'days'),
    endDate: moment()
  }, function (start, end) {
    // eslint-disable-next-line no-alert
    alert('You chose: ' + start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
  })
 
  /* jQueryKnob */
  $('.knob').knob()
 
  // jvectormap data
  var visitorsData = {
    US: 398, // USA
    SA: 400, // Saudi Arabia
    CA: 1000, // Canada
    DE: 500, // Germany
    FR: 760, // France
    CN: 300, // China
    AU: 700, // Australia
    BR: 600, // Brazil
    IN: 800, // India
    GB: 320, // Great Britain
    RU: 3000 // Russia
  }
  // World map by jvectormap
  $('#world-map').vectorMap({
    map: 'usa_en',
    backgroundColor: 'transparent',
    regionStyle: {
      initial: {
        fill: 'rgba(255, 255, 255, 0.7)',
        'fill-opacity': 1,
        stroke: 'rgba(0,0,0,.2)',
        'stroke-width': 1,
        'stroke-opacity': 1
      }
    },
    series: {
      regions: [{
        values: visitorsData,
        scale: ['#ffffff', '#0154ad'],
        normalizeFunction: 'polynomial'
      }]
    },
    onRegionLabelShow: function (e, el, code) {
      if (typeof visitorsData[code] !== 'undefined') {
        el.html(el.html() + ': ' + visitorsData[code] + ' new visitors')
      }
    }
  })
 
  // Sparkline charts
  var sparkline1 = new Sparkline($('#sparkline-1')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
  var sparkline2 = new Sparkline($('#sparkline-2')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
  var sparkline3 = new Sparkline($('#sparkline-3')[0], { width: 80, height: 50, lineColor: '#92c1dc', endColor: '#ebf4f9' })
 
  sparkline1.draw([1000, 1200, 920, 927, 931, 1027, 819, 930, 1021])
  sparkline2.draw([515, 519, 520, 522, 652, 810, 370, 627, 319, 630, 921])
  sparkline3.draw([15, 19, 20, 22, 33, 27, 31, 27, 19, 30, 21])
 
  // The Calender
  $('#calendar').datetimepicker({
    format: 'L',
    inline: true
  })
 
  // SLIMSCROLL FOR CHAT WIDGET
  $('#chat-box').overlayScrollbars({
    height: '250px'
  })
 
/***
=====================================================================================
                                  Chart Data
===========================================================================
***/
// Global variable for listArray
// Global variables
const listArray = [];
const categoryQuantityArray = initializeCategoryQuantityArray(); // Array to store category and quantity
 
// Function to initialize category quantities
function initializeCategoryQuantityArray() {
  return {
    breakfast: { category: 'breakfast', quantity: 0 },
    lunch: { category: 'lunch', quantity: 0 },
    desserts: { category: 'desserts', quantity: 0 },
    snacks: { category: 'snacks', quantity: 0 },
    beverages: { category: 'beverages', quantity: 0 }
  };
}
 
// Fetch data and process
fetch('/LoadMenu/fetch_history.php')
  .then(response => response.json())
  .then(data => {
    // Process each order and item
    data.order_history.forEach(order => {
      order.ordItemname.split('|').forEach(item => {
        const [name, quantity, price, category] = item.split(';');
        const quantityInt = parseInt(quantity); // Ensure quantity is an integer
 
        // Update the quantity for the respective category
        switch (category.toLowerCase()) {
          case 'breakfast':
          case 'lunch':
          case 'desserts':
          case 'snacks':
          case 'beverages':
            categoryQuantityArray[category.toLowerCase()].quantity += quantityInt;
            break;
          default:
            console.warn(`Unrecognized category: ${category}`);
            break;
        }
        console.log("Hello1");
      });
      console.log("Hello2");
      console.log(categoryQuantityArray);
    });
 
    // Populate listArray with category quantities
    listArray[0] = categoryQuantityArray.breakfast.quantity;
    listArray[1] = categoryQuantityArray.lunch.quantity;
    listArray[2] = categoryQuantityArray.snacks.quantity;
    listArray[3] = categoryQuantityArray.desserts.quantity;
    listArray[4] = categoryQuantityArray.beverages.quantity;
    
    const breakfastPercentage = listArray[0] + '%'; // Convert to percentage string
    const lunchPercentage = listArray[1] + '%'; // Convert to percentage string
    const snacksPercentage = listArray[2] + '%'; // Convert to percentage string
    const dessertPercentage = listArray[3] + '%'; // Convert to percentage string
    const beveragesPercentage = listArray[4] + '%'; // Convert to percentage string

    // Set the width of the progress bar element
    document.getElementById('pbar-breakfast').style.width = breakfastPercentage;
    document.getElementById('pbar-lunch').style.width = lunchPercentage;
    document.getElementById('pbar-snacks').style.width = snacksPercentage;
    document.getElementById('pbar-dessert').style.width = dessertPercentage;
    document.getElementById('pbar-beverages').style.width = beveragesPercentage;
    
    // Update chartData with dynamic data
    var salesChartData = {
      labels: ['', 'Breakfast', 'Lunch', 'Snacks', 'Desserts', 'Beverages', ''],
      datasets: [
        {
          label: 'Breakfast',
          backgroundColor: 'rgba(60,141,188,0.9)',
          borderColor: 'rgba(60,141,188,0.8)',
          pointRadius: true,
          pointColor: '#3b8bba',
          pointStrokeColor: 'rgba(60,141,188,1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(60,141,188,1)',
          data: [0, listArray[0], 0, 0, 0, 0, 0]
        },
        {
          label: 'Lunch',
          backgroundColor: 'rgba(244, 67, 54, 0.9)',
          borderColor: 'rgba(244, 67, 54, 0.8)',
          pointRadius: true,
          pointColor: '#f44336',
          pointStrokeColor: 'rgba(244, 67, 54, 1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(244, 67, 54, 1)',
          data: [0, 0, listArray[1], 0, 0, 0, 0]
        },
        {
          label: 'Snacks',
          backgroundColor: 'rgba(76, 175, 80, 0.9)',
          borderColor: 'rgba(76, 175, 80, 0.8)',
          pointRadius: true,
          pointColor: '#4caf50',
          pointStrokeColor: 'rgba(76, 175, 80, 1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(76, 175, 80, 1)',
          data: [0, 0, 0, listArray[2], 0, 0, 0]
        },
        {
          label: 'Desserts',
          backgroundColor: 'rgba(137, 207, 240, 0.9)',
          borderColor: 'rgba(137, 207, 240, 0.8)',
          pointRadius: true,
          pointColor: '#89cfe6',
          pointStrokeColor: 'rgba(137, 207, 240, 1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(137, 207, 240, 1)',
          data: [0, 0, 0, 0, listArray[3], 0, 0]
        },
        {
          label: 'Beverages',
          backgroundColor: 'rgba(255, 235, 59, 0.9)',
          borderColor: 'rgba(255, 235, 59, 0.8)',
          pointRadius: true,
          pointColor: '#ffeb3b',
          pointStrokeColor: 'rgba(255, 235, 59, 1)',
          pointHighlightFill: '#fff',
          pointHighlightStroke: 'rgba(255, 235, 59, 1)',
          data: [0, 0, 0, 0, 0, listArray[4], 0]
        }
      ]
    };
 
    // Create the chart using Chart.js
    var salesChartCanvas = document.getElementById('revenue-chart-canvas').getContext('2d');
    var salesChart = new Chart(salesChartCanvas, {
      type: 'line',
      data: salesChartData,
      options: {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: false
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false
            }
          }],
          yAxes: [{
            gridLines: {
              display: false
            }
          }]
        }
      }
    });
 
    // Call updateProgressBars() after populating listArray
    updateProgressBars();
  })
  .catch(error => console.error('Error fetching order history:', error));
 
// Initialize category quantities with initial values
var categoryQuantities = {
  breakfast: 0,
  lunch: 0,
  desserts: 0,
  snacks: 0,
  beverages: 0
};
 
// Function to update category quantities
function updateCategoryQuantity(category, quantity) {
    // Update the quantity for the specified category
    categoryQuantities[category] = quantity;
 
    // Update the corresponding progress bar
    updateProgressBar(category);
}
 
// Function to update progress bar based on category quantity
function updateProgressBar(category) {
    // Find the progress bar element for the specified category
    var progressBar = document.querySelector('.progress-group:contains("' + category + '") .progress .progress-bar');
 
    // Check if progressBar is found
    if (progressBar) {
        // Get the quantity for the specified category
        var quantity = categoryQuantities[category];
 
        // Animate the progress bar
        animateProgressBar(progressBar, quantity);
    }
}
 
// Function to animate progress bars
function animateProgressBar(bar, quantity) {
    // Set the initial width to 0
    bar.style.width = '0%';
    // Animate the progress bar to the given width
    setTimeout(function() {
        bar.style.width = quantity + '%';
    }, 500); // Adjust the animation duration as needed
}
 
// Example usage:
// Update the quantity for 'breakfast' category to 80%
updateCategoryQuantity(categoryQuantityArray.breakfast.category, categoryQuantityArray.breakfast.quantity);
// Update the quantity for 'lunch' category to 75%
updateCategoryQuantity(categoryQuantityArray.lunch.category, categoryQuantityArray.lunch.quantity);
// Update the quantity for 'desserts' category to 50%
updateCategoryQuantity(categoryQuantityArray.desserts.category, categoryQuantityArray.desserts.quantity);
// Update the quantity for 'snacks' category to 60%
updateCategoryQuantity(categoryQuantityArray.snacks.category, categoryQuantityArray.snacks.quantity);
// Update the quantity for 'beverages' category to 50%
updateCategoryQuantity(categoryQuantityArray.beverages.category, categoryQuantityArray.beverages.quantity);
 
console.log("Display Sample Data");
console.log(categoryQuantityArray);
/*==============================================END=================================================*/
 
 
  var salesChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        gridLines: {
          display: false
        }
      }],
      yAxes: [{
        gridLines: {
          display: false
        }
      }]
    }
  }
 
  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesChart = new Chart(salesChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesChartData,
    options: salesChartOptions
  })
 
  // Donut Chart
  var pieChartCanvas = $('#sales-chart-canvas').get(0).getContext('2d')
  var pieData = {
    labels: [
      'Instore Sales',
      'Download Sales',
      'Mail-Order Sales'
    ],
    datasets: [
      {
        data: [30, 12, 20],
        backgroundColor: ['#f56954', '#00a65a', '#f39c12']
      }
    ]
  }
  var pieOptions = {
    legend: {
      display: false
    },
    maintainAspectRatio: false,
    responsive: true
  }
  // Create pie or douhnut chart
  // You can switch between pie and douhnut using the method below.
  // eslint-disable-next-line no-unused-vars
  var pieChart = new Chart(pieChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'doughnut',
    data: pieData,
    options: pieOptions
  })
 
  // Sales graph chart
  var salesGraphChartCanvas = $('#line-chart').get(0).getContext('2d')
  // $('#revenue-chart').get(0).getContext('2d');
 
  var salesGraphChartData = {
    labels: ['2011 Q1', '2011 Q2', '2011 Q3', '2011 Q4', '2012 Q1', '2012 Q2', '2012 Q3', '2012 Q4', '2013 Q1', '2013 Q2'],
    datasets: [
      {
        label: 'Digital Goods',
        fill: false,
        borderWidth: 2,
        lineTension: 0,
        spanGaps: true,
        borderColor: '#efefef',
        pointRadius: 3,
        pointHoverRadius: 7,
        pointColor: '#efefef',
        pointBackgroundColor: '#efefef',
        data: [2666, 2778, 4912, 3767, 6810, 5670, 4820, 15073, 10687, 8432]
      }
    ]
  }
 
  var salesGraphChartOptions = {
    maintainAspectRatio: false,
    responsive: true,
    legend: {
      display: false
    },
    scales: {
      xAxes: [{
        ticks: {
          fontColor: '#efefef'
        },
        gridLines: {
          display: false,
          color: '#efefef',
          drawBorder: false
        }
      }],
      yAxes: [{
        ticks: {
          stepSize: 5000,
          fontColor: '#efefef'
        },
        gridLines: {
          display: true,
          color: '#efefef',
          drawBorder: false
        }
      }]
    }
  }
 
  // This will get the first returned node in the jQuery collection.
  // eslint-disable-next-line no-unused-vars
  var salesGraphChart = new Chart(salesGraphChartCanvas, { // lgtm[js/unused-local-variable]
    type: 'line',
    data: salesGraphChartData,
    options: salesGraphChartOptions
  })
})