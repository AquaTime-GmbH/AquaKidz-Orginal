 <!-- organisation der url -->
 <?php 

/* einbingung der database connection*/
include  $url_helper .'include/database.php';
session_start();
?>

<!DOCTYPE html>
<head>
<title>AquaKidz</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap,w3schools,fotawsome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
</head>
<body>

<!--navbar wird eingebunden-->
<?php
include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>


  
<?php

  $kurs_text = $_SESSION['kurs_text'];
  $name_kind = $_SESSION['name_kind'];
  $vorname_kind = $_SESSION['vorname_kind'];
  $geburtstag_kind = $_SESSION['geburtstag_kind'];
  
   ?>
   <?= $kurs_text ?>
   <?= $name_kind ?>
   <?= $vorname_kind ?>
   <?= $geburtstag_kind ?>








<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>