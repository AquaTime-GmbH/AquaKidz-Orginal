<!-- organisation der url -->
<?php
$url_helper= "";
/* einbingung der database connection*/
include  $url_helper .'include/database.php';




// ID von der URL übernehmen
$newsid_get = $_GET['id'];

// Mit der ID von der URL wird eine Datenbank abfrage erstellt
$result = mysqli_query($con_mysqli, "SELECT * FROM news WHERE news_id = '$newsid_get' AND status = 'Online'");

//Das gefundende Resultat wird nun durch eine Schleife geleitet
//In dieser Schleife werden die Variablen festgelegt
while ($row = mysqli_fetch_array($result)) {
    // Die jeweilige Variable holt sich den festgelegten Wert aus der abgefragten Tabelle
    $viewnews_id = $row['news_id'];
    $viewnews_titel = $row['titel'];
    $viewnews_firma = $row['firma'];
    $viewnews_datum = new DateTime($row['online_datum']);
    $viewnews_einleitung = $row['einleitung'];
    $viewnews_newsbild = $row['newsbild'];
    $viewnews_newsbildjanein_artikel = $row['newsbildjanein_artikel'];
    $viewnews_text = $row['text'];
    $viewnews_kategorie = $row['kategorie'];
    $viewnews_kategorie_farbe = $row['kategorie_farbe'];

    $viewnews_empbild1 = $row['empbild1'];
    $viewnews_emptitel1 = $row['emptitel1'];
    $viewnews_empbeschreibung1 = $row['empbeschreibung1'];
    $viewnews_emplink1 = $row['emplink1'];

    $viewnews_empbild2 = $row['empbild2'];
    $viewnews_emptitel2 = $row['emptitel2'];
    $viewnews_empbeschreibung2 = $row['empbeschreibung2'];
    $viewnews_emplink2 = $row['emplink2'];

    $viewnews_empbild3 = $row['empbild3'];
    $viewnews_emptitel3 = $row['emptitel3'];
    $viewnews_empbeschreibung3 = $row['empbeschreibung3'];
    $viewnews_emplink3 = $row['emplink3'];

    $viewnews_keywords = $row['keywords'];
    $viewnews_metabeschreibung = $row['metabeschreibung'];
    $viewnews_seitentitel = $row['seitentitel'];

    $viewnews_ansichten = $row['ansichten'];
    $viewnews_newsbildjanein = $row['newsbildjanein'];

    $viewnews_empfehlungklick = $row['empfehlungklick'];

    $viewnews_newsurl = $row['newsurl'];

    $viewnews_status = $row['status'];

    $viewnews_bearbeitungdatum = new DateTime($row['lastupdate']);
    $viewnews_updated = new DateTime($row['updated_at']);
    $viewnews_created = new DateTime($row['created_at']);

// Variable $ansichten bekommt den wert der Variable $viewnews_ansichten + 1
    $ansichten = ++$viewnews_ansichten;

    // Die Variable $ansichten in der gleichen Tabelle mit der gleichen ID Updaten
    mysqli_query($con_mysqli, "UPDATE news SET ansichten = '$ansichten' WHERE news_id = '$viewnews_id'");
}


//Status prüfen und wenn dieser nicht "Online" ist auf die News zurückleiten
// Verhindert das Geplante, Entwürfe, Vorlagen oder News im Archiv gefunden werden
if ($viewnews_status != 'Online') {
    echo '<script>window.location = "News";</script>';
    exit();
}
?>






<!DOCTYPE html>
<head>
    <!-- Titel durch variable einfügen -->
    <title><?php echo $viewnews_seitentitel; ?></title>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <!-- Meta Beschreibung hinzufügen  -->
    <meta name="description" content="<?php echo $viewnews_metabeschreibung; ?>">
    <!-- Meta Keywords hinzufügen -->
    <meta name="keywords" content="<?php echo $viewnews_keywords; ?>">
    <!-- Firma als Meta Author hinzufügen -->
    <meta name="author" content="<?php echo $viewnews_firma; ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap,w3schools,fotawsome CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
    <!-- Fontawesome -->
    <link href="vendor/fontawesome-free-5.11.2-web/css/all.min.css" rel="stylesheet" type="text/css">

    <link rel="stylesheet" href="css/style-news.css">

    <style>
        /* Banner bild der News vom Design festlegen */
        .NewsBanner {
            display: block;
            position: relative;
            width: 100%;
            height: 400px;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;

            border-radius: 25px;
            border: 2px solid black;
        }
    </style>
</head>
<body>

<!--navbar wird eingebunden-->
<?php
include $url_helper .'include/navbar.php';
?>
<!--------------ende der einbindung------------------>



<hr style="padding-top: 100px">


<section>

    <div class="row" style="text-align: left">
        <div class="col-2"><p></p></div>
        <div class="col-2">
            <!-- Farbe der Kategorie in den "style" tag einfügen und die Kategorie ausschreiben -->
            <p style="float: left; background-color: #292929; color: <?php echo $viewnews_kategorie_farbe; ?>;"><?php echo $viewnews_kategorie; ?></p>
        </div>

        <div class="col-6"><p style="float: right; color: #848484">
                <!-- Datum der Veröffentlichung hinzufügen -->
                Veröffentlicht: <?php echo $viewnews_datum->format('d.m.Y'); ?></p></div>
        <div class="col-2"><p></p></div>

    </div>

    <div class="row" style="text-align: center">
        <div class="col-2"></div>
        <div class="col-8">
            <!-- Titel hinzufügen -->

            <h1><?php echo $viewnews_titel; ?></h1>
        </div>
        <div class="col-2"></div>
    </div>

    <div class="row" style="text-align: left">
        <div class="col-2"></div>
        <div class="col-8">
            <!-- Einleitung hinzufügen -->
            <p style="color: #4f4f4f; font-size: 20px"><?php echo nl2br($viewnews_einleitung); ?></p>
        </div>
        <div class="col-2"></div>
    </div>

    <!-- IF abfrage, ob ein Bild vorhanden ist und die Option das es angezeigt werden darf "Ja" ist -->
    <?php if ($viewnews_newsbildjanein_artikel == 'Ja' AND $viewnews_newsbild != '') {
        ?>
        <div class="row" style="text-align: left">
            <div class="col-2"></div>
            <div class="col-8">
                <!-- Pfad des Bildes vervollständigen -->
                <div class="NewsBanner"
                     style="background-image: url('../dashboard/<?php echo $viewnews_newsbild ?>'); "></div>
            </div>
            <div class="col-2"></div>
        </div>
        <?php
    }
    //Wenn das Bild nicht angezeigt wird ein abstand einfügen
    else {
        ?>
        <br>
        <?php
    } ?>


    <div class="row" style="text-align: left">
        <div class="col-2"></div>
        <div class="col-8">
            <br>
            <!-- Text in den Beitrag hinzufügen -->
            <?php echo $viewnews_text; ?>
            <br>
            <br>
        </div>
        <div class="col-2"></div>
    </div>
    <div class="row" style="text-align: center">
        <div class="col-2"></div>
        <div class="col-8">
            <br>
            <section>
                <?php
                // Prüfen wenn der Button empfehlungzaeler geklickt wurde. Dies dann ausführen
                if (isset($_POST['empfehlungzaeler'])) {
                    // Variable $empfehlungklickk bekommt den wert der Variable $viewnews_empfehlungklick + 1
                    $empfehlungklickk = ++$viewnews_empfehlungklick;
                    // Die Variable $ansichten in der gleichen Tabelle mit der gleichen ID Updaten
                    mysqli_query($con_news_Empfehlung_aquatime_emp1, "UPDATE news SET empfehlungklick = '$empfehlungklickk' WHERE news_id = '$viewnews_id'");
                    //Datenbank Verbindung schliessen
                    mysqli_close($con_news_Empfehlung_aquatime_emp1);
                } ?>


                <div class="row">
                    <div class="col-lg-4">
                        <?php
                        // Prüfen ob die 1 Empfehlung leer ist
                        if ($viewnews_emptitel1 == '') {
                            ?>
                            <!-- Standart Bild laden -->
                            <img class="bd-placeholder-img rounded-circle KreisNewsBild"
                                 style="background-image: url('img/AquaNews.png')">

                            <!-- Empfehlungs Titel -->
                            <h2>AquaNews</h2>

                            <!-- Empfehlungs Beschreibung  -->
                            <p>Immer Aktuell bleiben!</p>
                            <form action="News" method="post">
                                <input class="btn btn-secondary" type="submit" value="Details &raquo;"
                                       name="empfehlungzaeler">
                            </form>
                            <br>
                            <?php
                        } else {
                            ?>
                            <!-- Pfad des Bildes vervollständigen -->
                            <img class="bd-placeholder-img rounded-circle KreisNewsBild"
                                 style="background-image: url('../dashboard/<?php echo $viewnews_empbild1 ?>')">

                            <!-- Titel der Empfehlung einfügen -->
                            <h2><?php echo $viewnews_emptitel1 ?></h2>

                            <!-- Beschreibung der Empfehlung einfügen -->
                            <p><?php echo $viewnews_empbeschreibung1 ?></p>

                            <!-- Link der Empfehlung einfügen -->
                            <form action="<?php echo $viewnews_emplink1 ?>" method="post">
                                <input class="btn btn-secondary" type="submit" value="Details &raquo;"
                                       name="empfehlungzaeler">
                            </form>
                            <br>
                            <?php
                        }
                        ?>


                    </div>
                    <div class="col-lg-4">
                        <?php
                        // Prüfen ob die 2 Empfehlung leer ist
                        if ($viewnews_emptitel2 == '') {
                            ?>
                            <!-- Standart Bild laden -->
                            <img class="bd-placeholder-img rounded-circle KreisNewsBild"
                                 style="background-image: url('img/AquaJob.png')">

                            <!-- Empfehlungs Titel -->
                            <h2>AquaJobs</h2>

                            <!-- Empfehlungs Beschreibung  -->
                            <p>Finde den Job den du Liebst!</p>
                            <form action="../AquaTime/Jobs" method="post">
                                <input class="btn btn-secondary" type="submit" value="Details &raquo;"
                                       name="empfehlungzaeler">
                            </form>
                            <br>
                            <?php
                        } else {
                            ?>
                            <!-- Pfad des Bildes vervollständigen -->
                            <img class="bd-placeholder-img rounded-circle KreisNewsBild"
                                 style="background-image: url('../dashboard/<?php echo $viewnews_empbild2 ?>')">

                            <!-- Titel der Empfehlung einfügen -->
                            <h2><?php echo $viewnews_emptitel2 ?></h2>

                            <!-- Beschreibung der Empfehlung einfügen -->
                            <p><?php echo $viewnews_empbeschreibung2 ?></p>

                            <!-- Link der Empfehlung einfügen -->
                            <form action="<?php echo $viewnews_emplink2 ?>" method="post">
                                <input class="btn btn-secondary" type="submit" value="Details &raquo;"
                                       name="empfehlungzaeler">
                            </form>
                            <br>
                            <?php
                        }
                        ?>
                    </div>
                    <div class="col-lg-4">
                        <?php
                        // Prüfen ob die 3 Empfehlung leer ist
                        if ($viewnews_emptitel3 == '') {
                            ?>
                            <!-- Standart Bild laden -->
                            <img class="bd-placeholder-img rounded-circle KreisNewsBild"
                                 style="background-image: url('img/AquaKidz_Bild.png')">

                            <!-- Empfehlungs Titel -->
                            <h2>AquaKidz</h2>

                            <!-- Empfehlungs Beschreibung  -->
                            <p>Erlebnisse die bleiben!</p>
                            <form action="https://aquakidz.ch" method="post">
                                <input class="btn btn-secondary" type="submit" value="Details &raquo;"
                                       name="empfehlungzaeler">
                            </form>
                            <br>
                            <?php
                        } else {
                            ?>
                            <!-- Pfad des Bildes vervollständigen -->
                            <img class="bd-placeholder-img rounded-circle KreisNewsBild"
                                 style="background-image: url('../dashboard/<?php echo $viewnews_empbild3 ?>')">

                            <!-- Titel der Empfehlung einfügen -->
                            <h2><?php echo $viewnews_emptitel3 ?></h2>

                            <!-- Beschreibung der Empfehlung einfügen -->
                            <p><?php echo $viewnews_empbeschreibung3 ?></p>

                            <!-- Link der Empfehlung einfügen -->
                            <form action="<?php echo $viewnews_emplink3 ?>" method="post">
                                <input class="btn btn-secondary" type="submit" value="Details &raquo;"
                                       name="empfehlungzaeler">
                            </form>
                            <br>
                            <?php
                        }
                        ?>
                    </div>
                </div>

            </section>
            <hr>
        </div>
        <div class="col-2"></div>
    </div>


    <div class="row" style="text-align: left">
        <div class="col-2"></div>
        <div class="col-8">
            <div class="row" style="text-align: left">
                <div class="col-10">

                    <!-- Keywords hinzufügen -->
                    <p style="font-size: 14px; color: #848484">Keywords: <?php echo $viewnews_keywords; ?></p>
                </div>
                <div class="col-2">

                </div>
            </div>
        </div>
        <div class="col-2">

        </div>
    </div>
    <div class="row" style="text-align: left">
        <div class="col-2"></div>
        <div class="col-8">
            <hr>

            <!-- Datum der letzten Bearbeitung hinzufügen -->
            <p style="float: right; color: #848484">
                Letzte Bearbeitung: <?php echo $viewnews_bearbeitungdatum->format('d.m.Y'); ?></p>
        </div>
        <div class="col-2">
        </div>
    </div>
</section>







<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>