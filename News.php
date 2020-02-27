<!-- organisation der url -->
<?php
$url_helper= "";
/* einbingung der database connection*/
include  $url_helper .'include/database.php';




?>

<!DOCTYPE html>
<head>
    <title>AquaNews von der AquaTime GmbH - Schöne Wasserzeit</title>
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

    <!-- Fontawesome -->
    <link href="vendor/fontawesome-free-5.11.2-web/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="css/style-news.css">

    <!-- Style für die News Blöcke -->
    <style>
        /* Rundung des Bildes und der Anpassung des Bild */
        .newsbild {
            border-radius: 0 25px 25px 0;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            overflow: hidden;
        }
        /* Rundung des gesamten Blocks */
        .newsblock {
            border-radius: 25px;

        }
        /* Grösse der Blöcke festlegen  */
        .maxminnews {
            max-block-size: 250px;
            min-block-size: 250px;
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


<!-- Hauptinhalt des News-System -->
<div class="container">
    <div class="row">
        <div class="col-md-7">

            <!-- Überschrift der Seite -->
            <h2>AquaNews - <span class="text-muted">
                        Immer Aktuell bleiben</span></h2>
            <br>
        </div>
        <div class="col-md-5">
        </div>

        <?php
        // Datenbank Verbindung prüfen
        if (mysqli_connect_errno()) {
            echo "Fehler beim Verbinden zu MYSQL: " . mysqli_connect_error();
        }

        // SQL Abfrage, welche alle Werte der News Tabelle ausgibt
        // mit den Werten: "status" = Online und "firma" = AquaTime und diese nach Datum und ID sortieren
        // Durch das Ändern der "firma" kann die News für die anderen Seite verwendet werden (zb. AquaKidz)
        $result = mysqli_query($con_mysqli, "SELECT * FROM news WHERE status = 'Online' AND firma = 'AquaKidz' ORDER BY online_datum DESC, news_id DESC");

        //Jedes gefundende Resultat wird nun durch eine Schleife geleitet
        //In dieser Schleife werden die Variablen festgelegt und dementsprechend die News Blöcke erstellt
        while ($row = mysqli_fetch_array($result)) {
            // Die jeweilige Variable holt sich den festgelegten Wert aus der abgefragten Tabelle
            $newsview_id = $row['news_id'];
            $newsview_titel = $row['titel'];

            $newsview_einleitung = $row['einleitung'];
            $newsview_datum = new DateTime($row['online_datum']);
            $newsview_url = $row['newsurl'];
            $newssview_bild = $row['newsbild'];
            $newssview_kategorie = $row['kategorie'];
            $newssview_kategorie_farbe = $row['kategorie_farbe'];
            $newssview_firma = $row['firma'];
            $newssview_bildjanein = $row['newsbildjanein'];

            //Die Variable $newsview_einleitung wird auf 90 Zeichen gekürzt und am Ende wird "..." eingefügt
            $newsview_einleitung = substr($newsview_einleitung, 0, 90) . '...';

            //Der Link zum direkten Artikel wird erstellt
            $newslink = 'AquaNews?' . $newsview_url . '&id=' . $newsview_id;

// IF Abfrage des Datum: Wenn das Datum in der Zukunft liegt, wird die News nicht angezeigt
            if ($newsview_datum->format('Y/m/d') > date("Y/m/d")) {
            } else {
                //IF Abfrage, ob ein Bild vorhanden ist und das Bild angezeigt werden darf
                if ($newssview_bild == '' OR $newssview_bildjanein == 'Nein') {
                    ?>

                    <!-- News Block ohne Bild -->
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250 newsblock maxminnews">
                            <div class="card-body d-flex flex-column align-items-start">

                                <!-- Farbe der Kategorie in den "style" tag einfügen und die Kategorie ausschreiben -->
                                <strong class="d-inline-block mb-2"
                                        style="color:<?php echo $newssview_kategorie_farbe; ?>"><?php echo $newssview_kategorie; ?></strong>

                                <h3 class="mb-0">
                                    <!-- Title inkl. Link in den News Block einfügen -->
                                    <a class="text-dark"
                                       href="<?php echo $newslink; ?>"><?php echo $newsview_titel; ?></a>
                                </h3>

                                <!-- Datum der Veröffentlichung hinzufügen -->
                                <div class="mb-1 text-muted"><?php echo $newsview_datum->format('d.m.Y') ?></div>

                                <!-- Gekürzte Einleitung hinzufügen -->
                                <p class="card-text mb-auto"><?php echo $newsview_einleitung; ?> </p>

                                <!-- Link ein 2tes Mal hinzufügen -->
                                <a href="<?php echo $newslink; ?>">Vollständige News Lesen</a>

                            </div>
                        </div>
                    </div>
                    <?php
                }

                // News Block mit Bild
                else {
                    ?>
                    <div class="col-md-6">
                        <div class="card flex-md-row mb-4 shadow-sm h-md-250 newsblock maxminnews">
                            <div class="card-body d-flex flex-column align-items-start">

                                <!-- Farbe der Kategorie in den "style" tag einfügen und die Kategorie ausschreiben -->
                                <strong class="d-inline-block mb-2"
                                        style="color:<?php echo $newssview_kategorie_farbe; ?>"><?php echo $newssview_kategorie; ?></strong>
                                <h3 class="mb-0">

                                    <!-- Title inkl. Link in den News Block einfügen -->
                                    <a class="text-dark"
                                       href="<?php echo $newslink; ?>"><?php echo $newsview_titel; ?></a>
                                </h3>

                                <!-- Datum der Veröffentlichung hinzufügen -->
                                <div class="mb-1 text-muted"><?php echo $newsview_datum->format('d.m.Y') ?></div>

                                <!-- Gekürzte Einleitung hinzufügen -->
                                <p class="card-text mb-auto"><?php echo $newsview_einleitung; ?>.</p>

                                <!-- Link ein 2tes Mal hinzufügen -->
                                <a href="<?php echo $newslink; ?>">Vollständige News Lesen</a>

                            </div>
                            <!-- Pfad des Bildes vervollständigen und die Border Farbe analog der Kategorie festlegen -->
                            <img class="card-img-right flex-auto d-none d-lg-block newsbild" alt=""
                                 style="width: 400px; height: 250px; background-image: url('../dashboard/<?php echo $newssview_bild; ?>'); border-left: solid 5px; border-color: <?php echo $newssview_kategorie_farbe; ?>;  "
                                 data-holder-rendered="true">
                        </div>
                    </div>
                    <?php
                }
                ?>
                <?php
            }
        }
        echo "</table>";

        ?>
    </div>
</div>

</div>






<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>