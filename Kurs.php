<!-- organisation der url -->
<?php 
 session_start();
$url_helper= "";
/* einbingung der database connection*/
include  $url_helper .'include/database.php';



  if( isset($_COOKIE['kursort'])) {
    $cookie_kursort = $_COOKIE["kursort"]; 
    } else {
        $cookie_kursort = "";
  }
 

$BildHerr = 'img/Bild_Platzhalter_Mann.jpg';
$BildFrau = 'img/Bild_Platzhalter_Frau.jpg';
$BildNeutral = 'img/StandartProfilbild.jpg';



$Getid = $_GET['id'];



$result = mysqli_query($con_mysqli,"SELECT * FROM kurse WHERE kurs_id=$Getid ");



while($row = mysqli_fetch_array($result))
{  
    $sql_kurs_id = $row['kurs_id'];
    $sql_fm_kurs_id = $row['fm_kurs_id'];
    $sql_fm_bad_id = $row['fm_bad_id'];
    $sql_fm_bad_name_druck = $row['fm_bad_name_druck'];
    $sql_fm_bad_strasse = $row['fm_bad_strasse'];
    $sql_fm_bad_ort = $row['fm_bad_ort'];
    $sql_fm_offene_plaetze = $row['fm_offene_plaetze'];
    $sql_fm_bad_postleitzahl = $row['fm_bad_postleitzahl'];
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
$result_mitarbeiter = mysqli_query($con_mysqli,"SELECT * FROM mitarbeiter  WHERE mitarbeiter_id=$Getid");



while($row = mysqli_fetch_array($result_mitarbeiter))
{  
    $sql_fm_mitarbeiter_fm_id= $row['mitarbeiter_fm_id'];
    $sql_fm_vorname = $row['vorname'];
    $sql_fm_nachname= $row['nachname'];
    $view_profilbild = $row['profilbild_arbeit'];
}
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

  <!-- <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script> -->
  <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
  
  </script>

  <script defer
    src="https://maps.googleapis.com/maps/api/js?key=XXXX&callback=initMap">
  </script>

</head>

<body>

  <!--navbar wird eingebunden-->
  <?php
include $url_helper .'include/navbar.php';
?>
  <!--------------ende der einbindung------------------>

  <div class="blue-box-kurs">
    <div class="container">
      <div class="row">

        <div class="col-5">

          <div class="card first-card-kurs">
            <div class="card-body">
              <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px"> AQUABABY</h1>
                <?= $sql_fm_bad_ort; ?>

                <?php
               
                $result = mysqli_query($con_mysqli,"SELECT * FROM termine where kurs_fm_id=$sql_kurs_fm_id order by date ASC");

                        while($row = mysqli_fetch_array($result))
                        {  
                            $sql_termin_termin_id = $row['termin_id'];
                            $sql_termin_termin_fm_id = $row['termin_fm_id'];
                            $sql_termin_kurs_id = $row['kurs_fm_id'];
                            $sql_termin_date = $row['date'];
                            $sql_termin_startzeit = new DateTime($row['startzeit']);
                            $sql_termin_endzeit = $row['endzeit'];
                            $sql_termin_created_at = new DateTime($row['created_at']);
                            $sql_termin_updated_at = new DateTime($row['updated_at']);

                ?>

                <?php } ?>


                <ul style="list-style-type:none;">
                  <li></li>

                  <?php if($sql_fm_vorname == "") { 
                    $keinkursleiter = "Leider kein Kursleiter angegeben";
                    ?>
                  <li>KURSLETIUNG: <?=$sql_fm_vorname . " ". $sql_fm_nachname?> <?= $keinkursleiter?></li>
                  <?php } ?>
                  <li>KURSLEKTIONEN:......LEKTIONEN</li>
                  <li>KURSGELD: <?= $sql_fm_kurskosten; ?> CHF</li>

                </ul>

              </div>
            </div>
            <a href="#" class="btn  btn_aquababy_zum_kursanmelden">Zum Kursort</a>
          </div>

          <!---button zum kurs ort-->


        </div>


        <div class="col-5" style="height:624px !important;">

          <section class="jetzt-buchen-pos" id="section1">
            <a class="jetzt-buchen-style" href="#section2">Jetzt Buchen!</a>
          </section>
        </div>

      </div>
    </div>
  </div>




  <div class="container">
    <div class="big-box-text">
      <div class="row" style="margin-top:100px;">


        <div class="col-6">

          <p class="title_of_text">ÜBER DEN KURS</p>
          <p class="über-den-kurs-undertitle">Frühförderung im Wasser, Schutz- und Lernerfahrung für Ihr Kind</p>
          <p class="text-über-kurs">Das erste Mal im Wasser ist eine ganz besondere Erfahrung. Gemeinsam mit Ihnen
            erlernt Ihr Kind früh Sicherheit im Schwimmbecken zu erhalten. Sie fördern die körperliche und geistige
            Entwicklung in den ersten Lebensjahren nachhaltig und unterstützen einen gesunden Umgang mit dem Wasser. In
            überschaubaren Gruppen vermitteln unsere Trainer wichtige Grundlagen die ein Kind für die erste
            Wassergewöhnung braucht. Mit verschiedenen Übungen und Geduld, stärken sie in einer Gruppe von
            gleichgesinnten Eltern die Fähigkeiten Ihres Kleinen, sein Immunsystem und Ihre Bindung mit Ihm</p>

        </div>



        <div class="col-6">
          <p class="title_of_text">WIR LERNEN:</p>
          <ul class="table-wirlernen">
            <li>
              <a>- Sicherheit im Wasser</a>
            </li>
            <li>
              <a>- Erste Erfahrungen in Atmungskontrolle und tauchen</a>
            </li>
            <li>
              <a>- Schwimmübungen mit Wechselbeinschlag in Bauchlage</a>
            </li>
            <li>
              <a>- Streck-, Atem- und Greifreflexe zu verbessern</a>
            </li>
            <li>
              <a>- Das selbständige rausklettern aus dem Becken</a>
            </li>
            <li>
              <a>- Massage und Yoga-Übungen zur Beruhigung.</a>
            </li>
          </ul>



          <p class="title_of_text">WICHTIGSTE INFOS:</p>
          <ul class="table-wirlernen">

            <li>
              <a>- Altersstufe: ca. 10 Wochen bis 24 Monate.</a>
            </li>
            <li>
              <a>- Anzahl Schüler: 4-6</a>
            </li>
            <li>
              <a>- Kurse: 8 x 30 Minuten</a>
            </li>
            <li>
              <a>- Quereinstieg: möglich</a>
            </li>

          </ul>

        </div>

      </div>
    </div>
  </div>
  </div>


  <div class="big-box-map">
    <div class="container">

     
        <div class="row">

       
        <div class="col-xl-6">
          <h1 style="color: white;">IHR TRAINER</h1>
          <p></p>
           </div>
          <?php

$result_mitarbeiter_bilder = mysqli_query($con_mysqli,"SELECT * FROM mitarbeiter  WHERE mitarbeiter_id=$Getid");

   while($row = mysqli_fetch_array($result_mitarbeiter_bilder))
                        {
                            $view_profilbild = $row['profilbild_pfad'];
                            $view_anrede = $row['anrede'];
                            if ($view_profilbild != NULL){

                            }else
                                if ($view_anrede == 'Herr'){
                                    $view_profilbild = $BildHerr;

                                }elseif ($view_anrede == 'Frau')
                                    $view_profilbild = $BildFrau;

                                else{
                                    $view_profilbild = $BildNeutral;

                                } 
                                echo '<div class="col-xl-6">';
                            echo '<div class="kreis-slider"">';
                              echo "<img src=" . $view_profilbild . " alt=\"Profilbild\" width=\"300px\" height=\"300px\" border-radius=\"50%\"/>";
                            echo "</div>";
                            echo "</div>";
                              }
                            ?>
       
      </div>
      <div class="row">
        <div class="col-xl-6">
          <form action="" method="" class="styling-form-kurs">
            <!-- er soll rechnen wenn er auf der aquababy seite ist und auf kur drückt form action? und google maps auf andere seite oder session
              <input class="btn btn-primary" type="submit" value="rechen" /></form>
              -->
            <h1 class="kurs-seite-einzel-text">ADRESSE:</h1>
            <p class="kurs-seite-einzel-text"><?= $sql_fm_bad_name_druck . "</br>" . $sql_fm_bad_strasse . "</br>" . $sql_fm_bad_ort;?></p>

            <h1 class="kurs-seite-einzel-text">ANREISE:</h1>

            <p class="kurs-seite-einzel-text"></p>



          </form>
        </div>
        <div class="col-xl-6">

          <style>
            #map {
              height: 400px;
              width: 500px;
            }
          </style>

          <div id="map"></div>

        <script>
                             function initMap() {
                                 // map options 
                               
                                var directionsService = new google.maps.DirectionsService();
                                var directionsDisplay = new google.maps.DirectionsRenderer();

                                var map = new google.maps.Map(document.getElementById('map'), {
                                zoom:7,
                                //muss noch anders gemacht werden erkennt keine postleit zahl entweder mit geocode oder umformatieren lassen vom koordinaten zu plz
                                // center:<?= $_POST["search_ort_plz1"]; ?>,
                                mapTypeId: google.maps.MapTypeId.ROADMAP
                                });

                                directionsDisplay.setMap(map);


                                var request = {
                                origin: '<?=  $cookie_kursort?>', 
                                destination: '<?= $sql_fm_bad_ort , $sql_fm_bad_strasse  ?>',
                                travelMode: google.maps.DirectionsTravelMode.DRIVING
                                };

                                directionsService.route(request, function(response, status) {
                                    //schaut ob der status ok ist 
                                if (status == google.maps.DirectionsStatus.OK) {
                                    directionsDisplay.setDirections(response);
                                }
                             
                                var myRoute = response.routes[0].legs[0];
                                var duration = myRoute.duration.value;
                                var distance = myRoute.distance.value;  
                               

                                var distanceP = document.getElementById('distance');
                      //ausgabe der berechnung 
                              //document.getElementById('distance').innerHTML=response.routes[0].legs[0].distance.text;


                                });

                             }

                             // google.maps.event.addDomListener(window, 'load', initMap)
                         </script>


                        <!-- <span id="distance"></span> -->



        </div>
      </div>
    </div>
  </div>








  <!--Anfang Buchungs form-->

  <div class="big-box-more">
    <div id="section2" class="container">





      <form action="" method="post" class="form-color-overall">

        <!--form überschrift-->
        <p class="form-title-buchen">Angaben zum Kursteilnehmer</p>
        <!-- form content -->



        <div class="form-group ">
          <label class="first-card-text">Kurs</label>
          <input name="kurs_k" type="text" class="form-control labelshape" value="<?= $kurs_text; ?>">
        </div>


        <div class="form-row">

          <div class="form-group col-xl-3">
            <label class="first-card-text">Name Kind*</label>
            <input type="text" class="form-control labelshape" name="name_k" value="<?= $name_kind; ?>">
          </div>


          <div class="form-group col-md-3">
            <label class="first-card-text">Vorname Kind*</label>
            <input type="text" class="form-control labelshape" name="vorname_k" value="<?= $vorname_kind?>">
          </div>

          <div class="form-group col-md-3">
            <label class="first-card-text">Geburtsdatum Kind*</label>
            <input type="text" placeholder="tt.mm.jjjj" class="form-control labelshape" name="geburtstag_k"
              value="<?= $geburtstag_kind ?>">
          </div>



          <div class="form-group col-md-3">
            <label class="first-card-text">Gesundheitsstatus</label>
            <input type="text" class="form-control labelshape">
          </div>
        </div>



        <!----------------Angaben Kunden ------------->

        <p class="form-title2-buchen">Angaben Kunde</p>


        <div class="form-row">

          <!-- form content -->

          <div class="form-group col-md-1">
            <label class="first-card-text">Anrede*</label>
            <div class="dropdown-firstcard">

              <?php 
                if($angaben_k == "1"){
                ?>
              <Select class="form-control labelshape" id="angaben_anrede" name="angaben_kunde" type="text"
                value="<?= $session_anrede; ?>">
                <option disabled selected value style="color:white;"></option>
                <option value="1" selected>Herr</option>
                <option value="2">Frau</option>
                <option value="3">Familie</option>
              </select>

              <?php 
                }else if($angaben_k == "2"){
                ?>
              <Select class="form-control labelshape" id="angaben_anrede" name="angaben_kunde" type="text"
                value="<?= $session_anrede; ?>">
                <option disabled selected value style="color:white;"></option>
                <option value="1">Herr</option>
                <option value="2" selected>Frau</option>
                <option value="3">Familie</option>
              </select>

              <?php 
                 }else if($angaben_k == "3"){
                ?>
              <Select class="form-control labelshape" id="angaben_anrede" name="angaben_kunde" type="text"
                value="<?= $session_anrede; ?>">
                <option disabled selected value style="color:white;"></option>
                <option value="1">Herr</option>
                <option value="2">Frau</option>
                <option value="3" selected>Familie</option>
              </select>
              <?php 
              }
              
              ?>

            </div>
          </div>



          <div class="form-group col-md-2">
            <label class="first-card-text">Ihr Name*</label>
            <input type="text" class="form-control labelshape" name="name_kunde">
          </div>

          <div class="form-group col-md-2">
            <label class="first-card-text">Vorname*</label>
            <input type="text" class="form-control labelshape" name="vorname_kunde">
          </div>



          <div class="form-group col-md-3">
            <label class="first-card-text">Strasse*</label>
            <input type="text" class="form-control labelshape" name="strasse_kunde">
          </div>

          <div class="form-group col-md-1">
            <label class="first-card-text">Nr.*</label>
            <input type="text" class="form-control labelshape" name="nummer_kunde">
          </div>

          <div class="form-group col-md-1">
            <label class="first-card-text">Plz*<i class="far fa-question-circle"></i></label>
            <input type="text" name="postleitzahl" pattern="^[0-9]{4}$" class="form-control labelshape"
              name="plz_kunde">
          </div>

          <div class="form-group col-md-2">
            <label class="first-card-text">Ort*</label>
            <input type="text" class="form-control labelshape" name="ort_kunde">
          </div>

        </div>


        <div class="form-row">

          <div class="form-group col-md-4">
            <label class="first-card-text">Ihre E-Mail-Adresse*</label>
            <input type="email" class="form-control labelshape" name="email_kunde">
          </div>

          <div class="form-group col-md-4">
            <label class="first-card-text">Telefon</label>
            <input type="text" class="form-control labelshape" name="telefon_kunde">
          </div>

          <div class="form-group col-md-4">
            <label class="first-card-text">Natel</label>
            <input type="text" class="form-control labelshape" name="natel_kunde">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label class="first-card-text">Gutscheincode</label>
            <input type="text" class="form-control labelshape" name="gutschein_kunde">
          </div>
          <div class="form-group col-md-2">
            <label class="first-card-text">Zahlugsart</label>
            <div class="dropdown-firstcard">
              <Select class="form-control labelshape" name="zahlung_kunde" required>
                <option disabled selected value style="color:white;"></option>
                <option selected>Rechnung</option>
              </select>
            </div>
          </div>

          <div class="form-container-check" style="margin-bottom:auto; margin-top:auto;">
            <input class="" type="checkbox"><a class="" href="Agb" style="color:white;">AGB</a>
          </div>

          <input type="submit" href="" class="btn buchen-bottom" name="buchen_button" value="Jetzt Buchen!">
        </div>
    </div>
  </div>


  </form>





  </div>
  </div>
  <?php


            $kurs_text = htmlspecialchars($_POST['kurs_k']);
            $_SESSION['kurs_text'] = $kurs_text; 

            $name_kind = $_POST['name_k'];
            $_SESSION['name_kind'] = $name_kind; 

            $vorname_kind = $_POST['vorname_k'];
            $_SESSION['vorname_kind'] = $vorname_kind; 

            if(isset($_POST['danke_buchen'])){
              $kurs_text = $_POST['kurs_k'];
              $name_kind = $_POST['name_k'];
              $vorname_kind = $_POST['vorname_k'];
              $geburtstag_kind = $_POST['geburtstag_k'];

              //$all_form = $kurs_text . $name_kid;
            }
            if ($kurs_text){
              echo ' <script> window.location="danke_buchen";</script>';
            }
            elseif ($name_kind){
              echo ' <script> window.location="danke_buchen";</script>';
            }

            elseif ($vorname_kind){
              echo ' <script> window.location="danke_buchen";</script>';
            }

            elseif ($geburtstag_kind){
              echo ' <script> window.location="danke_buchen";</script>';
            }
            ?>

  </form>


  </div>



  <!--Ende Buchungs form-->



  <div class="container">
    <h2 class="text-spiezial" style="margin-top:150px !important;">BRAUCHEN SIE MEHR INFORMATIONEN?</h2>

    <div class="row">
      <div class="col-sm-12 col-xl-6 col-md-12 col-lg-12">
        <div class="card card-1-sizing">
          <div class="row no-gutters">
            <div class="col-md-8">
              <div class="card-body">
                <h5 class="card-title" style="color:rgb(8, 51, 194);">WISSEN FÜR ELTERN</h5>
                <p class="card-text font-color">Wir haben die wichtigsten Informationen für Eltern von
                  Babys
                  und jungen Kindern zusammengestellt, damit sie Wissen worauf es ankommt.</p>
              </div>
            </div>
            <a href="#" class="btn  mehr-erfahren">Mehr Erfahren</a>

          </div>

        </div>
      </div>

      <div class="col-sm-12 col-xl-6 col-md-12 col-lg-12">
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

            <a href="mailto:info@aquatime.ch?subject=Mehr%20informationen%20über%20Aquatime"
              class="btn  btn_email">Email</a>

            <a href="tel:+41774235838" class="btn  btn_auf">Anrufen</a>
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
