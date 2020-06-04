<?php

function new_db_connection()
{
    //Variáveis
    $hostname = "localhost";
    $username = "root";
    $password = "";
    $dbname   = "aplans";

    //Conexão
    $local_link = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$local_link) {
        die("Conection Failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($local_link, "utf8_general_ci");

    return $local_link;
}
