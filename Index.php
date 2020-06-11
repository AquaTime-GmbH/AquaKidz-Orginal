

<?php

// organisation der url
$url_helper= "";
/* einbingung der database connection*/
include  $url_helper .'include/database.php';


?>


<!DOCTYPE html>
<head>
    <title>AquaKidz</title>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="autor" content="">
    <meta name="keywords" content="">
    <!-- Bootstrap,w3schools,fotawsome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
      <!-- Custom fonts for this template-->
    <link href="fonts/css/all.min.css" rel="stylesheet" type="text/css">

<!-- Required meta tags -->    <!--einbindung der cookie.js datei-->
    <script type="text/javascript" src="cookie.js"></script>

 

</head>
<body>


<!--navbar wird eingebunden-->
<?php

$aktivschwimmkurse = '';
$aktivkursort = '';
$aktivueberuns = '';
$aktivkontakt = '';
$aktivlogin = '';


include $url_helper .'include/navbar.php';

?>
<!--------------ende der einbindung------------------>

<?php 


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


<div class="hintergrundbild">
<div class="border_under">
</div>
</div>
<div class="container">
    <div class="col-sm-5" style="height:624px;">

    <form action="search_function"  method="post">
        <div class="card first-card">
            <div class="card-body">
                <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px">SCHWIMMEN LERNEN, SCHWIMMEN LIEBEN</h1>
                    <p class="card-text first-card-text" >Sichere und altersgerechte Kurse für Babys und Kinder. Denn schwimmen lernen soll Spass machen.</p>

                    <label class="col-4 col-form-label first-card-text">Plz</label>
                    <div class="col-12">
                        <input pattern="^[0-9]{4}$" class="form-control labelshape" id="search_ort" name="search_ort" type="text" value="<?= $cookie_kursort; ?>">
                    </div>

                    

                    <label class="col-8 col-form-label first-card-text">Wie alt ist ihr Kind ?</label>
                    
                    <div class="col-12">
                        <div class="dropdown-firstcard">
                            <?php
                            if($cookie_kursalter == "1"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter; ?>">
                                <option disabled selected value style="color:white;"></option>
                                <option value="1" selected>CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php
                            } elseif($cookie_kursalter == "2"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter; ?>">
                                <option disabled selected value style="color:white;"></option>
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2" selected>CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php
                            } elseif($cookie_kursalter == "4"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter; ?>">
                                <option disabled selected value style="color:white;"></option>
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4" selected>CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php
                            } elseif($cookie_kursalter == "7"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter; ?>">
                                <option disabled selected value style="color:white;"></option>
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7" selected>AB CA. 7 JAHRE</option>
                            </select><?php
                            } else{
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="">
                                <option disabled selected value style="color:white;"></option>
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php

                      
                            }
                          
                            ?>
                    </div>
                </div>
                </div>
                <input type="submit" href="" class="btn search-buttom" name="search_button" value="Suchen">
            </div>
        </div>
    </div>
    

</form>

 <form action="cookie_set" method="post">


  <!-- <div id="cookie_popup">
        <div class="hinweis">
        <p>Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</p>
        </div> 

        <span class="more">
        <a href="datenschutz.php">Details</a>
        </span> -->


    <!-- beim klicken von dem button bleibt manauf der seite und der pop up fenster verschwindet -->
        <!--<button   class="btn btn_ok_cookie" type="submit" name="ok_cookie_button">Akzeptieren</button>   -->
        
    <!-- beim klicken von diesem button kommt eine altert warnung die sagt ob man wirklich die cookies ablehnen will und wird dann auf die seite von session weiter geleitet -->
        <!--<button  onclick='myfunction()' class="btn btn_alert_cookie" type="submit" name="alert_cookie">Verweigern</button> -->

  <!--</div>-->


<?php
   
  //if (isset($_POST['alert_cookie'])){
    //echo "<script language=\"JavaScript\">
    //function myfunction(){
        //var alert = confirm(\"Wenn Sie die Cookies ablehnen, kann dies Auswirkungen auf die Suchfunktion haben.\");
    //}
  //if(alert){
    //window.location=\"index_session\";
  //}else{

 // }
      //  </script>";
?>
  
    
    <!--<button type="submit" class="close" data-dismiss="alert">&times;</button>
</div> -->

<?php
    
//}else{

//}    
//if (isset($_POST['go_to_session'])){
    
    //echo " <script language=\"JavaScript\"> window.location=\"index_session\";</script>";
//}
?>
</form>
<index-row>
     <!-- Das sind alle 3 Cards(flexboxen) in der mitte der Webseite -->
        <div class="row" >
        <div class="col-md-4">
           
                <div class="card card-sizing">
                    <img class="imgcard imgshape card-img-top img-border1" src="images/Block1.png"  alt="Bild ladet nicht!">
                <div class="card-body">
                    <h2 class="card-title title-card1">SICHER SCHWIMMEN LERNEN MUSS SPASS MACHEN</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">Kinder lernen wenn sie richtig gefördert werden. Unsere Kurse sind auf die Fähigkeiten und das alter unserer Schüler zugeschnitten. Wir setzen auf erfahrene Lehrpersonen die die Zeit im Wasser zu einem wunderbaren Erlebnis machen.</p>     

                </div>
                <div style="float:right;">
                    <a href="#"  class="btn  btn_card1">Mehr Erfahren</a>
                </div>
            </div>
        </div>
    
    <div class="col-md-4">
        <div class="card card-sizing">
            <img class="imgcard imgshape card-img-top img-border2" src="images/Block2.png"   alt="Bild ladet nicht!">
        <div class="card-body">
                <h2 class="card-title title-card2">UNSER PRINZIP FÜR ERFOLG</h2>
                
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

    <div class="col-md-4">
        <div class="card card-sizing">
            <img class="imgcard imgshape card-img-top img-border3" src="images/Block3.png" alt="Bild ladet nicht!">
        <div class="card-body">
                <h2 class="card-title title-card3">ERFAHRUNG ZAHLT SICH AUS</h2>
                <p class="card-text font-color">Nach X Jahren und X Kunden wissen wir worauf es ankommt. Einfacher Zugang zum richtigen Kurs. Sie finden uns an 15 Orten in der Schweiz</p>
                </div>
                <div style="float:right;">
                    <a href="#" class="btn  btn_card3">Mehr Erfahren</a>
                </div>
            </div>
        </div>
  </div>
</index-row>
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

    <div class="slideshow-container" style="overflow-y:hidden;">



   <!-- <div class="h3_ueberschrift">      
        <h4 stlye="font-size: 36px;">Was unsere Kunden sagen</h4>
    </div>-->


<div class="row" style="height: 458px !important;">



 <!--col-12 muss geändert werden  -->
<div class="col-12 position-slider-cols-text">

<div class="text-slider-container">







 <div class="slides ">
     <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg" alt="Bild konnte nicht geladen werden!">
     <p class="position_slider_name">Leonie W.</p>
        <div style="margin-bottom:100px; margin-top:30px;" class="text">Ich finde es super, dass die Gruppen nicht so gross sind. So hat die Kursleiterin für alle Zeit und  kann entsprechend helfen. Wir gehen sehr gerne in Kurs bei Ihnen, weiter so, vielen Dank!</div>
        
    </div>

  


 
        <div class="slides ">
             <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg" alt="Bild konnte nicht geladen werden!">
            <p class="position_slider_name">Louna L.</p>
           
            <div style="margin-bottom:100px; margin-top:30px;" class="text ">Wir fanden die Kursleitung super und sie war sehr engagiert, motiviert und voll da.
                                                            Uns hat der Kurs sehr gut gefallen und wir werden später weitere Kurse besuchen. Ich fand insbesondere auch die Gruppengrösse sehr perfekt. Herzlichen Dank für alles!</div>
</div>


        <div class="slides ">
            <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg" alt="Bild konnte nicht geladen werden!">
            <p class="position_slider_name">Annina D.</p>
            <div style="margin-bottom:100px; margin-top:30px;" class="text ">Ich habe mit meiner Tochter bereits zwei Kurse bei Aquakidz besucht. Die Lektionen werden sehr abwechslungsreich gestaltet und es gibt auch schöne wiederkehrende 
            Rituale, die den Kindern Sicherheit geben. Die Kursleitung ist sehr kompetent und reagiert stets angemessen auf die individuellen Bedürfnisse der Babys. </div>
        </div>

        <div class="slides ">
            <img class="kreis-slider" src="<?php echo $url_helper;?>img/kunde_bild.png" alt="Bild konnte nicht geladen werden!">
                        <p class="position_slider_name">Nina, Dave mit Gian B.</p>
            <div style="margin-bottom:100px; margin-top:30px;"  class="text">Jeden Samstagmorgen haben wir uns aufs Babyschwimmen bei Jana Brinkmann gefreut. Sie ist total herzlich und kann gut auf's Baby und die Begleitperson eingehen. Uns gefällt die Art, wie sie den Kindern die Angst vom Wasser nimmt und sie spielerisch begleitet. Wir freuen uns bereits auf den Folgekurs! 
</div>
        </div>

        <div class="slides ">
            <img class="kreis-slider" src="<?php echo $url_helper;?>img/Mann.jpg" alt="Bild konnte nicht geladen werden!">
                        <p class="position_slider_name">Samuel S.</p>
            <div style="margin-bottom:100px; margin-top:30px;" class="text">Super Diagramm/Lernkurve, die nach jedem Schwimmkurs angepasst wird
Samuel geht sehr gerne zum Schwimmkurs und erzählt viel davon :-) alles richtig gemacht. 
Er freut sich schon sehr auf den Folgekurs in Lachen.</div>
        </div>

</div>
    <div style="text-align:center;" class="dot-container">
        <span class="dot" onclick="currentSlide(1)"></span> 
        <span class="dot" onclick="currentSlide(2)"></span> 
        <span class="dot" onclick="currentSlide(3)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
    </div>

    </div>
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






<!--slider style-->
<style>
.mySlides {display:none}
.w3-badge {height:13px;width:13px;padding:0}
</style>









<!--slider-->
<div class="container">




<!----------------------------------------fist slide cards------------------------->

 <div class="row">


   <div class="card-md-2" style="margin-top:auto; margin-bottom:auto;">
        <div class="arrow-left" style="margin-top:auto; margin-bottom:auto;" onclick="plusDivs(-1)"></div>
    </div>
 


 

        <div class="card slider-card-sizing mySlides">
            <img class="imgcard-slider imgshape-slider  img-border-slider1" src="images/Block3.png" alt="Bild ladet nicht!">
                <div class="card-body">

                    <h2 class="card-title slider-title-card1">AquaBaby</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">Krankheitsinfekte werden weniger (Training Immunsystem) Schlafverhalten wird regelmässiger und ruhiger Kurs als Ritual etablieren, der Mutter-Kind-Bindung intensiviert Sicherheit und Ruhe am Kursort (exklusiv reserviert)</p>     


                </div>
                 <div style="float:right;">
                    <a href="<?php echo $url_helper;?>Kursarten/AquaBaby"  class="btn  slider-card-button1">Mehr Erfahren</a>
                </div>
        </div>


<!----------------------------------------second 2 slide cards------------------------->

   

    
    
        <div class="card slider-card-sizing mySlides">
            <img class="imgcard-slider imgshape-slider  img-border-slider2" src="images/Block3.png" alt="Bild ladet nicht!">
                <div class="card-body">

                    <h2 class="card-title slider-title-card2">AquaKidz Mini</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">Kinder lernen in diesem Alter sehr schnell und sehr einfach Gemeinsame Zeit gibt dem Kind den notwendigen sicheren Raum zur Entwicklung Kinder erlangen Selbstsicherheit und Selbstvertrauen</p>     


                </div>
                 <div style="float:right;">
                    <a href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mini"  class="btn  slider-card-button2">Mehr Erfahren</a>
                </div>
        </div>



       





<!----------------------------------------third slide cards------------------------->

    
    
    

    
        <div class="card slider-card-sizing mySlides">
            <img class="imgcard-slider imgshape-slider  img-border-slider3" src="images/Block3.png" alt="Bild ladet nicht!">
                <div class="card-body">

                    <h2 class="card-title slider-title-card3">AquaKidz Maxi</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">Angst vor Wasser in Respekt umwandeln Kinder nehmen erstmalig ohne Elternteil am Kurs teil Motivation und Freude des Kindes sind wichtig und entscheiden über eine Fortsetzung im nächsten level (erstmalig so, vorher entscheiden immer die Eltern)</p>     


                </div>
                 <div style="float:right;">
                    <a href="<?php echo $url_helper;?>Kursarten/AquaKidz-Maxi"  class="btn  slider-card-button3">Mehr Erfahren</a>
                </div>
        </div>







<!----------------------------------------four slide cards------------------------->

  
    
        <div class="card slider-card-sizing mySlides">
            <img class="imgcard-slider imgshape-slider  img-border-slider4" src="images/Block3.png" alt="Bild ladet nicht!">
                <div class="card-body">

                    <h2 class="card-title slider-title-card4">AquaMixed</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">kein Wettkampfdruck für Kids, die gern im Wasser sind und schwimmen als Freizeitsport betreiben wollen</p>     


                </div>
                 <div style="float:right;">
                    <a href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mixed"  class="btn  slider-card-button4">Mehr Erfahren</a>
                </div>
        </div>





<!----------------------------------------five slide cards------------------------->

   
      

        <div class="card slider-card-sizing mySlides ">
            <img class="imgcard-slider imgshape-slider  img-border-slider1" src="images/Block3.png" alt="Bild ladet nicht!">
                <div class="card-body">

                    <h2 class="card-title slider-title-card1">five slide</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">Kinder lernen wenn sie richtig gefördert werden. Unsere Kurse sind auf die Fähigkeiten und das alter unserer Schüler zugeschnitten. Wir setzen auf erfahrene Lehrpersonen die die Zeit im Wasser zu einem wunderbaren Erlebnis machen.</p>     


                </div>
                 <div style="float:right;">
                    <a href="<?php echo $url_helper;?>Kursarten/"  class="btn  slider-card-button1">Mehr Erfahren</a>
                </div>
        </div>

 <div class="col-md-2" style="margin-top:auto; margin-bottom:auto;">
    <div class="arrow-right" style="margin-top:auto; margin-bottom:auto;" onclick="plusDivs(1)">
</div>

        </div>





  
      

 
</div>  
  <div style="text-align:center;">
        <span class="dot-slider" onclick="currentSlide(1)"></span> 
        <span class="dot-slider" onclick="currentSlide(2)"></span> 
        <span class="dot-slider" onclick="currentSlide(3)"></span>
        <span class="dot-slider" onclick="currentSlide(4)"></span>
        <span class="dot-slider" onclick="currentSlide(5)"></span>
    </div>

</div> 

<!--slider javascript-->
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

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
                    <p class="card-text" style="font-size:22px; height:188px; width:530px;" >AquaKidz bietet allen Eltern eine Möglichkeit Rückmeldungen zum Erfolg der Kinder im Kurs zu erhalten, auch wenn sie nicht vor Ort sind. Unsere Trainer notieren und bewerten für sie die Schritte die Ihr Kind im Kurs macht. Sie erhalten frühzeitig Rückmeldung zu möglichen Problemen und Potenzial.</p>
                    <ul class="bullet-testing font-color font-sizing-card5 " style="padding-left:38px !important;">
                    <a-size>
                        <li>
                            <a>graphische Übersicht jeder Basiskompetenz</a>
                        </li>
                        <li>
                            <a>Übersicht Kurstermine (Kursstart und Ende)</a>
                        </li>
                        <li>
                            <a>Einfache Ersatzterminbuchung</a>
                        </li>
                        <li>
                            <a>Krankenkassenbestätigung zur Rückerstattung</a>
                        </li>
                        <li>
                            <a>direkter Kontakt zum Kursleiter</a>
                        </li>
                    </a-size>
                </ul>
                    </div>
                
            </div> 
             <a href="#"  class="btn btn-card5 ">Mehr Erfahren</a>
              
        </div>
    </div>    
    </div>   




<!--two cards wird eingebunden-->
<?php
include 'include/two_cards.php';
?>




<!--footer wird eingebunden-->
<?php
include 'include/footer.php';
?>
<!--------------ende der einbindung------------------>