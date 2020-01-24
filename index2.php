<!DOCTYPE html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap,w3schools,fotawsome CSS -->
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    <script src="https://kit.fontawesome.com/8d9d572486.js" crossorigin="anonymous"></script>
</head>
<body>
<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <div class="logo" style="width: 80px;" >
            <a class="navbar-brand"><img src="assets/images/Logo.png" class="card-img-top" alt="Bild ladet nicht!"></a>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="#">Schwimmkurse</a>
            </li>
            <li class="nav-item  my-2 my-sm-0">
                <a class="nav-link" href="#">Kursort</a>
            </li>
            <li class="nav-item">
                <a class="nav-link " href="#">Über uns</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Kontakt</a>
            </li>
            <li class="nav-item">
                <a class="nav-link"><i class="fas fa-search"></i></a>
            </li>
        </ul>

    </div>
</nav>
<div class="hintergrundbild">
</div>
<div class="container">
    <div class="card" style="width: 20rem; margin-top:5%;margin-bottom:2%; border-radius:10px;">
        <div class="card-body">
            <h1 class="card-title" style="font-size:32px">SCHWIMMEN LERNEN SCHWIMMEN LIEBEN</h1>
            <p class="card-text" style="font-size:20px" >Sichere und altersgerechte Kurse für Babys und Kinder.Denn schwimmen lernen soll Spass machen.</p>

            <label for="example-text-input" class="col-4 col-form-label">Ort</label>
            <div class="col-12">
                <input class="form-control" type="text" Placeholder="Überall" >
            </div>

            <label for="example-date-input" class="col-6 col-form-label">Kurs Start</label>
            <div class="col-12">
                <input class="form-control" type="date" value="2011-08-19" >
            </div>

            <label for="example-number-input" class="col-8 col-form-label">Wie alt ist ihr Kind?</label>
            <div class="col-12">
                <input class="form-control" type="number" Placeholder="bitte eingeben">
            </div>
            <br>
            <a href="#" class="btn btn-primary btn-lg btn-block">Suchen</a>
        </div>
    </div>

    <!-- Das sind alle 3 Cards(flexboxen) in der mitte der Webseite -->

    <div class="card-deck" style="border-radius:10px;">
        <div class="card" style="border-radius:10px;">
            <img class="imgcard" src="assets/images/Block1.png" style="border-radius:10px 10px 0px 0px;" class="card-img-top" alt="Bild ladet nicht!">
            <div class="card-body">
                <h2 class="card-title" style="font-size:26px">SICHER SCHWIMMEN LERNEN MUSS SPASS MACHEN</h2>
                <p class="card-text">Kinder lernen wenn sie richtig gefördert werden. Unsere Kurse sind auf die Fähigkeiten und das alter unserer Schüler zugeschnitten. Wir setzen auf erfahrene Lehrpersonendie die Zeit im Wasser zu einem wunderbaren Erlebnis machen.</p>
                <a href="#"  class="btn btn-primary" style="border-radius:10px; margin-left:88%; ">MEHR</a>
            </div>
        </div>

        <div class="card" style="border-radius:10px;">
            <img class="imgcard" src="assets/images/Block2.png" class="card-img-top" style="border-radius:10px 10px 0px 0px;" alt="Bild ladet nicht!">
            <div class="card-body">
                <h2 class="card-title" style="font-size:26px">UNSER PRINZIP FÜR ERFOLG</h2>
                <p class="card-text">-Schwimmen lernen ohne Druck und Zwang <br>-Betreuung von Erfahrenen Pädagogen <br> -Konstante Steigerung von Sicherheit und Kompetenz</p>
                <a href="#" class="btn btn-primary" style="border-radius:10px; margin-left:88%; margin-top:20%;">MEHR</a>
            </div>
        </div>

        <div class="card" style="border-radius:10px;">
            <img class="imgcard" src="assets/images/Block3.png" style="border-radius:10px 10px 0px 0px;" class="card-img-top" alt="Bild ladet nicht!">
            <div class="card-body">
                <h2 class="card-title" style="font-size:26px">ERFAHRUNG ZAHLT SICH AUS</h2>
                <p class="card-text">Nach X Jahren und X Kunden wissen wir worauf es ankommt.EInfacher Zugang zum richtigen Kurs.Sie finden uns an 15 Ortenin der Schweiz</p>
                <a href="#" class="btn btn-primary" style="border-radius:10px; margin-left:88%; margin-top:20%;">MEHR</a>
            </div>
        </div>
    </div>
</div>

<div class="slideshow">
    <div class="kreis">
        <img class="mySlides w3-animate-fading" src="assets/images/Slider1.png"  alt="Bild ladet nicht!">
    </div>
    <div class="kreis">
        <img class="mySlides w3-animate-fading" src="assets/images/Slider2.png"  alt="Bild ladet nicht!">
    </div>
    <div class="kreis">
        <img class="mySlides w3-animate-fading" src="assets/images/Slider3.png"  alt="Bild ladet nicht!">
    </div>
    <div class="zitat w3-animate-fading">
        <h3>"Das ist ein Zitat,es kann auch <br> über zwei Zeilen gehen"</h3>
    </div>
    <div class="zitat w3-animate-fading">
        <h3>"Das ist ein Zitat2,es kann auch <br> über zwei Zeilen gehen"</h3>
    </div>
    <div class="zitat w3-animate-fading">
        <h3>"Das ist ein Zitat3,es kann auch <br> über zwei Zeilen gehen"</h3>
    </div>
    <div class="punkte">
        <div class="punkt1" id="test"></div>
        <div class="punkt2"></div>
        <div class="punkt3"></div>
    </div>
</div>

    <script type="text/javascript">
        var slideIndex = 0;
        carousel();

        function carousel() {
            var i;
            var x = document.getElementsByClassName("kreis");
            var y = document.getElementsByClassName("zitat");
            for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
                y[i].style.display = "none";

            }
            slideIndex++;
            if (slideIndex > x.length) {slideIndex = 1}
            x[slideIndex-1].style.display = "block";
            y[slideIndex-1].style.display = "block";
            setTimeout(carousel, 5000); // Change image every 2 seconds
        }
    </script>

<!-- footer -->
<footer  class="py-4 bg-dark text-white-50">
    <div class="container text-center">
        <small>Copyright &copy; AquaTime 2020</small>
    </div>
</footer>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>
