<!-- organisation der url -->
 <?php 
$url_helper= "";
/* einbingung der database connection*/
include  $url_helper .'include/database.php';


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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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
        <a href="#"  class="btn  btn_aquababy_zum_kursanmelden" >Zum Kursort</a>
    </div>


<!---button zum kurs ort-->
        
            
     
    
<section calss="jetzt-buchen-pos" id="section1">
	<a href="#section2" >Jetzt Buchen!</a>
</section>
        </div>



        </div>
    </div>
 </div>

   
    
     

<!--test in variabeln gespeichert-->
<?php 


$ueber_den_Kurs= "ÜBER DEN KURS" ;

?>


<div class="container" >
    <div class="big-box-text">
        <p class="title_of_text"><?= $ueber_den_Kurs ?></p>
    </div>
</div>




<div class="big-box-map">
    <div class="container">
     <script>





  var geocoder;
  var bounds = new google.maps.LatLngBounds();
  var map;
  var query = "<?php echo $endCercompleto; ?>";
  var query2 = "<?php echo $endFescompleto; ?>";
  function initialize() {
    geocoder = new google.maps.Geocoder();
    var mapOptions = {
      zoom:8,
      center: new google.maps.LatLng(0, 0),
      mapTypeId: google.maps.MapTypeId.ROADMAP
    }
    map = new google.maps.Map(document.getElementById('map_canvas'), mapOptions);
        codeAddress();
  }
  function codeAddress() {
    var address = query;
    geocoder.geocode( { 'address': address}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        bounds.extend(results[0].geometry.location);
        var marker = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
        });
        map.fitBounds(bounds);
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });

    

    var address2 = query2;
    geocoder.geocode( { 'address': address2}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
        bounds.extend(results[0].geometry.location);
        var marker2 = new google.maps.Marker({
            map: map,
            position: results[0].geometry.location,
        });
        map.fitBounds(bounds);
      } else {
        alert('Geocode was not successful for the following reason: ' + status);
      }
    });
}
</script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvf8MRWi1ignKqBJnfCcvwTKwUdehvMzU&callback=initMap"
    async defer></script>

    </div>
</div>




<div class="container">

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

<!--Anfang Buchungs form-->

 <div class="big-box-more" >

<div id="section2" class="container-test">
<div class="form-pos">
<form>
<div class="font-color">
  <div class="form-row">
  
    <div class="form-group col-md-6">
      <label class="first-card-text" >Kurs</label>
      <input type="email" class="form-control labelshape">
    </div>
    <div class="form-group col-md-6">
      <label class="first-card-text">Name Kind*</label>
      <input type="password" class="form-control labelshape">
    </div>
  </div>
  <div class="form-group ">
    <label class="first-card-text">Vorname Kind*</label>
    <input type="text" class="form-control labelshape">
  </div>
  <div class="form-group">
    <label class="first-card-text">Geburtsdatum Kind*</label>
    <input type="text" class="form-control labelshape">
  </div>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label class="first-card-text">Gesundheitsstatus</label>
      <input type="text" class="form-control labelshape">
    </div>



    <div class="form-group col-md-6">
      <label >Plz</label>
      <input type="text" class="form-control labelshape">
    </div>
  </div>

  <div class="form-group">
  <div class="dropdown-firstcard">
    <Select class="form-control labelshape" id="search_alt" name="search_alt" type="text" value="<?= $cookie_kursalter; ?>">
        <option disabled selected value style="color:white;"></option>
        <option  >test</option>
        <option >test2</option>
        <option >test3</option>
        <option >test4</option>
    </select>
  </div>
 
</form>

</div>
</div>
</div>
</div>

        </div>

<!--Ende Buchungs form-->

  



<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>