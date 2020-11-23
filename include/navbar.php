<!--Navbar-->
<div class="aqua-navbar">
  <div class="container">
    <nav class="navbar navbar-expand-md" style="height:88px;">

      <div class="logo navbar-brand">
        <a href="<?php echo $url_helper;?>index">
          <img src="<?php echo $url_helper;?>images/Logo.png" class="card-img-top" alt="Bild ladet nicht!">
        </a>
      </div>


      <!-- Collapse button -->
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target"
        aria-controls="collapse_target" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars fa-1x "></i>
      </button>

      <!-- Collapsible content -->
      <div class="collapse navbar-collapse styling-aqua-collapse" id="collapse_target">

        <ul class="nav navbar-nav ml-auto height-ajust-nav">
          <li class="nav-item ">
            <a class="nav-link <?= $aktivschwimmkurse; ?> nav-link-schwimmkurse"
              href="<?php echo $url_helper;?>Schwimmkurse">SCHWIMMKURSE</a>
          </li>



          <li class="nav-item ">
            <a class="nav-link <?= $aktivkursort;  ?> nav-link-kursort"
              href="<?php echo $url_helper;?>Kursorte">KURSORT</a>
          </li>


          <li class="nav-item ">
            <a class="nav-link <?= $aktivueberuns;  ?> nav-link-ueber" href="<?php echo $url_helper;?>Ueber_uns">ÜBER
              UNS</i></a>
          </li>


          <li class="nav-item ">
            <a class="nav-link <?= $aktivkontakt; ?> nav-link-kontakt"
              href="<?php echo $url_helper;?>Kontakt">KONTAKT</a>
          </li>

        </ul>


        <a class="btn nav-link-login" href="<?php echo $url_helper;?>login" target="_blank">LOGIN</a>

      </div>




  </div>
</div>
</nav>