 <!-- organisation der url -->
 <?php 
$url_helper= "";
/* einbingung der database connection*/
include  $url_helper .'include/database.php';
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
        <link href="font/css/all.css" rel="stylesheet"> <!--load all styles -->

</head>

<body>

<!--navbar wird eingebunden-->
<?php
include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>


<div class="container">






    <h2 class="überschrit-imp" style="text-align:center;">Impressum</h2>

        <p class="text-imp" style="margin-top:30px;">
        ist ein Unternehmen der AquaTime GmbH, Bahnhofstrasse 32, 6403 Küssnacht am Rigi</br>

CHE-441.184.709 Handelsregister des Kantons Schwyz, Schweiz

              </p>
    

<div class="row row-card-imp" style="margin-top:50px;">
  <div class="card-for-imp "> <div class="row">
  
    <i class="fas fa-mobile-alt icon-costumizing-imp"></i> <p class="text-imp">  Telefon Büro: 041 852 05 53</br> Natel: 077 423 58 38 </p>
          
       </div>
 </div>
          
  <div class="card-for-imp "> <div class="row">
 
   <i class="fas fa-envelope-open-text icon-costumizing-imp"></i> <p class="text-imp">  Email: schwimmschule@aquakidz.ch</br> Internet: https://aquakidz.ch </p>

       </div>
 </div>

   <div class="card-for-imp "> <div class="row">

    <i class="fas fa-mobile-alt icon-costumizing-imp"></i>  <p class="text-imp" style="font-weight:bold;">AquaKidz Schwimmschule</p> </br> <p class="text-imp">Bahnhofstrasse 32, 6403 Küssnacht am Rigi </p>

       
 </div>
    </div> 





  </div>


</div>








<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>