<?php

$conn = mysqli_connect(

    "sqlXXX.infinityfree.com",
    "usuario",
    "password",
    "nombre_bd"

);

if(!$conn){

    die("Error conexión");
}
?>