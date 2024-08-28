document.addEventListener("DOMContentLoaded", function () {
    const sidebar = document.getElementById('sidebar');
    const username = localStorage.getItem('admin_username');

    if (sidebar) {
        if (!username) {
            redirectToLogin(); 
            return; 
        } else {
            sidebar.innerHTML = `
                <!-- Brand Logo -->
                <a href="admindash" class="brand-link">
                <img src="../admin/dist/img/right.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">AtosFood</span>
                </a>
    
                <!-- Sidebar -->
                <div class="sidebar">
                <!-- Sidebar user panel (optional) -->
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                    <img src="../admin/dist/img/userIcon.png" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                    <a href="admindash" class="d-block">${username}</a>
                    </div>
                </div>
    
                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                    <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                    <div class="input-group-append">
                        <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                        </button>
                    </div>
                    </div>
                </div>
    
                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                    <!-- Add icons to the links using the .nav-icon class
                        with font-awesome or any other icon font library -->
                    <li class="nav-item menu-open">
                        <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                            <i class=""></i>
                        </p>
                        </a>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon ion-ios-compose"></i>
                        <p>
                        Manage Orders
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="orderhistory" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Order</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon ion-pizza"></i>
                        <p>
                        Manage Menu
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="menulist" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Menu</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon ion-android-person"></i>
                        <p>
                        Manage Customers
                            <i class="right fas fa-angle-left"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="customers" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>View Customers</p>
                            </a>
                        </li>
                        </ul>
                    </li>
    
                    <!-- Authorized Users-->
                    <li class="nav-item" id="container_block"></li>
                
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                        <i class="nav-icon ion-android-globe"></i>
                        <p>
                            Website Content
                            <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="home" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Home</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="menu" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Menu</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="gallery" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Gallery</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="about" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>About Us</p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="contact" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Contact</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                
                    <li class="nav-item">
                        <a href="calendar" class="nav-link">
                        <i class="nav-icon ion-calendar"></i>
                        <p>
                            Calendar
                            <span class="badge badge-info right">2</span>
                        </p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="" class="nav-link">
                        <i class="nav-icon ion-android-settings"></i>
                        <p>
                        Settings
                        <i class="fas fa-angle-left right"></i>
                        </p>
                        </a>
                        <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>Profile</p>
                            </a>
                        </li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a href="adminlogin" class="nav-link" onclick="signOut()">
                            <i class="nav-icon ion-android-exit"></i>
                            <p>
                                Sign Out
                            </p>
                        </a>
                    </li>
                    </li>
                </li>
                </ul>
                </nav>
                
                <!---- /.sidebar-menu -->
                </div>
                <!-- /.sidebar -->
            ;`
        }
    } else {
        redirectToLogin();
    }
})

// clear session
function signOut() {
    localStorage.removeItem('role');
    localStorage.removeItem('username');
    redirectToLogin();
}

// login page if not logged in
function redirectToLogin() {
    window.location.href = 'adminlogin';
}