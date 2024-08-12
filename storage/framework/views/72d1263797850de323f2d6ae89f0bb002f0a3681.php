<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Atos Food | Dashboard 2</title>
 
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
  <link rel="stylesheet" href="/css/menulist.css">
  <link rel="stylesheet" href="/css/searchTable.css">
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<div class="wrapper">
 
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
            <h1 class="m-0">Menu List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Menu List</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
 
 
    <div id="menuItems" class="">
        <div class="popup-content">
            <span class="close" onclick="closePopup('menuItems')">&times;</span>
            <div class="wrap">
              <div class="search">
                  <input type="text" class="searchTerm" placeholder="What are you looking for?">
                  <button type="submit" class="searchButton" id="searchButton">
                    <i class="fa fa-search"></i>
                </button>
              </div>
            </div>
 
 
            <button onclick="showAddItemForm()">Add Item</button>
            <div id="addItemForm" style="display:none;">
                <form id="itemForm">
                    <input type="text" id="itemName" name="itemName" placeholder="Item Name" required>
                    <textarea id="itemDescription" name="itemDescription" placeholder="Item Description" required></textarea>
                    <input type="text" id="itemSpecs" name="itemSpecs" placeholder="Item Specifications" required>
                    <input type="text" id="itemStock" name="itemStock" placeholder="Item Quantity" required>
                    <input type="number" id="itemPrice" name="itemPrice" placeholder="Item Price" required>
                    <select id="itemCategory" name="itemCategory" required>
                        <option value="Breakfast">Breakfast</option>
                        <option value="Lunch">Lunch</option>
                        <option value="Snacks">Snacks</option>
                        <option value="Desserts">Desserts</option>
                        <option value="Beverages">Beverages</option>
                    </select>
                    <input type="file" id="itemImage" name="itemImage" required>
                    <button type="submit">Add Item</button>
                </form>
            </div>
            <div class="table-container">
                <table id="itemsTable" class="global_table_search">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Specifications</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Category</th>
                            <th>Image</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Rows will be dynamically inserted here -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
 
    <div id="editItemForm" class="popup">
        <div class="popup-content">
            <span class="close" onclick="closePopup('editItemForm')">&times;</span>
            <h2>Edit Item</h2>
            <form id="editForm">
                <input type="hidden" id="editItemId" name="editItemId">
                <input type="text" id="editItemName" name="editItemName" placeholder="Item Name" required>
                <textarea id="editItemDescription" name="editItemDescription" placeholder="Item Description" required></textarea>
                <input type="text" id="editItemSpecs" name="editItemSpecs" placeholder="Item Specifications" required>
                <input type="number" id="editItemStock" name="editItemStock" placeholder="Item Quantity" required>
                <input type="number" id="editItemPrice" name="editItemPrice" placeholder="Item Price" required>
                <select id="editItemCategory" name="editItemCategory" class="selectCategory" required>
                    <option value="Breakfast">Breakfast</option>
                    <option value="Lunch">Lunch</option>
                    <option value="Snacks">Snacks</option>
                    <option value="Desserts">Desserts</option>
                    <option value="Beverages">Beverages</option>
                </select>
                <input type="file" id="editItemImage" name="editItemImage">
                <button type="submit" class="update_button">Update Item</button>
            </form>
            <div id="editItemForm" style="display: none;">
    <!-- Other form inputs -->
    <img id="editItemCurrentImage" src="" alt="Current Item Image" width="100">
</div>
 
        </div>
    </div>
 
    <script src="scripts.js"></script>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
 
  <!-- Main Footer -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2014-2021 <a href="#">Atos Food</a>.</strong>
    All rights reserved.
    <div class="float-right d-none d-sm-inline-block">
      <b>Version</b> 3.1.0
    </div>
  </footer>
</div>
<!-- ./wrapper -->
 
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../admin/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../admin/dist/js/adminlte.js"></script>
 
<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="../admin/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../admin/plugins/raphael/raphael.min.js"></script>
<script src="../admin/plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../admin/plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../admin/plugins/chart.js/Chart.min.js"></script>
<script src="../admin/plugins/jquery-knob/jquery.knob.min.js"></script>
 
<!-- AdminLTE for demo purposes -->
<script src="../admin/dist/js/demo.js"></script>
<script src="js/sidebar.js"></script>
<script src="js/sidebar_role.js"></script>
<script src="../js/menulist.js"></script>
<script src="js/searchTable.js"></script>
<!-- menu list -->
<script src="/admin/script.js"></script>
<script src="../admin/dist/js/script.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../admin/dist/js/pages/dashboard2.js"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\Wednesday\resources\views/menulist.blade.php ENDPATH**/ ?>