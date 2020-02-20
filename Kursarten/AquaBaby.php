 <!-- organisation der url -->
 <?php 
$url_helper= "../";
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
    <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
</head>
<body>

<!--navbar wird eingebunden-->
<?php
include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>


<div class="hintergrundbild"></div>
<div class="container">
    <div class="col-5">


        <div class="card first-card">
            <div class="card-body">
                <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px"> AQUABABY</h1>
                    <small class="card-text" style="font-size:16px" >Frühförderung im Wasser, Schutz- und Lernerfahrung für Ihr Kind</small>
                    <p class="card-text" style="font-size:18px" >Das erste Mal im Wasser ist eine ganz besondere Erfahrung. Gemeinsam mit Ihnen erlernt Ihr Kind früh Sicherheit im Schwimmbecken zu erhalten. Sie fördern die körperliche und geistige Entwicklung in den ersten Lebensjahren nachhaltig und unterstützen einen gesunden Umgang mit dem Wasser. In überschaubaren Gruppen vermitteln unsere Trainer wichtige Grundlagen die ein Kind für die erste Wassergewöhnung braucht. Mit verschiedenen Übungen und Geduld, stärken sie in einer Gruppe von gleichgesinnten Eltern die Fähigkeiten Ihres Kleinen, sein Immunsystem und Ihre Bindung mit Ihm.</p>

            </div>
        </div>
    </div>
</div>


    <form action=""  method="post">
<div class="Card-find-aqua"> 
<div style="background-color:var(--maincolor);  border-top: 20px solid var(--maincolor);
  border-radius:35px 35px 0 0; padding-bottom:10px;" ><h1 style="margin-left: 10px; color:white;">AQUABABY KURSE FINDEN</h1></div>
    
    <div class="row">
        <div class="col-4" style="margin-left:30px;">
        <label  class="col-6 col-form-label text-card-aqua">Ort</label>

            <input class="form-control labelshape"  id="search_aquababy_ort" name="search_aquababy_ort" type="text" placeholder="überall" value="<?php $viewsearch_aquababy_ort?>">
        </div>

        <div class="col-3">
        <label  class="col-6 col-form-label text-card-aqua">Kurs Start</label>

            <input class="form-control labelshape"  id="search_start" name="search_aquababy_kursstart" type="date" placeholder="DD.MM.YY" value="<?php $viewsearch_aquababy_kursstart?>">
        </div>
       
<input href="#" type="submit" class="btn  btn_suchen_aqua" name="search_button" value="Suchen">
    </div>
</form>

<?php



if(isset($_POST['search_button'])){

    $viewsearch_aquababy_ort = $_POST['search_aquababy_ort']; 
    $viewsearch_aquababy_kursstart = $_POST['search_aquababy_kursstart']; 


if ($viewsearch_aquababy_ort == ""){
    $viewsearch_aquababy_ort = "";
}

if ($viewsearch_aquababy_kursstart == ""){

    $viewsearch_aquababy_kursstart  = date('d.m.Y');
    
}

$con_mysqli = new mysqli($db_host, $db_user, $db_password, $db_database);



if($viewsearch_aquababy_ort == ""){
    $result = mysqli_query($con_mysqli,"SELECT * FROM kurse  order by starttermin desc");
}

else{
    $result = mysqli_query($con_mysqli,"SELECT * FROM kurse WHERE ort LIKE '%$viewsearch_aquababy_ort%' order by starttermin DESC");
}



while($row = mysqli_fetch_array($result))
{
    $view_kursort = $row['ort'];
    $view_kursstart = new DateTime($row['starttermin']);


   

    if ($view_kursstart->format('d.m.Y') >= $viewsearch_aquababy_kursstart) {   
        echo $view_kursort;
        echo $view_kursstart->format('d.m.Y');
    } else {}
 
}
    mysqli_close($con_mysqli);
}

?>
    <div class="block-card-aqua"></div>
    <div class="col-md-12">
    <div class="card card-aqua-sizing">
        <div class="no-gutters">
            <div class="col-md-4">
                <img src="<?php echo $url_helper;?>images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg" class="card-img card-aqua-img" alt="Bild Konnte nicht Geladen werden!">
                <div class="card-body">
                    <h5 class="card-title card-title-style">AquaBaby -  Babyschwimmen</h5>
                    <p class="card-text under-font"><small>CA. 10 Wochen - 24 Monate</small></p>
                   
                </div>  
                <div class="col-md-8">
                
            </div>
        </div>  
            
            <a href="#"  class="btn  btn_kursort_aqua" >Auf Kursort</a>
            <a href="#"  class="btn  bnts_card4">Mehr Erfahren</a>
        </div>
    </div>
</div>

</div>
</div>

    <div class="slideshow-container"></div>

   
<div class="container">
    <h2 class="text-spiezial">BRAUCHEN SIE MEHR INFORMATIONEN?</h2>
    <div class="row">
    <div class="col-md-6">
    <div class="card card-1-sizing">
        <div class="row no-gutters">
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" style="color:rgb(8, 51, 194);">WISSEN FÜR ELTERN</h5>
                <p class="card-text font-color">Wir haben die wichtigsten Informationen für Eltern von Babys und jungen Kindern zusammengestellt, damit sie Wissen worauf es ankommt.</p>
              </div> 
            </div>
                <a href="#"  class="btn  bnts_card4 mehr-erfahren">Mehr Erfahren</a>
              
            </div> 
            
        </div>
    </div>
   
    
    <div class="col-md-6">
    <div class="card card-2-sizing">
        <div class="row no-gutters">
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title" style="color:rgb(8, 51, 194);">RUFEN SIE UNS AN</h5>
                <p class="card-text under-font"><small>AquaTime GmbH</small></p>
                <p class="card-text font-color">Bahnhofstrasse 32, 6403 Küssnacht am Rig</p>
                <p class="card-text font-color">Mobil 077 423 58 38; Festnetz 041 852 05 53</p>
            
              </div> 
            </div>
           
                <a href="#"  class="btn  btn_email" >Email</a>
            
                <a href="#"  class="btn  btn_auf" >Anrufen</a>
                </div> 
            </div>
        </div>
    </div>
</div>
</div>
</div>



<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>