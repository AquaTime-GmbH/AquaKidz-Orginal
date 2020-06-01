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
    <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
</head>
<body>

<!--navbar wird eingebunden-->
<?php

include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>

<div class="hintergrundbild_ueberuns"></div>


<div class="container">




<div class="card überuns-card">
    <div class="card-body">

 <h1 class="card-title card-title-style" style="font-size:32px; font-weight:bold;"> ÜBER AQUAKIDZ </h1>

<p class="card-text überuns-card-text" >"Ich wollte ein Angebot das für meine Kinder und für mich gemacht ist."</p>

<p class="jana-gesch">Jana Mantz - Geschäftsführerin </p>
    </div>
 </div>







    
<div class="row">
<div class="col-md-6" style="margin-top:auto !important; margin-bottom:auto !important;">
 <h2 style="color:var(--maincolor);">VON ELTERN FÜR KINDER</h2>
    <p class="text-über-eltern">Sicher schwimmen lernen war wichtig für uns als Eltern. Doch das Angebot das es gab wurde entweder meinen Kindern oder meinen Anforderungen nicht gerecht. Da es nichts gab, das der Qualität, Sicherheit und Flexibilität die man braucht im heutigen Lebensalltag entsprach, musste ich selber hand anlegen und gründete die Firma AquaTime. Unter dem Label Aquakidz war mein erster Schwerpunkt die richtigen Leute mit Erfahrung und die richtigen Orte zu finden, um die bestmögliche Umgebung für das Wassererlebnis von Kindern zu schaffen. Bald fand ich heraus das viele Eltern die gleichen Bedürfnisse haben und dank Ihnen kann ich konstant mehr Kurse mehr Leiter und mehr Know- How zu meinem Angebot hinzufügen.</p>


</div>


<div class="col-md-6">
<div class="kreis-über-uns"></div>


</div>


<!--end of row-->
</div>
   




<!--end of container-->
</div>

<div class="über-uns-box">
<div class="container">
<p class="motivation-über-title">UNSERE MOTIVATION</p>














<div class="row">
<div class="col-sm-6">
    <div class="card card-4-sizing-über-uns">
       
            
                <img src="<?php echo $url_helper;?>images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg" class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">
           
            <div class="col-md-8">
                <div class="card-body">
                    
             
                
            </div>

        </div>
    </div>
    </div>



    <div class="col-sm-6">
        <div class="card card-4-sizing-über-uns">
            
                
                    <img src="<?php echo $url_helper;?>images/little-girl-diving-in-swimming-pool-P5NRPSW.jpg" class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">
              
                <div class="col-md-8">
                    <div class="card-body">
                        
                    </div> 
                    
                </div>
                
            </div>
      
    </div>
</div>

<div class="row" style="margin-top:30px; margin-bottom:30px;">
    <div class="col-sm-6">
    <div class="card card-4-sizing-über-uns">
        
           
                <img src="<?php echo $url_helper;?>images/friendly-children-with-swimming-goggles-PG3CW49.jpg" class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">
           
            <div class="col-md-8">
                <div class="card-body">
                
                  
               
            </div> 

        </div>
    </div>
</div>    


<div class="col-sm-6">
    <div class="card card-4-sizing-über-uns">
       
            <img src="<?php echo $url_helper;?>images/instructor-teaches-children-how-to-swim-PH82RUA.jpg" class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">
           
            <div class="col-md-8">
            <div class="card-body">
                
              
         
                
              </div> 
     
            </div> 
            
        </div>
    </div>
</div>





</div>
















</div>




<!--two cards wird eingebunden-->

<?php
include 'include/two_cards.php';
?>







<!--ende von container-->
</div>

     






<!--footer wird eingebunden-->
<?php
include 'include/footer.php';
?>
<!--------------ende der einbindung------------------>
