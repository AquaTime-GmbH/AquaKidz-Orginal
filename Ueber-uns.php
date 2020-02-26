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
$aktivschwimmkurse = '';
$aktivkursort = '';
$aktivueberuns = 'aktiv';
$aktivkontakt = '';

include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>





<?php 

 if( isset($_COOKIE['kursstart'])) {
    $cookie_kursstart = $_COOKIE["kursstart"]; 
    } else {
        $cookie_kursstart = "";
  }
  if( isset($_COOKIE['kursort'])) {
    $cookie_kursort = $_COOKIE["kursort"]; 
    } else {
        $cookie_kursort = "";
  }
  if( isset($_COOKIE['kursalter'])) {
    $cookie_kursalter = $_COOKIE["kursalter"]; 
    } else {
        $cookie_kursalter = "";
  }
?>

<div class="hintergrundbild"></div>
<div class="container">
    <div class="col-5">


        <div class="card first-card">
            <div class="card-body">
                <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px">SCHWIMMEN LERNEN, SCHWIMMEN LIEBEN</h1>
                    <p class="card-text" style="font-size:20px" >Sichere und altersgerechte Kurse für Babys und Kinder. Denn schwimmen lernen soll Spass machen.</p>

                    <label class="col-4 col-form-label">Ort</label>
                    <div class="col-12">
                        <input class="form-control labelshape"  type="text">
                    </div>

                    <label  class="col-6 col-form-label">Kurs Start</label>
                    <div class="col-12">
                        <input class="form-control labelshape"  type="date">
                    </div>

                    <label class="col-8 col-form-label">Wie alt ist ihr Kind ?</label>
                    <div class="col-12">
                        <input class="form-control labelshape"  type="number">
                    </div>

                </div>
                <a href="#" class="btn search-buttom" style="">SUCHEN</a>
            </div>
        </div>
    </div>


     <!-- Das sind alle 3 Cards(flexboxen) in der mitte der Webseite -->
        <div class="row">
        <div class="col-sm-4">
           
                <div class="card card-sizing">
                    <img class="imgcard imgshape card-img-top" src="images/Block1.png"  alt="Bild ladet nicht!">
                <div class="card-body">
                    <h2 class="card-title text-card1">SICHER SCHWIMMEN LERNEN MUSS SPASS MACHEN</h2>
                    <p class="card-text font-color">Kinder lernen wenn sie richtig gefördert werden. Unsere Kurse sind auf die Fähigkeiten und das alter unserer Schüler zugeschnitten. Wir setzen auf erfahrene Lehrpersonen die die Zeit im Wasser zu einem wunderbaren Erlebnis machen.</p>     

                </div>
                <div style="float:right;">
                    <a href="#"  class="btn  btn_card1">Mehr Erfahren</a>
                </div>
            </div>
        </div>
    
    <div class="col-sm-4">
        <div class="card card-sizing">
            <img class="imgcard imgshape card-img-top" src="images/Block2.png"   alt="Bild ladet nicht!">
        <div class="card-body">
                <h2 class="card-title text-card2">UNSER PRINZIP FÜR ERFOLG</h2>
                
                <ul class="bullet-testing font-color">
                    <li>
                        <a>Schwimmen lernen ohne Druck und Zwang</a>
                    </li>
                    <li>
                        <a>Betreuung von Erfahrenen Pädagogen</a>
                    </li>
                    <li>
                        <a>Konstante Steigerung von Sicherheit und Kompetenz</a>
                    </li>
                </ul>
            </div>
            <div style="float:right;">
                <a href="#" class="btn  btn_card2" >Mehr Erfahren</a>
            </div>
        </div>
    </div>

    <div class="col-sm-4">
        <div class="card card-sizing">
            <img class="imgcard imgshape card-img-top" src="images/Block3.png" alt="Bild ladet nicht!">
        <div class="card-body">
                <h2 class="card-title text-card3">ERFAHRUNG ZAHLT SICH AUS</h2>
                <p class="card-text font-color">Nach X Jahren und X Kunden wissen wir worauf es ankommt. Einfacher Zugang zum richtigen Kurs. Sie finden uns an 15 Orten in der Schweiz</p>
                </div>
                <div style="float:right;">
                    <a href="#" class="btn  btn_card3">Mehr Erfahren</a>
                </div>
            </div>
        </div>
  </div>


    <!-- text über den 4 cards -->

    <h2 class="kurse-text">KURSE FÜR JEDES ALTER</h2>
    <div class="text-kurse">
        <p>Wir gestalten Kurse nach den altersgerechten Bedürfnissen Ihres Kindes. Ob sanfte Wassergewöhnung für Babys, Sicherheit im Wasser oder der mit Grundlagen-Abzeichen qualifizierte Kurs für Kids, wir schaffen die richtige Umgebung, um das Potenzial/ Fähigkeiten unserer kleinen und großen AquaKidz bestens zu fördern.</p>
    </div>
    <!-- Das sind alle 4 Cards(flexboxen) in der mitte der Webseite -->

<?php
    include 'include/Kursbloecke.php';
?>
<!-- Das ist die Slideshow -->

    <div class="slideshow-container">

    <div class="h3_ueberschrift">       
        <h4>Was unsere Kunden sagen</h4>
    </div>

    <div class="slides ">
        <div class="text">CaptionOnehgdfhgfdhgfdhgfdhfgdhfdghfdghfgdhfgdhgfdhfgdhgfdhfgdhfgdhgfdhfgdhgfdhgfdhfgdhfgdhgfdhghghdfhfgdhfgdhfgdhfgdhfgdhfgdhfgdgfdhgfhdfghgfdhfgdhgfdhfgdhgfdhfgdhfgdhgffd</div>
    </div>

    <div class="slides ">
        <div class="text">Caption Two</div>
    </div>
    <div class="slides ">
        <div class="text">Caption Three</div>
    </div>

    <div class="slides ">
        <div class="text">Caption four</div>
    </div>

    <div class="slides ">
        <div class="text">Caption five</div>
    </div>

    <div style="text-align:center ">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>
   
    <!--javascript für die Slideshow-->
     <script>
     var slideIndex = 1;
     var timer = null;
     showSlides(slideIndex);
     function plusSlides(n) {
         clearTimeout(timer);
         showSlides(slideIndex += n);
     }

     function currentSlide(n) {
         clearTimeout(timer);
         showSlides(slideIndex = n);
     }

     function showSlides(n) {
     var i;
     var slides = document.getElementsByClassName("slides");
     var dots = document.getElementsByClassName("dot");
     if (n==undefined){
         n = ++slideIndex
         }
     if (n > slides.length) {
         slideIndex = 1
         }
     if (n < 1) {
         slideIndex = slides.length
         }
     for (i = 0; i < slides.length; i++) {
         slides[i].style.display = "none";
     }
     for (i = 0; i < dots.length; i++) {
         dots[i].className = dots[i].className.replace(" active", "");
     }
         slides[slideIndex-1].style.display = "block";
         dots[slideIndex-1].className += " active";
         /* timer auf 20 sekunden gesetzt */
         timer = setTimeout(showSlides, 20000);
     }
     </script>


    </div>


    <div class="container">
        <h2 class="text-spiezial">AKTUELLE SPEZIALANGEBOTE</h2>
    <div class="textcontainer">
        <p class="text-sp">Für einen Tag Meerjungfrau sein? Eine Geburtstagsparty im Becken machen? Mit unseren Sonderangeboten bieten wir einmalige Erlebnisse mit bewährter AquaKidz Qualität.</p>
    </div>
</div>
    <!--card 5 -->
    <div class="hintergrundbild-card5"></div>
    <div class="container">
        <div class="row">
        <div class="col-sm-7"></div>
    <div class="col-sm-5">

        <div class="card card5-size">
            <div class="card-body">
                <div class="font-color">
                <h1 class="card-title text-card5"> Den Fortschritt Ihres Kindes immer im Blick</h1>
                    <p class="card-text" style="font-size:15px" >AquaKidz bietet allen Eltern eine Möglichkeit Rückmeldungen zum Erfolg der Kinder im Kurs zu erhalten, auch wenn sie nicht vor Ort sind. Unsere Trainer notieren und bewerten für sie die Schritte die Ihr Kind im Kurs macht. Sie erhalten frühzeitig Rückmeldung zu möglichen Problemen und Potenzial.</p>
                    <ul class="bullet-testing font-color">
                    <li>
                        <a>Vorteil A</a>
                    </li>
                    <li>
                        <a>Vorteil B</a>
                    </li>
                    <li>
                        <a>Vorteil C</a>
                    </li>
                    <li>
                        <a>Vorteil D</a>
                    </li>
                </ul>
                    </div>
                <a href="#"  class="btn btn-card5 ">Mehr Erfahren</a>
              
            </div> 
             
        </div>
    </div>    
    </div>   

    <h2 class="text-spiezial">BRAUCHEN SIE MEHR INFORMATIONEN?</h2>
    <div class="row">
    <div class="col-sm-6">
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

    <div class="col-sm-6">
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




<!--footer wird eingebunden-->
<?php
include 'include/footer.php';
?>
<!--------------ende der einbindung------------------>
