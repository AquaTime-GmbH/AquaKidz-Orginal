<!-- organisation der url -->
<?php 
 session_start();
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
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.1/build/ol.js"></script>
</head>

<body>

  <!--navbar wird eingebunden-->
  <?php
include $url_helper .'include/navbar.php';
?>
  <!--------------ende der einbindung------------------>
  <?php
  
                $empfaenger = 'djordje.aksentijevic@aquatime.ch';
                $absender = 'postmaster@aquatime.ch';


     if(isset($_POST['kontakt_absenden'])){
                    if(empty($_POST['name_kunde'])) $err[] = '<li> - den Namen angeben</li>';
                    if(empty($_POST['vorname_kontakt'])) $err[] = '<li> - den Vornamen angeben</li>';
                    if(empty($_POST['natel_kontakt'])) $err[] = '<li> - die Natel nummer angeben</li>';
                    if(empty($_POST['email_kontakt'])) $err[] = '<li> - die Email-Adresse angeben</li>';
                    if(empty($_POST['text'])) $err[] = '<li> - welchen Wunsch haben Sie? Bitte den Text eingeben</li>';



             if(!empty($err)) {
                        echo '<div class="alert alert-danger">Bitte korrigieren Sie folgende Fehler:<br>
            <ul class="list-unstyled content-list text-danger">';
                        foreach($err as $fehler){
                            echo $fehler;
                        }
                        echo '</ul></div>';
                    }else {

                        $mail_header = "From:".$absender."\r\n";
                        $mail_header .= "X-Sender-IP: ".$_SERVER['REMOTE_ADDR']."\r\n";
                        $mail_header .= "MIME-Version: 1.0\r\n";
                        $mail_header .= "Content-Type: text/html; charset=UTF-8;\r\n";

                        $mailnachricht = '<html><body>';
                        while(list($feld,$wert)=each($_POST)) {
                            if($feld!="abschicken" && $feld!="contact_antispam") {
                                $mailnachricht.=ucfirst($feld).": <br>".preg_replace("/(content-type:|bcc:|cc:|to:|from:)/im", "",$wert)."<br><br>";
                            }
                        }
                        $email = preg_replace("/[^a-z0-9 !?:;,.\/_\-=+@#$&\*\(\)]/im", "", $_POST['email_kontakt']);
                        $email = preg_replace("/(content-type:|bcc:|cc:|to:|from:)/im", "", $email);
                        $mailnachricht.="\nDatum/Zeit: ".date("d.m.Y H:i:s");
                        $mailnachricht.= '</body></html>';
                        mail($empfaenger, "Neue Kontaktanfrage von AquaTime", $mailnachricht,$mail_header);
                        echo '<div class="alert alert-success">Vielen Dank für Ihre E-Mail!<br><br>Wir werden schnellstmöglich diese bearbeiten.</div>';
                        $submitted = true;
                    }
                }
  ?>

  <div class="blue-box-kurs">
    <div class="container" style="display:flex !important; width:100% !important;">



      <div class="col-6" style="flex:1 !important;">

        <div class="card first-card-kurs">
          <div class="card-body">
            <div class="font-color">
              <h1 class="card-title card-title-style" style="font-size:32px"> Kontaktieren sie uns</h1>



              <!--Anfang Buchungs form-->


              <?php if($submitted != true){ ?>
              <form action="" method="post" class="form-color-overall">

                <div class="form-row ">
                   <div class="form-group col-6">
                    <label class="first-card-text">Ihr Name*</label>
                    <input type="text" class="form-control labelshape" name="name_kontakt"
                      value="<?= $_POST['name_kunde'] ?>">
                  </div>

                  <div class="form-group col-6">
                    <label class="first-card-text">Vorname*</label>
                    <input type="text" class="form-control labelshape" name="vorname_kontakt"
                      value="<?= $_POST['vorname_kontakt'] ?>">
                  </div>
                </div>
                 
                <div class="form-group col-12" style="padding-right:0px !important; padding-left:0px !important;">
                  <label class="first-card-text">Ihre E-Mail-Adresse*</label>
                  <input type="email" class="form-control labelshape" name="email_kontakt"
                    value="<?= $_POST['email_kontakt'] ?>">
                </div>

                <div class="form-group col-12" style="padding-right:0px !important; padding-left:0px !important;">
                  <label class="first-card-text">Natel</label>
                  <input type="email" class="form-control labelshape" name="natel_kontakt"
                    value="<?= $_POST['natel_kontakt'] ?>">
                </div>
                <div class="form-group col-12" style="padding-right:0px !important; padding-left:0px !important;">
                  <label class="first-card-text">Beschereibung</label>
                  <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"
                    value="<?= $_POST['text'] ?>"></textarea>
                </div>

                <input type="submit" href="" class="btn kontakt-senden-buttom" name="kontakt_absenden" value="senden!"
                  style="margin-left:0px !important;">
              </form>
              <?php	} ?>
            </div>
          </div>

        </div>

        <!---button zum kurs ort-->

      </div>
<?php

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



  foreach($result as $ausgabe){
    $sql_fm_mitarbeiter_fm_id= $row['mitarbeiter_fm_id'];
    $sql_fm_vorname = $row['vorname'];
    $sql_fm_nachname= $row['nachname'];
    $sql_fm_bad_postleitzahl = $row['fm_bad_postleitzahl'];
  }
  


?>




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
            <div style="text-align:center; margin-bottom:100px;">
                <span class="dotslider" onclick="plusDivs(1)"></span>
                <span class="dotslider" onclick="plusDivs(2)"></span>
                <span class="dotslider" onclick="plusDivs(3)"></span>
                <span class="dotslider" onclick="plusDivs(4)"></span>
            </div>


        </div>

        <!--slider javascript-->
        <script>
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
                if (n == undefined) {
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
        </script>








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