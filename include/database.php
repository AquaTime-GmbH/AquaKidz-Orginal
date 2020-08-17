<?php
//DATENBANK

//HOST ONLINE
$db_host = "localhost";

//USER
$db_user = "web156";

//PASSWORT
$db_password = "tpVjHF1R";

//DATENBANK
$db_database = "usr_web156_22";

////////////////////
//NEWS
///////////////////
//AquaTime - NEWS
$con_news_aquatime_anzeigen = new mysqli($db_host, $db_user, $db_password, $db_database);

/// News Einzel Anzeigen /// //Benutzt
$con_news_voll_aquatime_anzeigen = new mysqli($db_host, $db_user, $db_password, $db_database);
/// News Einzel Anzeigen + 1 Ansicht /// //Benutzt
$con_news_ansichten_aquatime_anzeigen = new mysqli($db_host, $db_user, $db_password, $db_database);
/// News Empfehlung + 1  /// //Benutzt
$con_news_Empfehlung_aquatime_emp1 = new mysqli($db_host, $db_user, $db_password, $db_database);

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


//DATENBANK ERROR HANDELING FOR 

if ($con_mysqli_connect -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con_mysqli_connect -> connect_error;
  exit();
}

//DATENBANK ERROR HANDELING FOR 

if ($pdo_PDO-> connect_errno) {
  echo "Failed to connect to MySQL: " . $pdo_PDO -> connect_error;
  exit();
}

//DATENBANK ERROR HANDELING FOR MYSQLI

if ($con_mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $con_mysqli -> connect_error;
    exit();
  }
