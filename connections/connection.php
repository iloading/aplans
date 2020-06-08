<?php

function new_db_connection()
{
    //Variáveis
    $hostname = "labmm.clients.ua.pt";
    $username = "deca_19L4_MP_12_web";
    $password = "FGEcjv9q";
    $dbname   = "deca_19L4_MP_12";

    //Conexão
    $local_link = mysqli_connect($hostname, $username, $password, $dbname);

    if (!$local_link) {
        die("Conection Failed: " . mysqli_connect_error());
    }

    mysqli_set_charset($local_link, "utf8_general_ci");

    return $local_link;
}
