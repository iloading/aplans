<?php
$admin = 0;
if (isset($_SESSION['username'])) {
    if (isset($_SESSION['role']) && $_SESSION['role'] == 1) { 
        $admin = 1;
    }
}
