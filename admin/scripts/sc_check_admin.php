<?php
$admin = 0;
if (isset($_SESSION['email_aplans'])) {
    if (isset($_SESSION['role_aplans']) && $_SESSION['role_aplans'] == 2) { 
        $admin = 1;
        
    }
}
