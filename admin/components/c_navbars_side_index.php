<?php
// Verificação de credenciais de acesso à área de administração
require_once "admin/scripts/sc_check_admin.php";

?>
<!-- Sidebar -->

<ul class="navbar-nav sidebar sidebar-dark accordion toggled" style="background-color: #3C5E77;" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
        <div class="sidebar-brand-icon">
            <img class="w-50 h-50" src="images/logo/aplans_small_logo_green.png">
        </div>
        <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
    </a>

    
    



    <li class="nav-item active mt-auto ">
        <ul class="navbar-nav sidebar-dark" style="background-color: #3C5E77;">
        
            
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
            <li class="nav-item active " >
                <a class="nav-link" href="scripts/sc_logout.php">
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