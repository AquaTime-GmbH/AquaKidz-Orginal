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
    $sql_kurs_fm_id = $row['kurs_fm_id'];
    $sql_kurs_nummer = $row['kurs_nummer'];
    $sql_max_teilnehmer = $row['max_teilnehmer'];
    $sql_niveau = $row['niveau'];
    $sql_niveau_desctiption_internet = $row['niveau_desctiption_internet'];
    $sql_alter_kurs = $row['alter_kurs'];
    $sql_ort = $row['ort'];
    $sql_marke = $row['marke'];
    $sql_status = $row['status'];
    $sql_anzahl_termine = $row['anzahl_termine'];
    $sql_anzahl_teilnehmer_total = $row['anzahl_teilnehmer_total'];
    $sql_anzahl_teilnehmer_bestaetigt = $row['anzahl_teilnehmer_bestaetigt'];
    $sql_anzahl_teilnehmer_wartend = $row['anzahl_teilnehmer_wartend'];
    $sql_anzahl_teilnehmer_reserviert = $row['anzahl_teilnehmer_reserviert'];
    $sql_summe_kurskosten = $row['summe_kurskosten'];
    $sql_summe_transportkosten = $row['summe_transportkosten'];
    $sql_summe_sonstige_kosten = $row['summe_sonstige_kosten'];
    $sql_bad_name_druck = $row['bad_name_druck'];
    $sql_markenfamilie = $row['markenfamilie'];
    $sql_kurstrainer_liste = $row['kurstrainer_liste'];
    $sql_wochentag = $row['wochentag'];
    $sql_startzeit = $row['startzeit'];
    $sql_dauer = $row['dauer'];
    $sql_wiederholungen = $row['wiederholungen'];
    $sql_starttermin = new DateTime($row['starttermin']);
    $sql_offene_plaetze = $row['offene_plaetze'];
    $sql_taeglich = $row['taeglich'];
    $sql_von_datum = $row['von_datum'];
    $sql_bis_datum = $row['bis_datum'];
    $sql_termin_liste = $row['termin_liste'];
    $sql_notiz = $row['notiz'];
    $sql_letzter_termin = $row['letzter_termin'];
    $sql_bad_eintritt = $row['bad_eintritt'];
    $sql_datei_pfad = $row['datei_pfad'];
    $sql_updated_at = new DateTime($row['updated_at']);
    $sql_created_at = new DateTime($row['created_at']);

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
</head>
<body>

<!--navbar wird eingebunden-->
<?php
include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>

<div class="hintergrundbild"></div>
<div class="container">
    <div class="col-5">


        <div class="card first-card">
            <div class="card-body">
                <div class="font-color">
                <h1 class="card-title card-title-style" style="font-size:32px"> AQUABABY</h1>
                    <small class="card-text" style="font-size:16px" >Frühförderung im Wasser, Schutz- und Lernerfahrung für Ihr Kind</small>
                    <p class="card-text" style="font-size:18px" >Das erste Mal im Wasser ist eine ganz besondere Erfahrung. Gemeinsam mit Ihnen erlernt Ihr Kind früh Sicherheit im Schwimmbecken zu erhalten. Sie fördern die körperliche und geistige Entwicklung in den ersten Lebensjahren nachhaltig und unterstützen einen gesunden Umgang mit dem Wasser. In überschaubaren Gruppen vermitteln unsere Trainer wichtige Grundlagen die ein Kind für die erste Wassergewöhnung braucht. Mit verschiedenen Übungen und Geduld, stärken sie in einer Gruppe von gleichgesinnten Eltern die Fähigkeiten Ihres Kleinen, sein Immunsystem und Ihre Bindung mit Ihm.</p>
                    
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