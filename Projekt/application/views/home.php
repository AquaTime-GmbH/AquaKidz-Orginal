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

<div class="hintergrundbild">
<div class="border_under">
</div>
</div>
<div class="container">
    <div class="col-sm-5">

    <form action=""  method="post" >
        <div class="card first-card">
            <div class="card-body">
                <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px">SCHWIMMEN LERNEN, SCHWIMMEN LIEBEN</h1>
                    <p class="card-text first-card-text" >Sichere und altersgerechte Kurse für Babys und Kinder. Denn schwimmen lernen soll Spass machen.</p>

                    <label class="col-4 col-form-label first-card-text">Ort</label>
                    <div class="col-12">
                        <input class="form-control labelshape" id="search_ort" name="search_ort" type="text" value="<?= $cookie_kursort ?>">
                    </div>

                    <label  class="col-6 col-form-label first-card-text">Kurs Start</label>
                    <div class="col-12">
                        <input class="form-control labelshape"  id="search_start" name="search_start" type="date" value="<?php echo $cookie_kursstart ?>">
                    </div>

                    <label class="col-8 col-form-label first-card-text">Wie alt ist ihr Kind ?</label>
                    
                    <div class="col-12">
                        <div class="dropdown-firstcard">
                            <?php
                            if($cookie_kursalter == "1"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter ?>">
                                <option value="1" selected>CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php
                            }
                            elseif($cookie_kursalter == "2"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter ?>">
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2" selected>CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php
                            }
                            elseif($cookie_kursalter == "4"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter ?>">
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4" selected>CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7">AB CA. 7 JAHRE</option>
                            </select><?php
                            }
                            elseif($cookie_kursalter == "7"){
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter ?>">
                                <option value="1">CA. 10 WOCHEN - 24 MONATE</option>
                                <option value="2">CA. 2 BIS 3 JAHRE</option>
                                <option value="4">CA. 3,5 BIS 7,5 JAHRE</option>
                                <option value="7" selected>AB CA. 7 JAHRE</option>
                            </select><?php
                            }
                            else{
                                ?>
                                <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter ?>">
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
                <input type="submit" href="#" class="btn search-buttom" name="search_button" value="Suchen">
            </div>
        </div>
    </div>
    </form>

            <?php if(isset($_POST['search_button'])){
                $viewsearch_ort = $_POST['search_ort']; 
                $viewsearch_start = $_POST['search_start']; 
                $viewsearch_alt = $_POST['search_alt']; 


                if($viewsearch_alt != ''){
                    
                setcookie("kursalter","$viewsearch_alt",time()+(3600*168)); 
                setcookie("kursstart","$viewsearch_start",time()+(3600*168)); 
                setcookie("kursort","$viewsearch_ort",time()+(3600*168)); 



                if($viewsearch_alt == "1"){

                header('location: schwimmkurse');
                    exit();
                }elseif($viewsearch_alt == "2"){
                    header('location: schwimmkurse');
                    exit();
                }elseif($viewsearch_alt == "4"){
                    header('location: schwimmkurse');
                    exit();
                }elseif($viewsearch_alt == "7"){
                    header('location: schwimmkurse');
                    exit();
                }


               
                
                }
                else{
                    setcookie("kursstart","$viewsearch_start",time()+(3600*168)); 
                    setcookie("kursort","$viewsearch_ort",time()+(3600*168)); 

                    header('location: kursorte');
                    exit();
                }
            } ?>

     <!-- Das sind alle 3 Cards(flexboxen) in der mitte der Webseite -->
        <div class="row">
        <div class="col-sm-4">
           
                <div class="card card-sizing">
                    <img class="imgcard imgshape card-img-top img-border1" src="assets/images/Block1.png"  alt="Bild ladet nicht!">
                <div class="card-body">
                    <h2 class="card-title title-card1">SICHER SCHWIMMEN LERNEN MUSS SPASS MACHEN</h2>
                    <p class="card-text font-color" style="height:149px; width:366px;">Kinder lernen wenn sie richtig gefördert werden. Unsere Kurse sind auf die Fähigkeiten und das alter unserer Schüler zugeschnitten. Wir setzen auf erfahrene Lehrpersonen die die Zeit im Wasser zu einem wunderbaren Erlebnis machen.</p>     

                </div>
                <div style="float:right;">
                    <a href="#"  class="btn  btn_card1">Mehr Erfahren</a>
                </div>
            </div>
        </div>
    
    <div class="col-sm-4">
        <div class="card card-sizing">
            <img class="imgcard imgshape card-img-top img-border2" src="assets/images/Block2.png"   alt="Bild ladet nicht!">
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

    <div class="col-sm-4">
        <div class="card card-sizing">
            <img class="imgcard imgshape card-img-top img-border3" src="assets/images/Block3.png" alt="Bild ladet nicht!">
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

    <!-- text über den 4 cards -->

    <h2 class="kurse-text">KURSE FÜR JEDES ALTER</h2>
    <div class="text-kurse">
        <p>Wir gestalten Kurse nach den altersgerechten Bedürfnissen Ihres Kindes. Ob sanfte Wassergewöhnung für Babys, Sicherheit im Wasser oder der mit Grundlagen-Abzeichen qualifizierte Kurs für Kids, wir schaffen die richtige Umgebung, um das Potenzial/ Fähigkeiten unserer kleinen und großen AquaKidz bestens zu fördern.</p>
    </div>
    <!-- Das sind alle 4 Cards(flexboxen) in der mitte der Webseite -->

<div class="row">
<div class="col-sm-6">
    <div class="card card-4-sizing">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="assets/images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg" class="card-img card-4-img" alt="Bild Konnte nicht Geladen werden!">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title card-title-style">AquaBaby -  Babyschwimmen</h5>
                    <p class="card-text under-font"><small>CA. 10 Wochen - 24 Monate</small></p>
                    <p class="card-text font-color">Frühförderung im Wasser, Schutz- und Lernerfahrung für Ihr Kind</p>
                    <p class="card-text font-color">Eltern und Kind starten zusammen in einem idealen Umfeld den ersten Wasserkontakt. Unsere Kursleiter helfen Ihnen und Ihrem Kind mit Übungen und Geduld die ersten Schläge im Wasser zu machen.</p>
                
                </div>  
                
            </div>
            <a href="#"  class="btn  bnts_card4">Mehr Erfahren</a>
        </div>
    </div>
    </div>
    <div class="col-sm-6">
        <div class="card card-4-sizing">
            <div class="row no-gutters">
                <div class="col-md-4">
                    <img src="assets/images/little-girl-diving-in-swimming-pool-P5NRPSW.jpg" class="card-img card-4-img" alt="Bild Konnte nicht Geladen werden!">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title card-title-style">AQUAKIDZ MINI - KLEINKINDERSCHWIMMEN</h5>
                        <p class="card-text under-font"><small>CA. 2 BIS 3 JAHRE</small></p>
                        <p class="card-text font-color">Wassergewöhnung, Wasserbewäl gung und Wassersicherheit</p>
                        <p class="card-text font-color">Wir fördern in unserem ersten Kleinkinderschwimmkurs was alle Kinder brauchen um erfolgreiche Schwimmer zu werden. Grundlagen des Schwimmens und Sicherheit im Wasser, vermittelt von erfahrenen Kursleitern.</p>
                       
                    </div> 
                    
                </div>
                <a href="#"  class="btn  bnts_card4">Mehr Erfahren</a>
            </div>
        </div>
    </div>
</div>

<div class="row" style="margin-top:30px; margin-bottom:30px;">
    <div class="col-sm-6">
    <div class="card card-4-sizing">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="assets/images/friendly-children-with-swimming-goggles-PG3CW49.jpg" class="card-img card-4-img" alt="Bild Konnte nicht Geladen werden!">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title card-title-style">AQUAKIDZ MAXI - KLEINKINDERSCHWIMMEN</h5>
                    <p class="card-text under-font"><small>CA. 3,5 BIS 7,5 JAHRE</small></p>
                    <p class="card-text font-color">Mit Sicherheit & Spass zur Schwimm-Kompetenz</p>
                    <p class="card-text font-color">Zeit richtig loszulegen und spielerisch die wichtigsten Techniken und Fähigkeiten im Wasser zu üben und festigen. Hier bekommen Kinder die Kompetenz und das Selbstvertrauen zum erfolgreichen schwimmen.</p>
                </div>    
               
            </div> 
            <a href="#"  class="btn  bnts_card4">Mehr Erfahren</a>
        </div>
    </div>
</div>    

<div class="col-sm-6">
    <div class="card card-4-sizing">
        <div class="row no-gutters">
            <div class="col-md-4">
            <img src="assets/images/instructor-teaches-children-how-to-swim-PH82RUA.jpg" class="card-img card-4-img" alt="Bild Konnte nicht Geladen werden!">
            </div>
            <div class="col-md-8">
            <div class="card-body">
                <h5 class="card-title card-title-style">AQUAKIDZ MIXED</h5>
                <p class="card-text under-font"><small>AB CA. 7 JAHRE</small></p>
                <p class="card-text font-color ">Kompetenzen und Freude im Wasser steigern im freien Schwimmtraining</p>
                <p class="card-text font-color">Schwimmtraining ohne Verpflichtungen in denen Ihr Kind seine Fähigkeiten steigert, neue Wassersportarten kennen lernen oder seine eigenen Ziele setzen kann. Sei das Abzeichen, Verein oder einfach eine Freizeitaktivität die glücklich macht.</p>
            
              
            </div>
                
              </div> 
              <a href="#"  class="btn  bnts_card4">Mehr Erfahren</a>
            </div> 
            
        </div>
    </div>
</div>
</div>
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






<!-- Bootstrap Multi-Card Carousel -->




<div class="container-fluid">
  <h1 class="text-center mb-3">Bootstrap Multi-Card Carousel</h1>
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner row w-100 mx-auto">
      <div class="carousel-item col-md-4 active">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f44242/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 1</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/418cf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 2</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/3ed846/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 3</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/42ebf4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 4</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f49b41/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 5</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/f4f141/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 6</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
      <div class="carousel-item col-md-4">
        <div class="card">
          <img class="card-img-top img-fluid" src="http://placehold.it/800x600/8e41f4/fff" alt="Card image cap">
          <div class="card-body">
            <h4 class="card-title">Card 7</h4>
            <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
          </div>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
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
                    <p class="card-text" style="font-size:22px; height:188px; width:530px;" >AquaKidz bietet allen Eltern eine Möglichkeit Rückmeldungen zum Erfolg der Kinder im Kurs zu erhalten, auch wenn sie nicht vor Ort sind. Unsere Trainer notieren und bewerten für sie die Schritte die Ihr Kind im Kurs macht. Sie erhalten frühzeitig Rückmeldung zu möglichen Problemen und Potenzial.</p>
                    <ul class="bullet-testing font-color font-sizing-card5">
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
                
            </div> 
             <a href="#"  class="btn btn-card5 ">Mehr Erfahren</a>
              
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
                <a href="#"  class="btn  mehr-erfahren">Mehr Erfahren</a>
              
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

