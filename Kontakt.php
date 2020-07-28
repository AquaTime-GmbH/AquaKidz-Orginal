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
  <script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.2.1/build/ol.js"></script>
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

        <div class="col-6">

          <div class="card first-card-kurs">
            <div class="card-body">
              <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px"> Kontaktieren sie uns</h1>
               


              </div>
            </div>
            
          </div>

          <!---button zum kurs ort-->

        </div>


        <div class="col-6" style="height:624px !important;">


          <section class="jetzt-buchen-pos" id="section1">
            <a class="jetzt-buchen-style" href="#section2">Jetzt Kontaktieren!</a>
          </section>
        </div>

      </div>
    </div>
  </div>


  <!--Anfang Buchungs form-->

  <div class="big-box-more">
    <div id="section2" class="container">





      <form action="" method="post" class="form-color-overall">



        <!----------------Angaben Kunden ------------->
        <div class="form-row">

          <!-- form content -->

          <div class="form-group col-md-2">
            <label class="first-card-text">Ihr Name*</label>
            <input type="text" class="form-control labelshape" name="name_kunde">
          </div>

          <div class="form-group col-md-2">
            <label class="first-card-text">Vorname*</label>
            <input type="text" class="form-control labelshape" name="vorname_kunde">
          </div>
     </div>
<div class="form-row">
 <div class="form-group col-md-4">
            <label class="first-card-text">Ihre E-Mail-Adresse*</label>
            <input type="email" class="form-control labelshape" name="email_kunde">
          </div>
          </div>
          <div class="form-row">
 <div class="form-group col-md-4">
            <label class="first-card-text">Natel</label>
            <input type="email" class="form-control labelshape" name="natel_kunde">
          </div>
</div>
       
     <div class="form-row">
<div class="form-group col-md-4">
    <label class="first-card-text" >Beschereibung</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>

     </div>   

          <input type="submit" href="" class="btn buchen-buttom" name="buchen_button" value="senden!" style="margin-left:0px !important;">
        </div>


 

         
      
  
  </div>


  </form>





  </div>
  </div>

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