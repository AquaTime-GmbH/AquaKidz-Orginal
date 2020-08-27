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
  if( isset($_COOKIE['kursalter'])) {
    $cookie_kursalter = $_COOKIE["kursalter"]; 
    } else {
        $cookie_kursalter = "";
  }





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

  <script src="https://maps.googleapis.com/maps/api/js?libraries=places"></script>
  <script src="https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/markerclusterer.js">
  </script>

  <script defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAjTbeyDhVSfoZW2bolDIXd9L6msWNqAl8&callback=initMap">
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

      <div class="row styling-form-kurs">
        <div class="col-6">
          <h1>IHR TRAINER</h1>
          <p></p>

        </div>

        <div class="kreis-slider">
          <img class="kreis-slider" src="<?php echo $url_helper;?>img/Frau.jpg" alt="Bild konnte nicht geladen werden!">
        </div>
      </div>

      <div class="row">
        <div class="col-xl-6">
          <form action="" method="" class="styling-form-kurs">


            <!-- er soll rechnen wenn er auf der aquababy seite ist und auf kur drückt form action? und google maps auf andere seite oder session

              <input class="btn btn-primary" type="submit" value="rechen" /></form>

              -->

            <h1 class="">ADRESSE:</h1>
            <p class="<?= $sql_fm_bad_name_druck . " , " . $sql_fm_bad_strasse . " , " . $sql_fm_bad_ort;?>"></p>

            <h1 class="">ANREISE:</h1>
            <p class=""></p>



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
              var options = {
                zoom: 6,
                center: {
                  lat: 46.818188,
                  lng: 8.227512
                }
              }
              var map = new google.maps.Map(document.getElementById('map'), options);
              // Add a marker clusterer to manage the markers.

              //Add marker
              var markers = [

                //Schweiz
                {
                  coords: {
                    lat: 53.338741,
                    lng: 8.227512
                  },
                  iconImage: 'assets/img/places/stparkdublin.png',
                  content: '<h1>St Stephen’s Green</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://ststephensgreenpark.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.3755012,
                    lng: -6.2735677
                  },
                  iconImage: 'assets/img/places/botanic garden.png',
                  content: '<h1>Botanic Garden</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://botanicgardens.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.355998576,
                    lng: -6.32166538
                  },
                  iconImage: 'assets/img/places/stparkdublin.png', ////////////////////add picture
                  content: '<h1>Phoenix Park</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>http://phoenixpark.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.460259,
                    lng: -6.219985
                  },
                  iconImage: 'assets/img/places/swordscastle.png',
                  content: '<h1>Swords Castle</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://swordscastle.events/</a>'
                },
                {
                  coords: {
                    lat: 53.37923,
                    lng: -6.07201
                  },
                  iconImage: 'assets/img/places/Howth.png',
                  content: '<h1>Howth</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>http://www.visithowth.ie/</a>'
                },
                {
                  coords: {
                    lat: 55.1364,
                    lng: -7.456
                  },
                  iconImage: 'assets/img/places/buncrana1.png',
                  content: '<h1>Buncrana</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://en.wikipedia.org/wiki/Buncrana</a>'
                },

                {
                  coords: {
                    lat: 53.152999388,
                    lng: -6.1499994
                  },
                  iconImage: 'assets/img/places/sugarloaf_icon.png',
                  content: '<h1>Great sugar loaf</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://visitwicklow.ie/item/the-sugarloaf-trail/</a>'
                },
                {
                  coords: {
                    lat: 52.0058,
                    lng: -9.5562
                  },
                  iconImage: 'assets/img/places/killarney.png',
                  content: '<h1>Killarney National Park </h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://www.killarneynationalpark.ie/</a>'
                },
                {
                  coords: {
                    lat: 51.942662896,
                    lng: -9.917162998
                  },
                  iconImage: 'assets/img/places/clifs.png',
                  content: '<h1>Ring of Kerry</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://ringofkerrytourism.com/</a>'
                },
                {
                  coords: {
                    lat: 52.679,
                    lng: -7.814
                  },
                  iconImage: 'assets/img/places/clifs.png', //add picture!!!!!!!!!!!!!!!
                  content: '<h1>Thurles</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://www.tipperary.com/thurles</a>'
                },
                {
                  coords: {
                    lat: 52.348,
                    lng: -6.517
                  },
                  iconImage: 'assets/img/places/wexford museum.png',
                  content: '<h1>Irish National Heritage Park</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://www.irishheritage.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.018,
                    lng: -6.398
                  },
                  iconImage: 'assets/img/places/wicklow.png',
                  content: '<h1> Wicklow Mountains National Park</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://www.wicklowmountainsnationalpark.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.011299,
                    lng: -6.326156
                  },
                  iconImage: 'assets/img/places/glendalough.png',
                  content: '<h1> Glendalough </h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://www.glendalough.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.1876492494,
                    lng: -6.083832998
                  },
                  iconImage: 'assets/img/places/Bray.png',
                  content: '<h1> Bray</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>http://www.bray.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.144,
                    lng: -6.072
                  },
                  iconImage: 'assets/img/places/greystones.png',
                  content: '<h1>Greystones</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://visitwicklow.ie/item/greystones/</a>'
                },
                {
                  coords: {
                    lat: 52.518664592,
                    lng: -7.887329784
                  },
                  iconImage: 'assets/img/places/Cashel.png',
                  content: '<h1>Rock of Cashel</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://www.cashel.ie/</a>'
                },
                {
                  coords: {
                    lat: 52.6477,
                    lng: -7.2561
                  },
                  iconImage: 'assets/img/places/kilkenny.png',
                  content: '<h1>Killenny</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>https://visitkilkenny.ie/</a>'
                },
                //cork
                {
                  coords: {
                    lat: 51.902694,
                    lng: -8.4767
                  },
                  iconImage: 'assets/img/places/butterCork.png',
                  content: '<h1>Museum of Butter</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://thebuttermuseum.com/</a>'
                },
                {
                  coords: {
                    lat: 51.89953,
                    lng: -8.499022
                  },
                  iconImage: 'assets/img/places/prisoncork.png',
                  content: '<h1>Cork City Gaol</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://corkcitygaol.com/</a>'
                },

                {
                  coords: {
                    lat: 53.4513204,
                    lng: -6.140871
                  },
                  iconImage: 'assets/img/places/malahideB.png',
                  content: '<h1>Malahide</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>https://www.malahide.ie/</a>'
                },

                {
                  coords: {
                    lat: 53.2839577,
                    lng: -9.0837658
                  },
                  iconImage: 'assets/img/places/galway.png',
                  content: '<h1>Galway</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>https://www.galwaytourism.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.470580,
                    lng: -6.122405
                  },
                  iconImage: 'assets/img/places/galway.png',
                  content: '<h1>Donabate Beach</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://en.wikipedia.org/wiki/Donabate</a>'
                },
                {
                  coords: {
                    lat: 52.9713299,
                    lng: -9.4300415
                  },
                  iconImage: 'assets/img/places/clifsofmoher.png',
                  content: '<h1>Donabate Beach</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://www.cliffsofmoher.ie/</a>'
                },
                {
                  coords: {
                    lat: 51.8960528,
                    lng: -8.4980693
                  },
                  iconImage: 'assets/img/places/Cork.png',
                  content: '<h1>Cork</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>https://purecork.ie/</a>'
                },
                {
                  coords: {
                    lat: 53.3667776,
                    lng: -6.5064198
                  },
                  iconImage: 'assets/img/places/Leixlip.png',
                  content: '<h1>Leixlip</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://pl.wikipedia.org/wiki/Leixlip</a>'
                },
                {
                  coords: {
                    lat: 53.1654628,
                    lng: -6.125499
                  },
                  iconImage: 'assets/img/places/littlesugarloaf.png',
                  content: '<h1>Little Sugar Loaf</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>https://www.greystonesguide.ie/little-sugar-loafs-big-day/</a>'
                },
                {
                  coords: {
                    lat: 53.5474019,
                    lng: -6.0933048
                  },
                  iconImage: 'assets/img/places/rockabill view.png',
                  content: '<h1>Rockabill View</h1>' + '<br>' + '<h2>Learn More</h2>' +
                    '<a>http://www.skerriesseatours.ie/trips.html</a>'
                },
                {
                  coords: {
                    lat: 52.3337499,
                    lng: -6.4906996
                  },
                  iconImage: 'assets/img/places/wexford.png',
                  content: '<h1>Wexford</h1>' + '<br>' + '<h2>Learn More</h2>' + '<a>https://www.visitwexford.ie/</a>'
                },
              ];

              // Loop through markers
              var gmarkers = [];
              for (var i = 0; i < markers.length; i++) {
                gmarkers.push(addMarker(markers[i]));

              }

              //Add MArker function
              function addMarker(props) {
                var marker = new google.maps.Marker({
                  position: props.coords,
                  map: map,

                });

                /* if(props.iconImage){
                  marker.setIcon(props.iconImage);
                } */

                //Check content
                if (props.content) {
                  var infoWindow = new google.maps.InfoWindow({
                    content: props.content
                  });
                  marker.addListener('click', function () {
                    infoWindow.open(map, marker);
                  });
                }
                return marker;
              }
              var markerCluster = new MarkerClusterer(map, gmarkers, {
                imagePath: 'https://developers.google.com/maps/documentation/javascript/examples/markerclusterer/m'
              });
            }
            google.maps.event.addDomListener(window, 'load', initMap)
          </script>



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