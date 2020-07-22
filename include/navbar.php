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
      <div class="collapse navbar-collapse" id="collapse_target">

        <ul class="nav navbar-nav align-items-end ml-auto">
          <li class="nav-item ">
            <a class="nav-link <?= $aktivschwimmkurse; ?>" href="<?php echo $url_helper;?>Schwimmkurse"
              style="border-radius:20px 0px 0px 0px;  background-color: white; color:#416cb2; font-family: 'Fjalla One', sans-serif;">SCHWIMMKURSE</a>
          </li>



          <li class="nav-item ">
            <a class="nav-link <?= $aktivkursort;  ?>" href="<?php echo $url_helper;?>Kursorte"
              style="background-color:white; color:#416cb2; font-family: 'Fjalla One', sans-serif;">KURSORT</a>
          </li>


          <li class="nav-item ">
            <a class="nav-link <?= $aktivueberuns;  ?>" href="<?php echo $url_helper;?>Ueber_uns"
              style="background-color:white; color:#416cb2; font-family: 'Fjalla One', sans-serif;">ÜBER UNS</i></a>
          </li>


          <li class="nav-item ">
            <a class="nav-link <?= $aktivkontakt; ?>" href="<?php echo $url_helper;?>Kontakt"
              style="border-radius:0px 20px 0px 0px; background-color:white; color:#416cb2; font-family: 'Fjalla One', sans-serif;">KONTAKT</a>
          </li>

        </ul>


          <a class="btn" href="<?php echo $url_helper;?>Index" target="_blank"
            style="color:white; font-family: 'Fjalla One', sans-serif;">LOGIN</a>
 
      </div>




    </div>
  </div>
</nav>