<?php
// Verificação de credenciais de acesso à área de administração
require_once "../scripts/sc_check_admin.php";

if ($admin == 1) {
?>

    <!-- Sidebar -->

    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
            <div class="sidebar-brand-icon rotate-n-15">
                <i class="fas fa-laugh-wink"></i>
            </div>
            <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
        </a>

        <!-- Divider -->
        <hr class="sidebar-divider my-0">

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active">
            <a class="nav-link" href="#">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Utilizadores</span></a>
        </li>

        <li class="nav-item active">
            <a class="nav-link" href="../../index.php">
                <i class="fa fa-user fa-fw"></i>
                <span>Voltar área pública</span></a>
        </li>
        <!-- Divider -->
        <hr class="sidebar-divider">

      
        <li class="nav-item active mt-auto">
            <a class="nav-link" href="../../scripts/sc_logout.php">
                <i class="fas fa-sign-out-alt fa-sm fa-fw"></i>
                <span>Log Out</span></a>
        </li>

        <!-- Sidebar Toggler (Sidebar)
        <div class="text-center d-none d-md-inline">
            <button class="rounded-circle border-0" id="sidebarToggle"></button>
        </div> -->

    </ul>
    <!-- End of Sidebar -->
<?php
} else {
    header("Location: ../../index.php");
}
?>