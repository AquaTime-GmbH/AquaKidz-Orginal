 <!-- organisation der url -->
 <?php 
$url_helper= "../";
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




<div class="container">


<h2 class="überschrit-agb-ethik">Ethik Code</h2>

            <h3 class="undertitle-agb">Grundsatz 1</h3>

                <p class="text-agb">
                Wir sind bemüht, unsere Tätigkeiten (Verkauf, Unterricht, …) gegenüber uns selbst und unseren Kunden nach grundlegenden ethischen Prinzipien zu gestalten.
                </p>



            <h3 class="undertitle-agb">Grundsatz 2</h3>

                <p class="text-agb">
                    Unser Ziel ist es durch ein handhabbares, relevantes Qualitätsmanagement die Güte unserer Leistungen (Angebote) zu erhalten und zu steigern.
                </p>


            <h3 class="undertitle-agb">Übereinstimmung von Versprechen und erbrachter Dienstleistung</h3>

                <p class="text-agb">
                    Wir halten, was wir versprechen (Werbung, Beratung, Produkte …)
                </p>

            <h3 class="undertitle-agb">Schutz der Intimität von Kunden und Mitarbeitern</h3>

                <p class="text-agb">
                    Wir schützen die Intimität unserer Kunden und Mitarbeiter.
                </p>

             <h3 class="undertitle-agb">Beitrag zur nachhaltigen Förderung der Gesundheit</h3>

                <p class="text-agb">
                    Wir verstehen unsere Angebote als einen Beitrag zur Förderung der Gesundheitserhaltung des Individuums und der Gesellschaft mit ihren sozialen Strukturen.
                </p>

            <h3 class="undertitle-agb">Sensibilisierung zur Reflexion des Lebensstils</h3>

                <p class="text-agb">
                    Unsere Angebote sensibilisieren zur Überprüfung und Reflexion des eigenen Lebensstils.
                </p>


            <h3 class="undertitle-agb">Anerkennung der eigenen Grenzen und jener der Kunden</h3>

                <p class="text-agb">
                    Wir anerkennen die Grenzen und Möglichkeiten unserer Kunden, Mitarbeiter und unser selbst auch bzgl. unserer Kompetenzen.
                </p>


            <h3 class="undertitle-agb">Wissenschaftliche Grundlage des Denkens und Handelns</h3>

                <p class="text-agb">
                    Wir stützen unser Denken und Handeln auf eine wissenschaftliche Grundlage (Natur- und Geisteswissenschaften).

                </p>
            
            
            </div>









<!--footer wird eingebunden-->
<?php
include $url_helper . 'include/footer.php';
?>
<!--------------ende der einbindung------------------>


