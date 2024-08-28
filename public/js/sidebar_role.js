document.addEventListener('DOMContentLoaded', function() {
    const role = localStorage.getItem('admin_role');
    const containerBlock = document.getElementById('container_block');
 
    if (containerBlock) {
        if (role === 'admin_admin') {
            containerBlock.innerHTML = `
                <a href="#" class="nav-link blocking">
                    <i class="nav-icon ion-person-add"></i>
                    <p>
                    Authorised Users
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                    <a href="admintable" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add User</p>
                    </a>
                    </li>
                    <li class="nav-item">
                    <a href="admintable" class="nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>View User</p>
                    </a>
                    </li>
                </ul>
            `;
        } else if (role === 'admin_user') {
            containerBlock.innerHTML = `
                <a href="#" class="nav-link" style="pointer-events: none; user-select:none;">
                    <i class="nav-icon ion-person-add"></i>
                    <p>
                    Authorised Users
                    <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
            `;
        }
    }
});