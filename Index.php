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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="fonts/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Required meta tags -->




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






        <div class="col-md-5">
            <div class="card first-card">
                <div class="card-body">




                    <h1 class="card-title card-title-style" style="font-size:32px">SCHWIMMEN LERNEN, SCHWIMMEN
                        LIEBEN</h1>
                    <p class="card-text first-card-text font-color">Sichere und altersgerechte Kurse für Babys und
                        Kinder.
                        Denn schwimmen lernen soll Spass machen.</p>
                    <form action="search_function" method="post">
                        <label class="col-4 col-form-label first-card-text font-color">Plz</label>


                        <div class="col-12">
                            <input pattern="^[0-9]{4}$" class="form-control labelshape" id="search_ort"
                                name="search_ort" type="text" value="<?= $cookie_kursort; ?>">
                        </div>


                        <label class="col-8 col-form-label first-card-text font-color">Wie alt ist ihr Kind ?</label>



                        <div class="col-12">
                            <div class="dropdown-firstcard">
                                <?php
                            if($cookie_kursalter == "1"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text"
                                    value="<?= $cookie_kursalter; ?>">
                                    <option disabled selected value style="color:white;"></option>
                                    <option value="1" selected>CA. 10 WOCHEN - 24 MONATE</option>
                                    <option value="2">CA. 2 BIS 3 JAHRE</option>
                                    <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                    <option value="7">AB CA. 7 JAHRE</option>
                                </select><?php
                            } elseif($cookie_kursalter == "2"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text"
                                    value="<?= $cookie_kursalter; ?>">
                                    <option disabled selected value style="color:white;"></option>
                                    <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                    <option value="2" selected>CA. 2 BIS 3 JAHRE</option>
                                    <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                    <option value="7">AB CA. 7 JAHRE</option>
                                </select><?php
                            } elseif($cookie_kursalter == "4"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text"
                                    value="<?= $cookie_kursalter; ?>">
                                    <option disabled selected value style="color:white;"></option>
                                    <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                    <option value="2">CA. 2 BIS 3 JAHRE</option>
                                    <option value="4" selected>CA. 3,5 BIS 7,5 JAHRE</option>
                                    <option value="7">AB CA. 7 JAHRE</option>
                                </select><?php
                            } elseif($cookie_kursalter == "7"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text"
                                    value="<?= $cookie_kursalter; ?>">
                                    <option disabled selected value style="color:white;"></option>
                                    <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                    <option value="2">CA. 2 BIS 3 JAHRE</option>
                                    <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                    <option value="7" selected>AB CA. 7 JAHRE</option>
                                </select><?php
                            } else{
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text"
                                    value="">
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



                        <input type="submit" class="btn search-buttom" name="search_button" value="Suchen">
                </div>
            </div>
            </form>
        </div>





        <!-- Das sind alle 3 Cards(flexboxen) in der mitte der Webseite -->
        <section style="margin-top: 150px !important;">


            <div class="row">


                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">

                    <div class="card card-sizing1">
                        <img class="imgcard imgshape card-img-top img-border1" src="images/Block1.png"
                            alt="Bild ladet nicht!">
                        <div class="card-body">
                            <h2 class="card-title title-card1">SICHER SCHWIMMEN LERNEN MUSS SPASS MACHEN</h2>
                            <p class="card-text font-color" style="height:149px; width:366px;">Kinder lernen wenn sie
                                richtig gefördert werden. Unsere Kurse sind auf die Fähigkeiten und das alter unserer
                                Schüler zugeschnitten. Wir setzen auf erfahrene Lehrpersonen die die Zeit im Wasser zu
                                einem wunderbaren Erlebnis machen.</p>

                        </div>
                        <div style="float:right;">
                            <a href="#" class="btn  btn_card1">Mehr Erfahren</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-sizing2">
                        <img class="imgcard imgshape card-img-top img-border2" src="images/Block2.png"
                            alt="Bild ladet nicht!">
                        <div class="card-body">
                            <h2 class="card-title title-card2">UNSER PRINZIP FÜR ERFOLG</h2>

                            <ul style="list-style:none; padding-inline-start:15px !important;"
                                class="bullet-testing font-color">
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
                            <a href="#" class="btn  btn_card2">Mehr Erfahren</a>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4 col-lg-6 col-md-12 col-sm-12">
                    <div class="card card-sizing3">
                        <img class="imgcard imgshape card-img-top img-border3" src="images/Block3.png"
                            alt="Bild ladet nicht!">
                        <div class="card-body">
                            <h2 class="card-title title-card3">ERFAHRUNG ZAHLT SICH AUS</h2>
                            <p class="card-text font-color">Nach X Jahren und X Kunden wissen wir worauf es ankommt.
                                Einfacher Zugang zum richtigen Kurs. Sie finden uns an 15 Orten in der Schweiz</p>
                        </div>
                        <div style="float:right;">
                            <a href="#" class="btn  btn_card3">Mehr Erfahren</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <!-- text über den 4 cards -->

        <h2 class="kurse-text">KURSE FÜR JEDES ALTER</h2>
        <div class="text-kurse">
            <p>Wir gestalten Kurse nach den altersgerechten Bedürfnissen Ihres Kindes. Ob sanfte Wassergewöhnung für
                Babys, Sicherheit im Wasser oder der mit Grundlagen-Abzeichen qualifizierte Kurs für Kids, wir schaffen
                die richtige Umgebung, um das Potenzial/ Fähigkeiten unserer kleinen und großen AquaKidz bestens zu
                fördern.</p>
        </div>
        <!-- Das sind alle 4 Cards(flexboxen) in der mitte der Webseite -->

        <?php
    include 'include/Kursbloecke.php';
?>
        <!-- Das ist die Slideshow -->


        <div class="slideshow-container" style="overflow-y:hidden;">
            <div class="container">



                <!--col-12 muss geändert werden  -->




                <div class="slides slider-position-index">

                    <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg"
                        alt="Bild konnte nicht geladen werden!">


                    <div class="text-index-size">Ich finde es super, dass die Gruppen nicht so gross sind. So hat die
                        Kursleiterin für alle Zeit und kann entsprechend helfen. Wir gehen sehr gerne in Kurs
                        bei Ihnen, weiter so, vielen Dank!
                        <p class="position-slider-name">Leonie W.</p>
                    </div>


                </div>




                <div class="slides slider-position-index">
                    <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg"
                        alt="Bild konnte nicht geladen werden!">



                    <div class="text-index-size ">Wir fanden die Kursleitung super und sie war sehr engagiert, motiviert
                        und
                        voll da.
                        Uns hat der Kurs sehr gut gefallen und wir werden später weitere Kurse besuchen. Ich fand
                        insbesondere auch die Gruppengrösse sehr perfekt. Herzlichen Dank für alles!
                        <p class="position-slider-name">Louna L.</p>
                    </div>
                </div>


                <div class="slides slider-position-index">
                    <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg"
                        alt="Bild konnte nicht geladen werden!">

                    <div class="text-index-size ">Ich habe mit meiner Tochter bereits zwei Kurse bei Aquakidz besucht.
                        Die
                        Lektionen werden sehr abwechslungsreich gestaltet und es gibt auch schöne wiederkehrende
                        Rituale, die den Kindern Sicherheit geben. Die Kursleitung ist sehr kompetent und reagiert
                        stets angemessen auf die individuellen Bedürfnisse der Babys.
                        <p class="position-slider-name">Annina D.</p>
                    </div>
                </div>

                <div class="slides slider-position-index">
                    <img class="kreis-slider" src="<?php echo $url_helper;?>img/kunde_bild.png"
                        alt="Bild konnte nicht geladen werden!">

                    <div class="text-index-size">Jeden Samstagmorgen haben wir uns aufs Babyschwimmen bei Jana Brinkmann
                        gefreut. Sie ist total herzlich und kann gut auf's Baby und die Begleitperson eingehen. Uns
                        gefällt die Art, wie sie den Kindern die Angst vom Wasser nimmt und sie spielerisch
                        begleitet. Wir freuen uns bereits auf den Folgekurs!
                        <p class="position-slider-name">Nina, Dave mit Gian B.</p>
                    </div>
                </div>

                <div class="slides slider-position-index">
                    <img class="kreis-slider" src="<?php echo $url_helper;?>img/Mann.jpg"
                        alt="Bild konnte nicht geladen werden!">

                    <div class="text-index-size">Super Diagramm/Lernkurve, die nach jedem Schwimmkurs angepasst wird
                        Samuel geht sehr gerne zum Schwimmkurs und erzählt viel davon :-) alles richtig gemacht.
                        Er freut sich schon sehr auf den Folgekurs in Lachen.
                        <p class="position-slider-name">Samuel S.</p>
                    </div>
                </div>


                <div class="dot-container-slider">
                    <span class="dot" onclick="slidenow(1)"></span>
                    <span class="dot" onclick="slidenow(2)"></span>
                    <span class="dot" onclick="slidenow(3)"></span>
                    <span class="dot" onclick="slidenow(4)"></span>
                    <span class="dot" onclick="slidenow(5)"></span>
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

                    function slidenow(n) {
                        clearTimeout(timer);
                        showSlides(slideIndex = n);
                    }

                    function showSlides(n) {
                        var i;
                        var slides = document.getElementsByClassName("slides");
                        var dotsslider = document.getElementsByClassName("dot");

                        if (n == undefined) {
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
                        for (i = 0; i < dotsslider.length; i++) {
                            dotsslider[i].className = dotsslider[i].className.replace(" active", "");
                        }
                        slides[slideIndex - 1].style.display = "block";
                        dotsslider[slideIndex - 1].className += " active";
                        /* timer auf 20 sekunden gesetzt */
                        timer = setTimeout(showSlides, 20000);
                    }
                </script>



            </div>


        </div>


        <div class="container">
            <h2 class="text-spiezial">AKTUELLE SPEZIALANGEBOTE</h2>
            <div class="textcontainer">
                <p class="text-sp">Für einen Tag Meerjungfrau sein? Eine Geburtstagsparty im Becken machen? Mit unseren
                    Sonderangeboten bieten wir einmalige Erlebnisse mit bewährter AquaKidz Qualität.</p>
            </div>
        </div>






        <!--slider style-->
        <style>
            .mySlides {
                display: none
            }

            .w3-badge {
                height: 13px;
                width: 13px;
                padding: 0
            }
        </style>


<!--slider-->
        <div class="container">




            <!----------------------------------------first slide card------------------------->

            <div class="row">


                <div class="card slider-card-sizing mySlides">
                    <img class="imgcard-slider imgshape-slider  img-border-slider1" src="images/Block3.png"
                        alt="Bild ladet nicht!">
                    <div class="card-body">

                        <h2 class="card-title slider-title-card1">AquaKidz Private</h2>
                        <p class="card-text font-color text-slider-cutting">Braucht Ihr Kind mehr Förderung?
                            Passen unsere Kurse nicht in Ihren Zeitplan? Wünschen sie mehr Betreuung oder haben
                            sie individuelle Zielsetzungen? Wir haben ein flexibles Angebot erschaffen um genau
                            diese Bedürfnisse zu beantworten. In Privatkursen oder Halbprivatkursen können wir
                            intensiv an den persönlichen Zielen arbeiten. Sie können mit uns Kursinhalt, Zeit
                            und Ort besprechen, wir arbeiten mit Ihnen den passenden Trainingsplan aus.</p>


                    </div>
                    <div style="float:right;">
                        <a href="<?php echo $url_helper;?>Kursarten/........" class="btn  slider-card-button1">Mehr
                            Erfahren</a>
                    </div>
                </div>




                <!----------------------------------------second slide card------------------------->





                <div class="card slider-card-sizing mySlides">
                    <img class="imgcard-slider imgshape-slider  img-border-slider2" src="images/Block3.png"
                        alt="Bild ladet nicht!">
                    <div class="card-body">

                        <h2 class="card-title slider-title-card2">AquaKidz Mermaid</h2>
                        <p class="card-text font-color text-slider-cutting">Das Mythische Geschöpf der Meerjungfrau
                            fasziniert viele Kinder. Mithilfe der Monoflosse können Kinder die bereits Sicherheit im
                            Wasser haben eine ganz besondere Erfahrung machen. Mithilfe der Monoflosse können Kinder
                            ab 6 Jahren abtauchen und sich wie ein Teil des Meervolkes fühlen. Monoflossen sind auch
                            bei Erfahrenen Tauchern beliebt, wir bieten einen sicheren Einstieg in den Umgang mit
                            diesem Equipment.</p>


                    </div>
                    <div style="float:right;">
                        <a href="<?php echo $url_helper;?>Kursarten/......." class="btn  slider-card-button2">Mehr
                            Erfahren</a>
                    </div>
                </div>









                <!----------------------------------------third slide card------------------------->






                <div class="card slider-card-sizing mySlides">
                    <img class="imgcard-slider imgshape-slider  img-border-slider3" src="images/Block3.png"
                        alt="Bild ladet nicht!">
                    <div class="card-body">

                        <h2 class="card-title slider-title-card3">AquaKidz Vacation</h2>
                        <p class="card-text font-color text-slider-cutting">In den Intensiv-Ferienkursen der
                            AquaKidz Schwimmschule erfahren die Kids vor allem den Spass am Nass. Egal ob Anfänger
                            oder Fortgeschrittene, die Kids lernen die Freude und den sicheren Umgang mit der
                            Bewegung im Wasser. In niveaugerechten kleinen Kursgruppen bis max. 8 Kids werden wir
                            gemeinsam step by step mit altersgerechten Spielen das Schwimmen erlernen.</p>


                    </div>
                    <div style="float:right;">
                        <a href="<?php echo $url_helper;?>Kursarten/....." class="btn  slider-card-button3">Mehr
                            Erfahren</a>
                    </div>
                </div>







                <!----------------------------------------fourth slide card------------------------->



                <div class="card slider-card-sizing mySlides">
                    <img class="imgcard-slider imgshape-slider  img-border-slider4" src="images/Block3.png"
                        alt="Bild ladet nicht!">
                    <div class="card-body">

                        <h2 class="card-title slider-title-card4">AquaKidz Birthday</h2>
                        <p class="card-text font-color text-slider-cutting">Machen sie den nächsten Geburtstag an
                            dem Ort wo sich Kinder wohl fühlen. Wir helfen mit unserer Erfahrung, das es ein
                            fantasievolles Erlebnis wird. Ob als fürchterliche Piratenmannschaft ein Schiff entern,
                            mit der Meerjungfrau nach den schönsten Perlen tauchen oder bei den Olympischen Spielen
                            in Langnau Medaillen abräumen, wir finden das passende erlebnis für den großen Tag.</p>


                    </div>
                    <div style="float:right;">
                        <a href="<?php echo $url_helper;?>Kursarten/......" class="btn  slider-card-button4">Mehr
                            Erfahren</a>
                    </div>
                </div>








            </div> 
            <!-- <div style="text-align:center; margin-bottom:100px;">
                <span class="dotslider" onclick="plusDivs(1)"></span>
                <span class="dotslider" onclick="plusDivs(2)"></span>
                <span class="dotslider" onclick="plusDivs(3)"></span>
                <span class="dotslider" onclick="plusDivs(4)"></span>
<!-- </div> -->
           

        </div>

        <!--slider javascript-->
        <!-- <script>
            var slideIndex = 1;
            var timer = null;
            showDivs(slideIndex);

            function plusDivs(n) {
                clearTimeout(timer);
                showDivs(slideIndex += n);
            }

            function currentSlide(n) {
                clearTimeout(timer);
                showDivs(slideIndex = n);
            }

            function showDivs(n) {
                var i;
                var mySlides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dotslider");
                if(n == undefined){
                    n = ++slideIndex
                }
                if (n > mySlides.length) {
                    slideIndex = 1
                }
                if (n < 1) {
                    slideIndex = mySlides.length
                }
                for (i = 0; i < mySlides.length; i++) {
                    mySlides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                 }
                mySlides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
                
            timer = setTimeout(showDivs, 2000);
            }
        </script> --> 

        <!--card 5 -->
        <div class="hintergrundbild-card5"></div>
        <div class="container">

            <div class="card card5-size">
                <div class="card-body">
                    <div class="font-color">
                        <h1 class="card-title text-card5"> Den Fortschritt Ihres Kindes immer im Blick</h1>
                        <p class="card5-text" style="font-size:22px; height:188px; width:530px;">AquaKidz bietet
                            allen Eltern eine Möglichkeit Rückmeldungen zum Erfolg der Kinder im Kurs zu
                            erhalten, auch wenn sie nicht vor Ort sind. Unsere Trainer notieren und bewerten
                            für sie die Schritte die Ihr Kind im Kurs macht. Sie erhalten frühzeitig
                            Rückmeldung zu möglichen Problemen und Potenzial.</p>
                        <ul class="bullet-testing font-color font-sizing-card5 " style="padding-left:38px !important;">

                            <li class="a-sizing-index">
                                <a>graphische Übersicht jeder Basiskompetenz</a>
                            </li>
                            <li class="a-sizing-index">
                                <a>Übersicht Kurstermine (Kursstart und Ende)</a>
                            </li>
                            <li class="a-sizing-index">
                                <a>Einfache Ersatzterminbuchung</a>
                            </li>
                            <li class="a-sizing-index">
                                <a>Krankenkassenbestätigung zur Rückerstattung</a>
                            </li>
                            <li class="a-sizing-index">
                                <a>direkter Kontakt zum Kursleiter</a>
                            </li>

                        </ul>
                    </div>

                </div>
                <a href="#" class="btn btn-card5 ">Mehr Erfahren</a>



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