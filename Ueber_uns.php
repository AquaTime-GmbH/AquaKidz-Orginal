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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
$aktivlogin = '';

include $url_helper .'include/navbar.php';

?>
     <!--------------ende der einbindung------------------>

     <div class="hintergrundbild_ueberuns"></div>


     <div class="container">




         <div class="card überuns-card">
             <div class="card-body">

                 <h1 class="card-title card-title-style" style="font-size:32px; font-weight:bold;"> ÜBER AQUAKIDZ </h1>

                 <p class="card-text überuns-card-text">"Ich wollte ein Angebot das für meine Kinder und für mich
                     gemacht ist."</p>

                 <p class="jana-gesch">Jana Mantz - Geschäftsführerin </p>
             </div>
         </div >








         <div class="row" id="sectionvonefk">
             <div class="col-md-6" style="margin-top:auto !important; margin-bottom:auto !important;">
                 <h2 style="color:var(--maincolor);" >VON ELTERN FÜR KINDER</h2>
                 <p class="text-über-eltern">Sicher schwimmen lernen war wichtig für uns als Eltern. Doch das Angebot
                     das es gab wurde entweder meinen Kindern oder meinen Anforderungen nicht gerecht. Da es nichts gab,
                     das der Qualität, Sicherheit und Flexibilität die man braucht im heutigen Lebensalltag entsprach,
                     musste ich selber hand anlegen und gründete die Firma AquaTime. Unter dem Label Aquakidz war mein
                     erster Schwerpunkt die richtigen Leute mit Erfahrung und die richtigen Orte zu finden, um die
                     bestmögliche Umgebung für das Wassererlebnis von Kindern zu schaffen. Bald fand ich heraus das
                     viele Eltern die gleichen Bedürfnisse haben und dank Ihnen kann ich konstant mehr Kurse mehr
                     Leiter und mehr Know- How zu meinem Angebot hinzufügen.</p>


             </div>


             <div class="col-md-6">
                 <div class="kreis-über-uns"></div>


             </div>


             <!--end of row-->
         </div>





         <!--end of container-->
     </div >


     <div class="über-uns-box" id="sectionmotivation">
         <div class="container">
             <p  class="motivation-über-title">UNSERE MOTIVATION</p>














             <div class="row">
                 <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                     <div class="card card-4-sizing-über-uns">


                         <img src="<?php echo $url_helper;?>images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg"
                             class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">

                         <div class="col-md-12">
                             <div class="card-body">

                                 <p class="text-über-4">Sicherheit und Geborgenheit für Kinder und Eltern in
                                     überschaubaren Gruppen mit kompetenten qualifizierten Kursleitern.</p>


                             </div>

                         </div>
                     </div>
                 </div>



                 <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                     <div class="card card-4-sizing-über-uns">


                         <img src="<?php echo $url_helper;?>images/little-girl-diving-in-swimming-pool-P5NRPSW.jpg"
                             class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">

                         <div class="col-md-12">
                             <div class="card-body">


                                 <p class="text-über-4">Offene Kommunikation zwischen Eltern, Kind und Kursleiter. Wir
                                     wollen ohne Zwang und Druck Kinder fördern und Eltern den Fortschritt Ihres
                                     Sprösslings nach jedem Kurs vermitteln.</p>



                             </div>

                         </div>

                     </div>

                 </div>
             </div>

             <div class="row" style="margin-top:30px; margin-bottom:30px;">
                 <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                     <div class="card card-4-sizing-über-uns">


                         <img src="<?php echo $url_helper;?>images/friendly-children-with-swimming-goggles-PG3CW49.jpg"
                             class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">

                         <div class="col-md-12">
                             <div class="card-body">
                                 <p class="text-über-4">Erprobtes Wissen einsetzen für Kurse die aufeinander aufbauen
                                     und die Kompetenzen des Kindes im Wasser nach Alter und Fähigkeit individuell
                                     steigern.</p>


                             </div>

                         </div>
                     </div>
                 </div>


                 <div class="col-xl-6 col-lg-12 col-md-12 col-sm-12">
                     <div class="card card-4-sizing-über-uns">

                         <img src="<?php echo $url_helper;?>images/instructor-teaches-children-how-to-swim-PH82RUA.jpg"
                             class="card-img card-4-img-über-uns" alt="Bild Konnte nicht Geladen werden!">

                         <div class="col-md-12">
                             <div class="card-body">

                                 <p class="text-über-4">Spass muss sein. Wasseraktivitäten fördern Sensorik, Motorik,
                                     Reflexe, das Immunsystem und können die Konzentrationsfähigkeit steigern.
                                     Wichtiger als das ist aber, dass die kleinen Freude am Wassersport entwickeln und
                                     langfristig selbständig den Weg ins Becken suchen.</p>


                             </div>

                         </div>

                     </div>
                 </div>
             </div>





         </div>

     </div>



     <div class="container">

         <h2 class="überschrift-vier" id="sectionqualli">UNSERE PARTNER FÜR MEHR SICHERHEIT</h2>

         <div class="row">
             <div class="col-md-3">

                 <div class="vier-kreise-über-uns"></div>

             </div>

             <div class="col-md-3">

                 <div class="vier-kreise-über-uns"></div>

             </div>

             <div class="col-md-3">

                 <div class="vier-kreise-über-uns"></div>

             </div>

             <div class="col-md-3">

                 <div class="vier-kreise-über-uns"></div>

             </div>


         </div>


     </div>



     <?php



    $result = mysqli_query($con_mysqli,"SELECT * FROM kurse");

   



while($row = mysqli_fetch_array($result))
{  
    
    $sql_kurs_id = $row['kurs_id'];
    $sql_fm_kurs_id = $row['fm_kurs_id'];
    $sql_fm_bad_id = $row['fm_bad_id'];
    $sql_fm_bad_name_druck = $row['fm_bad_name_druck'];
    $sql_fm_bad_strasse = $row['fm_bad_strasse'];
    $sql_fm_bad_ort = $row['fm_bad_ort'];
    $sql_fm_bad_postleitzahl = $row['fm_bad_postleitzahl'];
    $sql_fm_offene_plaetze = $row['fm_offene_plaetze'];
    $sql_fm_von_datum_html = new DateTime($row['fm_von_datum_html']);
    $sql_fm_bis_datum_html = new DateTime($row['fm_bis_datum_html']);
    $sql_fm_text_kursinfo = $row['fm_text_kursinfo'];
    $sql_fm_kurskosten = $row['fm_kurskosten'];
    $sql_fm_kurstrainer_erster_id = $row['fm_kurstrainer_erster_id'];
    $sql_fm_marken_id = $row['fm_marken_id'];
    $sql_fm_marke = $row['fm_marke'];
    $sql_fm_markenfamilie = $row['fm_markenfamilie'];
    $sql_fm_Niveau_Description_Internet = $row['fm_Niveau_Description_Internet'];
    $sql_fm_Alter = $row['fm_Alter'];
    $sql_fm_wochentag = $row['fm_wochentag'];
    $sql_fm_Startzeit = new DateTime($row['fm_Startzeit']);
    $sql_fm_Dauer = $row['fm_Dauer'];
    $sql_fm_taeglich = $row['fm_taeglich'];
    $sql_fm_Bad_Eintritt = $row['fm_Bad_Eintritt'];
    $sql_fm_sonst_Kosten = $row['fm_sonst_Kosten'];
    $sql_diagramm_kz1_text = $row['diagramm_kz1_text'];
    $sql_diagramm_kz2_text = $row['diagramm_kz2_text'];
    $sql_diagramm_kz3_text = $row['diagramm_kz3_text'];
    $sql_diagramm_kz4_text = $row['diagramm_kz4_text'];
    $sql_diagramm_kz5_text = $row['diagramm_kz5_text'];
    $sql_diagramm_kz6_text = $row['diagramm_kz6_text'];
    $sql_diagramm_kz7_text = $row['diagramm_kz7_text'];
    $sql_diagramm_kz8_text = $row['diagramm_kz8_text'];
    $sql_fm_status = $row['fm_status'];
    $sql_counter = $row['counter'];
    $sql_updated_at = new DateTime($row['updated_at']);
    $sql_created_at = new DateTime($row['created_at']);

}

?>




     <div class="über-uns-box2">

         <div class="container">

             <p id="sectionteam" class="überschirft-team-über">UNSER TEAM</p>

             <div class="row slides">
                 <div class="col-md-3">

                     <div class="vier-kreise-über-uns-slider"><i
                             class="fas fa-plus-circle posi-style-icon-über myBtn"></i></div>

                 </div>
                 <div class="col-md-3">

                     <div class="vier-kreise-über-uns-slider"><i
                             class="fas fa-plus-circle posi-style-icon-über myBtn"></i></div>

                 </div>

                 <div class="col-md-3">

                     <div class="vier-kreise-über-uns-slider"><i
                             class="fas fa-plus-circle posi-style-icon-über myBtn"></i></div>

                 </div>
                 <div class="col-md-3">

                     <div class="vier-kreise-über-uns-slider"><i
                             class="fas fa-plus-circle posi-style-icon-über myBtn"></i></div>

                 </div>
  <div class="ueber-uns-buttons">
            <span class="dot-slider" onclick="currentSlide(1)"></span>
            <span class="dot-slider" onclick="currentSlide(2)"></span>
            <span class="dot-slider" onclick="currentSlide(3)"></span>
            <span class="dot-slider" onclick="currentSlide(4)"></span>
        </div>
             </div>

         </div>

       
     </div>

     <!-- The Modal -->
     <div id="myModal" class="modal">

         <!-- Modal content -->
         <div class="modal-content">


             <!-- Das Kreuz zum schliessen -->
             <span class="close-ueber">&times;</span>
         </div>




     </div>
            



     <!--javascript für die Slideshow-->
     <script>
         // Get the <span> element that closes the modal
         var span = document.getElementsByClassName("close-ueber")[0];
         // Get the button that opens the modal
         var btns = document.getElementsByClassName("myBtn");



         // When the user clicks the button, open the modal 
         for (var i = 0; i < btns.length; i++) {
             btns[i].onclick = function () {
                 modal.style.display = "block";
             }
         }

         span.onclick = function () {
             modal.style.display = "none";
         }
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
             for (i = 0; i < dots.length; i++) {
                 dots[i].className = dots[i].className.replace(" active", "");
             }
             slides[slideIndex - 1].style.display = "block";
             dots[slideIndex - 1].className += " active";


         }
     </script>



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