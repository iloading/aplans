<?php
// Verificação de credenciais de acesso à área de administração
require_once "../scripts/sc_check_admin.php";

if ($admin == 1) {
?>

    <!-- Sidebar -->

    <ul class="navbar-nav sidebar sidebar-dark accordion toggled" style="background-color: #3C5E77;" id="accordionSidebar">

        <!-- Sidebar - Brand -->
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../index.php">
            <div class="sidebar-brand-icon">
                <img class="w-50 h-50" src="../../images/logo/aplans_small_logo_green.png">
            </div>
        </a>

        

        <!-- Nav Item - Dashboard -->
        <li class="nav-item active mt-4">
            <a class="nav-link" href="../pages/users.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Utilizadores</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        <li class="nav-item active">
            <a class="nav-link" href="../pages/eventos.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Eventos</span></a>
        </li>
        <hr class="sidebar-divider my-0">
        

        


        <li class="nav-item active mt-auto ">
            <ul class="navbar-nav sidebar-dark" style="background-color: #3C5E77;" id="accordionSidebar">
                <hr class="sidebar-divider my-0">
                <li class="nav-item active">
                    <a class="nav-link" href="../../index.php">
                        <i class="fa fa-user fa-fw"></i>
                        <span>Voltar área pública</span></a>
                </li>
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
<?php
} else {
    header("Location: ../../index.php");
}
?>