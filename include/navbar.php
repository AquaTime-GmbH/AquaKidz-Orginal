

<div class="aqua-navbar">
        <nav class="navbar sticky-top navbar-expand-md navbar-dark" style="height:80px; background-color:c">
    
   <!--Der (Burger) wenn die seite kleiner wird-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="collapse_target">
      <div class="col-2">
        <div class="logo">
          <img src="<?php echo $url_helper;?>images/Logo.png" href="<?php echo $url_helper;?>Index" class="card-img-top"  alt="Bild ladet nicht!">
        </div>
      </div>
  
    <div class="col-3"></div>
    <div class="col-7 navbar-pos">
   
    <ul class="navbar-nav" style="float:right;"> 
        <li class="nav-item ">
            <a class="nav-link " href="<?php echo $url_helper;?>Schwimmkurse" style="border-radius:20px 0px 0px 0px;  background-color: white; color:#416cb2;">SCHWIMMKURSE</a>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" href="<?php echo $url_helper;?>Kursorte" style="background-color:white; color:#416cb2;">KURSORT</a>
        </li>
      
      
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $url_helper;?>Ueber-uns"  style="background-color:white; color:#416cb2;">ÜBER UNS</a>
        </li>
     
      
      <li class="nav-item ">
          <a class="nav-link" href="<?php echo $url_helper;?>Kontakt" style="border-radius:0px 20px 0px 0px; background-color:white; color:#416cb2;">KONTAKT</a>
      </li>
      
      </ul>  
    </div> 
  </div>
      <div class="login-pos">
        <a class="btn" href="<?php echo $url_helper;?>Index" target="_blank" style="color:white;">LOGIN</a>
      </div>
  

  </nav>
</div>