<?php
// Verificação de credenciais de acesso à área de administração
require_once "admin/scripts/sc_check_admin.php";

?>
<!-- Sidebar -->

<ul class="navbar-nav bg-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">



    <li class="nav-item active mt-auto ">
        <ul class="navbar-nav bg-primary sidebar-dark">
        
            
            <hr class="sidebar-divider my-0">
            <?php
            if ($admin == 1) {
                echo '<li class="nav-item active">
                <a class="nav-link" href="admin/pages/users.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Admin Panel</span></a>
            </li>';
            }

            ?>
            <hr class="sidebar-divider my-0">
            <li class="nav-item active ">
                <a class="nav-link" href="../../scripts/sc_logout.php">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                    <span>Log Out</span></a>
            </li>
            <hr class="sidebar-divider my-0">
        </ul>
    </li>
    <!-- Sidebar Toggler (Sidebar)
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div> -->

</ul>
<!-- End of Sidebar -->