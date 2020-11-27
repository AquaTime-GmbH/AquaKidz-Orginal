<!-- MENU BAR -->
<nav class="navbar navbar-expand-lg fixed-top">
    <div class="container">
        <a class="navbar-brand" href="Index">
            <i class="fas fa-tint"></i>
            AquaTime GmbH
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="Index#AquaKidz" class="nav-link smoothScroll">AquaKidz</a>
                </li>
                <li class="nav-item">
                    <a href="Index#AquaKidz" class="nav-link smoothScroll">AquaFit4You</a>
                </li>
                <li class="nav-item">
                    <a href="Index#AquaTherapeutics" class="nav-link">AquaTherapeutics</a>
                </li>
                <li class="nav-item">
                    <a href="Kontakt" class="nav-link contact">Kontakt</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<section class="AquaBanner" style="background-color: #749cd2">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1 class="AquaBannerText">Das Herz der AquaTime schlägt für’s Wasser. </h1>
                        <p class="AquaBannerText">Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id
                            elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id
                            elit.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption">
                        <h1 class="AquaBannerText">Sicherheit...</h1>
                        <p class="AquaBannerText">Service, Qualität, Sicherheit und Zuverlässigkeit sind für uns
                            selbstverständliche Tugenden.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1 class="AquaBannerText">Kontaktieren Sie uns!</h1>
                        <p class="AquaBannerText">Stöbern Sie in unseren Angeboten und kontaktieren Sie uns!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <?php
    if ($jobtaps == "ja") {
        ?>
        <section>
            <button class="tablink" onclick="openPage('Job-AquaTime')" id="defaultOpen">AquaTime GmbH</button>
            <button class="tablink" onclick="openPage('Job-AquaKidz')">AquaKidz - Schwimmschule</button>
            <button class="tablink" onclick="openPage('Job-AquaFit')">AquaFit4You</button>
            <button class="tablink" onclick="openPage('Job-AquaTherapeutics')">AquaTherapeutics</button>
        </section>
        <?php
    }
    ?>

    <svg class="wave-qsoVIt" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 100"
         preserveAspectRatio="none">
        <path class="wavePath-22lfEN" d="M826.337463,25.5396311 C670.970254,58.655965 603.696181,68.7870267 447.802481,35.1443383
        C293.342778,1.81111414 137.33377,1.81111414 0,1.81111414 L0,150 L1920,150 L1920,1.81111414 C1739.53523,-16.6853983 1679.86404,73.1607868
         1389.7826,37.4859505 C1099.70117,1.81111414 981.704672,-7.57670281 826.337463,25.5396311 Z" fill="white">
        </path>
    </svg>


</section>