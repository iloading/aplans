<?php
ini_set('display_errors', true);
error_reporting(E_ALL);
function new_db_connection()
{
    // Define working environment
    //$env = "labmm";
    $env = "localhost";

    // Variables for the database connection
    if ($env == "labmm") {
        $hostname = 'labmm.clients.ua.pt';
        $username = "deca_19L4_53_web";
        $password = "126OYvG1";
        $dbname = "deca_19l4_53";
    }
    if ($env == "localhost") {
        $hostname = 'localhost';
        $username = "root";
        $password = "";
        $dbname = "aplans";
    }

// Makes the connection
    $local_link = mysqli_connect($hostname, $username, $password, $dbname);

// If it fails to connect then die and show errors
    if (!$local_link) {
        die("Connection failed: " . mysqli_connect_error());
    }

// Define charset to avoid special chars errors
    mysqli_set_charset($local_link, "utf8_general_ci");

    // Return the link
    return $local_link;
}
