<?php
//DATENBANK//

//HOST
$db_host = "localhost";

//USER
$db_user = "root";

//PASSWORT
$db_password = "root";

//DATENBANK
$db_database = "AquaTime-Neu";


///////////
//VERSION 1
///////////
$con_mysqli_connect = mysqli_connect("$db_host", "$db_user", "$db_password", "$db_database");

///////////
//VERSION 2
///////////
$pdo_PDO = new PDO('mysql:host=' . $db_host . ';dbname=' . $db_database . '', "$db_user", "$db_password");

///////////
//VERSION 3
///////////
$con_mysqli = new mysqli($db_host, $db_user, $db_password, $db_database);

if ($con_mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con_mysqli -> connect_error;
    exit();
  }