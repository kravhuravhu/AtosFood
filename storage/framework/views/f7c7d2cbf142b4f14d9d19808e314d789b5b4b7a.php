<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atos Food| Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../admin/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" href="../admin/dist/css/styles.css">
  
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="../admin/dist/img/right.png" alt="logo" height="60" width="60">
  </div>

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>
      </li>
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" id="sidebar"></aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="home">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3 id="pendingOrders">70</h3>

                <p>New Orders</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="orderhistory" class="small-box-footer">View all Orders<i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3 id="menuItemCount"><sup style="font-size: 20px"></sup></h3>

                <p>Menu Items</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="menulist" class="small-box-footer">View All Menu Items <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3 id="outOfStockCount">0</h3>
                <p>Out Of Stock</p>
              </div>
              <div class="icon">
                <i class="fas fa-tag"></i>
              </div>
              <a href="inventory" class="small-box-footer">View Inventory <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3 id="orderHistoryCount">0</h3>

                <p>Order History</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="orderhistory" class="small-box-footer">View all Order history <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        <!-- Main row -->
         <!------------------------------------Monthly Recap Report----------------------------------------->

         <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Monthly Recap Report</h5>

                <div class="card-tools">
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <div class="btn-group">
                    <button type="button" class="btn btn-tool dropdown-toggle" data-toggle="dropdown">
                      <i class="fas fa-wrench"></i>
                    </button>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                      <a href="#" class="dropdown-item">Action</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-8">
                    <p class="text-center">
                      <strong>Sales: 1 Jan, 2024 - 30 Jul, 2024</strong>
                    </p>

                    <div class="card-body">
                      <div class="tab-content p-0">
                        <!-- Morris chart - Sales -->
                        <div class="chart tab-pane active" id="revenue-chart"
                             style="position: relative; height: 300px;">
                            <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                         </div>
                        <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                          <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                        </div>
                      </div>
                    </div><!-- /.card-body -->
                    <!-- /.chart-responsive -->
                  </div>
                  <!-- /.col -->
                  <div class="col-md-4">
                    <p class="text-center">
                      <strong>Keys</strong>
                    </p>

                    <div class="progress-group">
                      BreakFast
                      <div class="progress progress-sm">
                        <div id="pbar-breakfast" class="progress-bar bg-primary"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->

                    <div class="progress-group">
                     Lunch
                      <div class="progress progress-sm">
                        <div id="pbar-lunch" class="progress-bar bg-danger"></div>
                      </div>
                    </div>

                    <!-- /.progress-group -->
                    <div class="progress-group">
                      <span class="progress-text">Snacks</span>
                      <div class="progress progress-sm">
                        <div id="pbar-snacks" class="progress-bar bg-success"></div>
                      </div>
                    </div>

                   
                     <!-- /.progress-group -->
                     <div class="progress-group">
                     Dessert
                      <div class="progress progress-sm">
                        <div id="pbar-dessert"class="progress-bar bg-info"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                    <div class="progress-group">
                     Beverages
                      <div class="progress progress-sm">
                        <div id="pbar-beverages"class="progress-bar bg-warning"></div>
                      </div>
                    </div>
                    <!-- /.progress-group -->
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
              <div class="card-footer">
                <div class="row">
                <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                        <span id="revenuePercentage" class="description-percentage text-success"><i class="fas fa-caret-left"></i> 0%</span>
                        <h5 id="totalRevenue" class="description-header">Loading...</h5>
                        <span class="description-text">TOTAL STOCK</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                      <span id="percentageOfTotalOrders" class="description-percentage text-success"><i class="fas fa-caret-left"></i> 0%</span>
                      <h5 id="totalOrdersP" class="description-header">R10,390.90</h5>
                      <span class="description-text">TOTAL SALES</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block border-right">
                        <span id="profitPercentage" class="description-percentage text-success"><i class="fas fa-caret-up"></i>0%</span>
                        <h5 id="totalProfit" class="description-header">Loading...</h5>
                        <span class="description-text">TOTAL PROFIT</span>
                    </div>
                    <!-- /.description-block -->
                </div>
                  <!-- /.col -->
                  <div class="col-sm-3 col-6">
                    <div class="description-block">
                      <span class="description-percentage text-warning" id="deliveredPerc"><i class="fas fa-caret-right"></i>0%</span>
                      <h5 class="description-header" id="deliveredOrders">Loading...</h5>
                      <span class="description-text">DELIVERED ORDERS</span>
                    </div>
                    <!-- /.description-block -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
         <!-------------------------------------Monthly Recap Report---------------------------------------->
        <div class="row">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
           
                          <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>
            
                <div class="card-tools">
                  <!-- <span id="notificationCount">0</span> -->
                  <span id="notificationCount" title="3 New Messages" class="badge badge-primary">0</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  
                  <!-- Button to toggle contacts pane -->
                  <button type="button" class="btn btn-tool" title="Contacts" id="toggleContactsPaneBtn">
                    <i class="fas fa-comments"></i>
                  </button>
                  
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
            
              <!-- Direct chat messages -->
              <div class="direct-chat-messages" id="chatMessages">
                <!-- Messages will be dynamically loaded here -->
              </div>
            
              <!-- Direct chat contacts pane -->
              <div class="direct-chat-contacts" id="contactsList" style="display: none;">
                <!-- Contacts will be dynamically loaded here -->
               
              </div>
              <div class="input-group">
                <input type="text" id="chatInput" placeholder="Type a message ..." class="form-control">
                <span class="input-group-append">
                  <button type="button" id="sendButton" class="btn btn-primary">Send</button>
                </span>
              </div>
            </div>
            
<!-- /.direct-chat-pane -->

          <!-- TO DO List -->
          <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
              <div class="todo-container">
               
                <div class="loading-spinner" id="loadingSpinner">
                    <div class="spinner"></div>
                </div>
                <div class="todo-input-container">
                    <input type="text" id="todo-taskInput" placeholder="Add a new task...">
                    <button onclick="addTask()">Add Task</button>
                </div>
                <ul id="todo-taskList" class="sortable-list"></ul>
            </div>
               
            </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">
            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white"><!----Visitors--></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white"><!---Online--></div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white"><!--Sales--></div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
<!-------------------------------------------------------------------------------------------------------->
<!-- PRODUCT LIST -->
<div class="card">
  <div class="card-header">
    <h3 class="card-title">Recently Added Products</h3>
 
    <div class="card-tools">
      <button type="button" class="btn btn-tool" data-card-widget="collapse">
        <i class="fas fa-minus"></i>
      </button>
      <button type="button" class="btn btn-tool" data-card-widget="remove">
        <i class="fas fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.card-header -->
  <div class="card-body p-0">
    <ul class="products-list product-list-in-card pl-2 pr-2" id="recentItems">
      <!-- recently added items -->
    </ul>
  </div>
  <!-- /.card-body -->
  <div class="card-footer text-center">
    <a href="http://localhost/Atos_Food3/public/admin/menu/AtosFood_working/atosfood/#">View All Products</a>
  </div>

<!--------------------------------------------------------------------------------------------------------->


          

            <!-- Calendar -->
            <div class="card bg-gradient-success" itemid="bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2024-2025 <a href="#">Atos</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../admin/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../admin/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../admin/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../admin/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../admin/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../admin/plugins/moment/moment.min.js"></script>
<script src="../admin/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../admin/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../admin/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<script src="../admin/dist/js/script.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../admin/dist/js/pages/dashboard.js"></script>
<script src="js/recentItems.js"></script>

<script src="https://www.gstatic.com/firebasejs/9.0.1/firebase-app-compat.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.0.1/firebase-firestore-compat.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sortablejs@1.14.0/Sortable.min.js"></script>
<script>
  // Firebase configuration
  const firebaseConfig = {
      apiKey: "YOUR_API_KEY",
      authDomain: "todo-99061.firebaseapp.com",
      projectId: "todo-99061",
      storageBucket: "todo-99061.appspot.com",
      messagingSenderId: "762103887675",
      appId: "1:762103887675:web:1688aaa42705037045691e"
  };

  // Initialize Firebase
  firebase.initializeApp(firebaseConfig);

  const db = firebase.firestore();
  const loadingSpinner = document.getElementById('loadingSpinner');

  // Function to show loading spinner
  function showLoadingSpinner() {
      loadingSpinner.style.display = 'block';
  }

  // Function to hide loading spinner
  function hideLoadingSpinner() {
      loadingSpinner.style.display = 'none';
  }

  // Function to add task to Firestore
  function addTask() {
      const taskInput = document.getElementById('todo-taskInput');
      const taskText = taskInput.value.trim();

      if (taskText === '') {
          alert(' the input field is empty, type to add task!');
          return; // Exit function if input is empty
      }

      showLoadingSpinner(); // Show spinner while adding task

      // Get total number of tasks to determine new order
      db.collection('todo').get().then(snapshot => {
          const order = snapshot.size; // Use number of tasks as the order

          db.collection('todo').add({
              task: taskText,
              completed: false,
              order: order,
              timestamp: firebase.firestore.FieldValue.serverTimestamp()
          })
          .then(() => {
              taskInput.value = '';
              taskInput.focus();
          })
          .catch(error => {
              console.error('Error adding task: ', error);
          })
          .finally(() => {
              hideLoadingSpinner(); // Hide spinner after task is added
          });
      });
  }

  // Function to toggle task completion status
  function toggleTaskCompleted(taskItem, completed) {
      const taskId = taskItem.getAttribute('data-id');
      db.collection('todo').doc(taskId).update({
          completed: completed
      })
      .then(() => {
          taskItem.classList.toggle('completed', completed);
      })
      .catch(error => {
          console.error('Error updating task: ', error);
      });
  }

  // Function to edit a task in Firestore
  function editTask(taskItem, currentTaskText) {
      const taskId = taskItem.getAttribute('data-id');
      const newTaskText = prompt('Edit Task:', currentTaskText);
      if (newTaskText && newTaskText.trim() !== '') {
          db.collection('todo').doc(taskId).update({
              task: newTaskText.trim(),
              timestamp: firebase.firestore.FieldValue.serverTimestamp()
          })
          .then(() => {
              taskItem.querySelector('.todo-span').textContent = newTaskText.trim();
              taskItem.querySelector('.todo-timestamp').textContent = formatDate(new Date());
          })
          .catch(error => {
              console.error('Error updating task: ', error);
          });
      }
  }

  // Function to delete a task from Firestore
  function deleteTask(taskItem) {
      const taskId = taskItem.getAttribute('data-id');
      db.collection('todo').doc(taskId).delete()
          .then(() => {
              taskItem.remove();
          })
          .catch(error => {
              console.error('Error deleting task: ', error);
          });
  }

  // Function to format date as "DD/MM/YYYY HH:MM:SS"
  function formatDate(date) {
      const options = { 
          day: '2-digit', 
          month: '2-digit', 
          year: 'numeric',
          hour: '2-digit',
          minute: '2-digit',
          second: '2-digit' 
      };
      return date.toLocaleDateString('en-GB', options);
  }

  // Function to handle updating task order after drag and drop
  function updateTaskOrder(event) {
      const { oldIndex, newIndex } = event;
      const taskList = document.getElementById('todo-taskList');
      const tasks = taskList.querySelectorAll('.todo-item');

      // Reorder DOM elements
      const draggedTask = tasks[oldIndex];
      const siblingTask = tasks[newIndex];

      if (!draggedTask || !siblingTask) {
          console.error('Invalid drag operation.');
          return;
      }

      taskList.insertBefore(draggedTask, siblingTask);

      // Update task order in Firestore
      const batch = db.batch();

      tasks.forEach((task, index) => {
          const taskId = task.getAttribute('data-id');
          const taskRef = db.collection('todo').doc(taskId);
          batch.update(taskRef, { order: index });
      });

      batch.commit().then(() => {
          console.log('Task order updated successfully.');
      }).catch(error => {
          console.error('Error updating task order: ', error);
      });
  }

  // Load tasks when the page loads
  window.onload = function() {
      const taskList = document.getElementById('todo-taskList');

      showLoadingSpinner(); // Show spinner while loading tasks

      // Load tasks from Firestore
      db.collection('todo').orderBy('order').onSnapshot(snapshot => {
          taskList.innerHTML = ''; // Clear existing tasks

          snapshot.forEach(doc => {
              const task = doc.data();
              const taskId = doc.id;

              // Check if task.timestamp exists and is valid before using it
              const timestamp = task.timestamp ? task.timestamp.toDate() : new Date();

              // Create task item
              const taskItem = document.createElement('li');
              taskItem.setAttribute('data-id', taskId);
              taskItem.className = `todo-item ${task.completed ? 'completed' : ''}`;

              const dragHandle = document.createElement('span');
              dragHandle.className = 'todo-drag-handle';
              dragHandle.textContent = '';

              const checkbox = document.createElement('input');
              checkbox.type = 'checkbox';
              checkbox.checked = task.completed;
              checkbox.addEventListener('change', () => toggleTaskCompleted(taskItem, checkbox.checked));

              const span = document.createElement('span');
              span.textContent = task.task;
              span.className = 'todo-span';

              const editButton = document.createElement('button');
              editButton.textContent = 'Edit';
              editButton.className = 'todo-edit';
              editButton.addEventListener('click', () => editTask(taskItem, task.task));

              const deleteButton = document.createElement('button');
              deleteButton.textContent = 'Delete';
              deleteButton.className = 'todo-delete';
              deleteButton.addEventListener('click', () => deleteTask(taskItem));

              const timestampSpan = document.createElement('span');
              timestampSpan.textContent = formatDate(timestamp);
              timestampSpan.className = 'todo-timestamp';

              taskItem.appendChild(dragHandle);
              taskItem.appendChild(checkbox);
              taskItem.appendChild(span);
              taskItem.appendChild(editButton);
              taskItem.appendChild(deleteButton);
              taskItem.appendChild(timestampSpan);

              taskList.appendChild(taskItem);
          });

          hideLoadingSpinner(); // Hide spinner after tasks are loaded

          // Initialize Sortable after tasks are loaded
          new Sortable(taskList, {
              handle: '.todo-drag-handle',
              animation: 150,
              onEnd: updateTaskOrder,
              swapThreshold: 0.5, // Percentage of swap overlap needed to trigger swap
              draggable: '.todo-item' // Specify which items are draggable
          });
      }, error => {
          console.error('Error loading tasks: ', error);
          hideLoadingSpinner(); // Hide spinner in case of error
      });
  };
</script>
<!-------------------------SCRIPT FOR THE DIRECT CHAT------------------------------------------------->
<!-- <script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/9.1.1/firebase-firestore.js"></script> -->

<script>

// References to Firestore collections
const chatCollection = db.collection('adminChat');
const contactsCollection = db.collection('contacts');
const usersCollection = db.collection('users');

const currentUserId = 'uniqueUserId';  // Replace with dynamic user ID as needed

let notificationCount = 0;
let isChatWindowFocused = true; // Flag to check if the chat window is focused



// Function to render chat messages
function renderMessage(doc) {
  const chatMessages = document.getElementById('chatMessages');
  const message = document.createElement('div');
  const currentUser = localStorage.getItem('userName');
  const messageUser = doc.data().name;
 
  message.classList.add('direct-chat-msg');
 
  if (currentUser !== messageUser) {
    message.classList.add('left'); // Other users' messages on the left
  } else {
    message.classList.add('right'); // Current user's messages on the right
  }
 
  // Check if timestamp exists and is not null
  let timestamp = doc.data().timestamp;
  let timestampText = timestamp ? new Date(timestamp.toDate()).toLocaleString() : 'N/A';
 
  message.innerHTML = `
<div class="direct-chat-infos clearfix ${currentUser === messageUser ? 'right' : 'left'}">
<span class="direct-chat-name">${messageUser}</span>
<span class="direct-chat-timestamp">${timestampText}</span>
</div>
<img class="direct-chat-img" id="avatar" src="${doc.data().avatar}" alt="message user image">
<div class="direct-chat-text">
      ${doc.data().message}
</div>
<div class="chat-buttons">
      ${currentUser === messageUser ? `
<button class="edit-button" data-id="${doc.id}"><i class="fas fa-pencil-alt"></i></button>
<button class="delete-button" data-id="${doc.id}"><i class="fas fa-trash-alt"></i></button>
      ` : ''}
</div>
  `;
  chatMessages.appendChild(message);
 
  // Add event listeners for edit and delete buttons
  const editButton = message.querySelector('.edit-button');
  const deleteButton = message.querySelector('.delete-button');
 
  if (editButton) {
    editButton.addEventListener('click', () => {
      editMessage(doc.id, doc.data().message);
    });
  }
 
  if (deleteButton) {
    deleteButton.addEventListener('click', () => {
      deleteMessage(doc.id);
    });
  }
}


// Function to handle sending chat message
function sendMessage() {
  const chatInput = document.getElementById('chatInput');
  const message = chatInput.value.trim();
  let userName = localStorage.getItem('userName');
  let userEmail = localStorage.getItem('userEmail');
 
  // Prompt for name and email if not stored in localStorage
  if (!userName) {
    userName = prompt('Please enter your name:');
    if (userName) {
      localStorage.setItem('userName', userName);
    }
  }
 
  if (!userEmail) {
    userEmail = prompt('Please enter your email:');
    if (userEmail) {
      localStorage.setItem('userEmail', userEmail);
    }
  }
 
  // Register user in the database if not already registered
  if (userName && userEmail) {
    usersCollection.doc(currentUserId).set({
      userId: currentUserId,
      name: userName,
      email: userEmail,
      avatar: '../admin/dist/img/userIcon.png'  // Change to your user's avatar URL
    }, { merge: true }).then(() => {
      console.log('User registered successfully');
    }).catch(error => {
      console.error('Error registering user: ', error);
    });
  }
 
  // Send message to Firestore
  if (userName && message !== '') {
    chatCollection.add({
      userId: currentUserId,
      name: userName, // Use the user's stored name
      message: message,
      timestamp: firebase.firestore.FieldValue.serverTimestamp(),
      avatar: '../admin/dist/img/userIcon.png'  // Change to your user's avatar URL
    }).then(() => {
      chatInput.value = '';
    }).catch(error => {
      console.error('Error adding message: ', error);
    });
  }
}
// Function to load and render chat messages from Firestore
function loadAndRenderChatMessages() {
  chatCollection.orderBy('timestamp').onSnapshot(snapshot => {
    const chatMessages = document.getElementById('chatMessages');
    chatMessages.innerHTML = ''; // Clear previous messages
    snapshot.forEach(doc => {
      renderMessage(doc);
    });

    if (!isChatWindowFocused) {
      updateNotificationCount(snapshot.size - chatMessages.childElementCount);
    }
  });
}

// Function to update the notification count
function updateNotificationCount(count) {
  const notificationCountElement = document.getElementById('notificationCount');
  notificationCount += count;
  notificationCountElement.textContent = notificationCount;
  if (notificationCount > 0) {
    notificationCountElement.style.display = 'inline';
  } else {
    notificationCountElement.style.display = 'none';
  }
}

// Function to reset the notification count
function resetNotificationCount() {
  notificationCount = 0;
  document.getElementById('notificationCount').textContent = notificationCount;
  document.getElementById('notificationCount').style.display = 'none';
}

// Event listener for send button click
document.getElementById('sendButton').addEventListener('click', sendMessage);

const adminChatCollection = db.collection('adminChat');

// Function to display welcome message
function displayWelcomeMessage(userName) {
  const chatMessages = document.getElementById('chatMessages');
  const welcomeMessage = document.createElement('div');
  welcomeMessage.classList.add('welcome-message');
  welcomeMessage.innerHTML = `
    <div class="alert alert-info" role="alert">
      Welcome back, ${userName}!
    </div>
  `;
  chatMessages.prepend(welcomeMessage); // Add the welcome message at the top
}


// Function to render each chat message in contacts list
function renderChatMessage(message) {
  const contactsList = document.getElementById('contactsList');
  const li = document.createElement('li');
  li.innerHTML = `
    <a href="#">
      <img class="contacts-list-img" src="${message.avatar}" alt="User Image">
      <div class="contacts-list-info">
        <span class="contacts-list-name">${message.name}</span> <!-- Use message.name instead of message.sender -->
        <span class="contacts-list-msg">${message.message}</span>
        <small class="contacts-list-date float-right">${message.timestamp.toDate().toLocaleString()}</small>
      </div>
    </a>
  `;
  contactsList.appendChild(li);
}

// Function to fetch admin chat messages from Firestore and render them
function fetchAndRenderAdminChatMessages() {
  adminChatCollection.orderBy('timestamp').get().then((querySnapshot) => {
    const contactsList = document.getElementById('contactsList');
    contactsList.innerHTML = ''; // Clear previous contacts
    querySnapshot.forEach((doc) => {
      // Assuming each document in 'adminChat' collection has 'sender', 'message', 'timestamp', and 'avatar' fields
      const message = {
        name: doc.data().name, // Use doc.data().name instead of doc.data().sender
        message: doc.data().message,
        timestamp: doc.data().timestamp,
        avatar: doc.data().avatar
      };
      renderChatMessage(message);
    });
  }).catch((error) => {
    console.error('Error fetching admin chat messages: ', error);
  });
}


function triggerFileInput() {
  document.getElementById('avatarInput').click();

  document.getElementById('avatarInput').addEventListener('change', function() {
  const file = this.files[0];
  if (file) {
    const storageRef = firebase.storage().ref();
    const userAvatarRef = storageRef.child(`avatars/${currentUserId}.jpg`);
    
    userAvatarRef.put(file).then(snapshot => {
      return snapshot.ref.getDownloadURL();
    }).then(url => {
      localStorage.setItem('userAvatar', url);
      return usersCollection.doc(currentUserId).update({
        avatar: url
      });
    }).then(() => {
      console.log('User profile updated successfully');
      location.reload(); // Reload the page to apply changes
    }).catch(error => {
      console.error('Error updating user profile: ', error);
    });
  }
});
}

// Call fetchAndRenderAdminChatMessages to load chat messages when the page loads
fetchAndRenderAdminChatMessages();

// Function to toggle contacts pane visibility
function toggleContactsPane() {
  const contactsPane = document.getElementById('contactsList');
  const buttonIcon = document.getElementById('toggleContactsPaneBtn').querySelector('i');

  if (contactsPane.style.display === 'none') {
    contactsPane.style.display = 'block';
    buttonIcon.classList.remove('fa-comments');
    buttonIcon.classList.add('fa-times'); // Change icon to 'close' icon
    fetchAndRenderAdminChatMessages(); // Refresh contacts pane immediately
  } else {
    contactsPane.style.display = 'none';
    buttonIcon.classList.remove('fa-times');
    buttonIcon.classList.add('fa-comments'); // Change icon back to 'comments' icon
  }
}

// Event listener for the contacts toggle button
document.getElementById('toggleContactsPaneBtn').addEventListener('click', toggleContactsPane);

// Example function to load contacts (replace with your implementation)
function loadContacts() {
  // Implement your logic to fetch and render contacts
  // For example, fetch contacts from Firestore or an API
  // Render contacts into the 'contactsList' element
}

// Function to edit a chat message
function editMessage(messageId, currentMessage) {
  const newMessage = prompt('Edit your message:', currentMessage);
  if (newMessage !== null) {
    chatCollection.doc(messageId).update({
      message: newMessage,
      timestamp: firebase.firestore.FieldValue.serverTimestamp()
    }).then(() => {
      console.log('Message updated successfully');
    }).catch(error => {
      console.error('Error updating message: ', error);
    });
  }
}
// Function to delete a chat message
function deleteMessage(messageId) {
  if (confirm('Are you sure you want to delete this message?')) {
    chatCollection.doc(messageId).delete().then(() => {
      console.log('Message deleted successfully');
    }).catch(error => {
      console.error('Error deleting message: ', error);
    });
  }
}

// Function to handle window focus and blur events
window.addEventListener('focus', () => {
  isChatWindowFocused = true;
  resetNotificationCount();
});

window.addEventListener('blur', () => {
  isChatWindowFocused = false;
});

// Check if user's name is already stored in localStorage
if (localStorage.getItem('userName')) {
  displayWelcomeMessage(localStorage.getItem('userName')); // Display welcome message if name is already stored
}

// Function to display welcome message
function displayWelcomeMessage(userName) {
  const chatMessages = document.getElementById('chatMessages');
  const welcomeMessage = document.createElement('div');
  welcomeMessage.classList.add('welcome-message');
  welcomeMessage.innerHTML = `
    <div class="alert alert-info" role="alert">
      Welcome back, ${userName}!
    </div>
  `;
  chatMessages.prepend(welcomeMessage); // Add the welcome message at the top
}

// Load and render chat messages immediately
loadAndRenderChatMessages();

// Function to update user profile
function updateUserProfile() {
  let newUserName = prompt('Enter your new username:', localStorage.getItem('userName'));
  let newUserAvatar = prompt('Enter your new avatar URL:', localStorage.getItem('userAvatar') || 'dist/img/user1-128x128.jpg');

  if (newUserName) {
    localStorage.setItem('userName', newUserName);
  }

  if (newUserAvatar) {
    localStorage.setItem('userAvatar', newUserAvatar);
  }

  // Update user in Firestore
  usersCollection.doc(currentUserId).update({
    name: newUserName,
    avatar: newUserAvatar
  }).then(() => {
    console.log('User profile updated successfully');
    location.reload(); // Reload the page to apply changes
  }).catch(error => {
    console.error('Error updating user profile: ', error);
  });
}

// Add event listener to the update profile button
document.getElementById('updateProfileButton').addEventListener('click', updateUserProfile);

// Function to handle window focus and blur events
window.addEventListener('focus', () => {
  isChatWindowFocused = true;
  resetNotificationCount();
});

window.addEventListener('blur', () => {
  isChatWindowFocused = false;
});

// Check if user's name is already stored in localStorage
if (localStorage.getItem('userName')) {
  displayWelcomeMessage(localStorage.getItem('userName')); // Display welcome message if name is already stored
}

// Load and render chat messages immediately
loadAndRenderChatMessages();

// Call the function to check and register the user
checkAndRegisterUser();
</script>

<!-- Include Firebase and your script as modules -->
<script type="module">
  import { initializeApp } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-app.js';
  import { getFirestore, collection, getDocs, addDoc, updateDoc, deleteDoc, doc, serverTimestamp, query, orderBy, onSnapshot } from 'https://www.gstatic.com/firebasejs/9.0.0/firebase-firestore.js';

  // Firebase configuration
  const firebaseConfig = {
    apiKey: "YOUR_API_KEY",
    authDomain: "todo-99061.firebaseapp.com",
    projectId: "todo-99061",
    storageBucket: "todo-99061.appspot.com",
    messagingSenderId: "762103887675",
    appId: "1:762103887675:web:1688aaa42705037045691e"
  };

  // Initialize Firebase
  const app = initializeApp(firebaseConfig);
  const db = getFirestore(app);

  const loadingSpinner = document.getElementById('loadingSpinner');

  // Function to show loading spinner
  function showLoadingSpinner() {
    loadingSpinner.style.display = 'block';
  }

  // Function to hide loading spinner
  function hideLoadingSpinner() {
    loadingSpinner.style.display = 'none';
  }

  // Function to add task to Firestore
  async function addTask() {
    const taskInput = document.getElementById('todo-taskInput');
    const taskText = taskInput.value.trim();

    if (taskText === '') {
      alert('The input field is empty, type to add task!');
      return; // Exit function if input is empty
    }

    showLoadingSpinner(); // Show spinner while adding task

    try {
      const snapshot = await getDocs(collection(db, 'todo'));
      const order = snapshot.size; // Use number of tasks as the order

      await addDoc(collection(db, 'todo'), {
        task: taskText,
        completed: false,
        order: order,
        timestamp: serverTimestamp()
      });

      taskInput.value = '';
      taskInput.focus();
    } catch (error) {
      console.error('Error adding task: ', error);
    } finally {
      hideLoadingSpinner(); // Hide spinner after task is added
    }
  }

  // Function to toggle task completion status
  async function toggleTaskCompleted(taskItem, completed) {
    const taskId = taskItem.getAttribute('data-id');
    try {
      await updateDoc(doc(db, 'todo', taskId), { completed: completed });
      taskItem.classList.toggle('completed', completed);
    } catch (error) {
      console.error('Error updating task: ', error);
    }
  }

  // Function to edit a task in Firestore
  async function editTask(taskItem, currentTaskText) {
    const taskId = taskItem.getAttribute('data-id');
    const newTaskText = prompt('Edit Task:', currentTaskText);
    if (newTaskText && newTaskText.trim() !== '') {
      try {
        await updateDoc(doc(db, 'todo', taskId), {
          task: newTaskText.trim(),
          timestamp: serverTimestamp()
        });
        taskItem.querySelector('.todo-span').textContent = newTaskText.trim();
        taskItem.querySelector('.todo-timestamp').textContent = formatDate(new Date());
      } catch (error) {
        console.error('Error updating task: ', error);
      }
    }
  }

  // Function to delete a task from Firestore
  async function deleteTask(taskItem) {
    const taskId = taskItem.getAttribute('data-id');
    try {
      await deleteDoc(doc(db, 'todo', taskId));
      taskItem.remove();
    } catch (error) {
      console.error('Error deleting task: ', error);
    }
  }

  // Function to format date as "DD/MM/YYYY HH:MM:SS"
  function formatDate(date) {
    const options = {
      day: '2-digit',
      month: '2-digit',
      year: 'numeric',
      hour: '2-digit',
      minute: '2-digit',
      second: '2-digit'
    };
    return date.toLocaleDateString('en-GB', options);
  }

  // Function to handle updating task order after drag and drop
  async function updateTaskOrder(event) {
    const { oldIndex, newIndex } = event;
    const taskList = document.getElementById('todo-taskList');
    const tasks = taskList.querySelectorAll('.todo-item');

    // Reorder DOM elements
    const draggedTask = tasks[oldIndex];
    const siblingTask = tasks[newIndex];

    if (!draggedTask || !siblingTask) {
      console.error('Invalid drag operation.');
      return;
    }

    taskList.insertBefore(draggedTask, siblingTask);

    // Update task order in Firestore
    const batch = db.batch();

    tasks.forEach((task, index) => {
      const taskId = task.getAttribute('data-id');
      const taskRef = doc(db, 'todo', taskId);
      batch.update(taskRef, { order: index });
    });

    try {
      await batch.commit();
      console.log('Task order updated successfully.');
    } catch (error) {
      console.error('Error updating task order: ', error);
    }
  }

  // Load tasks when the page loads
  window.onload = function () {
    const taskList = document.getElementById('todo-taskList');

    showLoadingSpinner(); // Show spinner while loading tasks

    // Load tasks from Firestore
    const q = query(collection(db, 'todo'), orderBy('order'));
    onSnapshot(q, snapshot => {
      taskList.innerHTML = ''; // Clear existing tasks

      snapshot.forEach(doc => {
        const task = doc.data();
        const taskId = doc.id;

        // Check if task.timestamp exists and is valid before using it
        const timestamp = task.timestamp ? task.timestamp.toDate() : new Date();

        // Create task item
        const taskItem = document.createElement('li');
        taskItem.setAttribute('data-id', taskId);
        taskItem.className = `todo-item ${task.completed ? 'completed' : ''}`;

        const dragHandle = document.createElement('span');
        dragHandle.className = 'todo-drag-handle';
        dragHandle.textContent = '';

        const checkbox = document.createElement('input');
        checkbox.type = 'checkbox';
        checkbox.checked = task.completed;
        checkbox.addEventListener('change', () => toggleTaskCompleted(taskItem, checkbox.checked));

        const span = document.createElement('span');
        span.textContent = task.task;
        span.className = 'todo-span';

        const editButton = document.createElement('button');
        editButton.textContent = 'Edit';
        editButton.className = 'todo-edit';
        editButton.addEventListener('click', () => editTask(taskItem, task.task));

        const deleteButton = document.createElement('button');
        deleteButton.textContent = 'Delete';
        deleteButton.className = 'todo-delete';
        deleteButton.addEventListener('click', () => deleteTask(taskItem));

        const timestampSpan = document.createElement('span');
        timestampSpan.textContent = formatDate(timestamp);
        timestampSpan.className = 'todo-timestamp';

        taskItem.appendChild(dragHandle);
        taskItem.appendChild(checkbox);
        taskItem.appendChild(span);
        taskItem.appendChild(editButton);
        taskItem.appendChild(deleteButton);
        taskItem.appendChild(timestampSpan);

        taskList.appendChild(taskItem);
      });

      hideLoadingSpinner(); // Hide spinner after tasks are loaded

      // Initialize Sortable after tasks are loaded
      new Sortable(taskList, {
        handle: '.todo-drag-handle',
        animation: 150,
        onEnd: updateTaskOrder,
        swapThreshold: 0.5, // Percentage of swap overlap needed to trigger swap
        draggable: '.todo-item' // Specify which items are draggable
      });
    }, error => {
      console.error('Error loading tasks: ', error);
      hideLoadingSpinner(); // Hide spinner in case of error
    });
  };
</script>

<script src="js/sidebar.js"></script>
<script src="js/sidebar_role.js"></script>

<script src="js/revenueBar.js"></script>

</body>
</html>

<?php /**PATH C:\xampp2\htdocs\Monday 29 July 2024\resources\views/admindash.blade.php ENDPATH**/ ?>