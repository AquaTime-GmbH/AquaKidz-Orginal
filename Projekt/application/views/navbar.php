

<!--<style>
    .testnav{
        margin-left: auto;
        margin-right: auto;
        max-width: 1336px;
        background-color: red;
        height: 100%;
    }

    .testnav2{
        height: 80px;
        width: 100%;
        background-color: var(--maincolor);
        border-bottom: 5px solid white;
        z-index: 1000;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
    }

    .testnav li{
        display: inline !important;
        list-style-type: none !important;

    }





</style>
<section class="testnav2">
<nav class="testnav">
    
        <ul>
            <li>
                <a href=”#”>SCHWIMMKURSE</a>
            </li>
            <li>
                <a href=”#”>KURSORT</a>
            </li>
            <li>
                <a href=”#”>ÜBER UNS</a>
            </li>
            <li>
                <a href=”#”>KONTAKT</a>
            </li>
        </ul>

    </section>
</nav>
</section>-->

<div class="aqua-navbar">
        <nav class="navbar sticky-top navbar-expand-md navbar-dark" style="height:80px; background-color:c">
    
   <!--Der (Burger) wenn die seite kleiner wird-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="collapse_target">
      <div class="col-2">
        <div class="logo">
          <img src="<?= base_url();?>assets/images/Logo.png" href="<?= base_url();?>index" class="card-img-top"  alt="Bild ladet nicht!">
        </div>
      </div>
  
    <div class="col-3"></div>
    <div class="col-7 navbar-pos">
   
    <ul class="navbar-nav" style="float:right;"> 
        <li class="nav-item ">
            <a class="nav-link " href="<?= base_url();?>schwimmkurse" style="border-radius:20px 0px 0px 0px;  background-color: white; color:#416cb2;">SCHWIMMKURSE</a>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" href="<?= base_url();?>kursorte" style="background-color:white; color:#416cb2;">KURSORT</a>
        </li>
      
      
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url();?>about_us"  style="background-color:white; color:#416cb2;">ÜBER UNS</a>
        </li>
     
      
      <li class="nav-item ">
          <a class="nav-link" href="<?= base_url();?>contact" style="border-radius:0px 20px 0px 0px; background-color:white; color:#416cb2;">KONTAKT</a>
      </li>
      
      </ul>  
    </div> 
  </div>
      <div class="login-pos">
        <a class="btn" href="../../login" target="_blank" style="color:white;">LOGIN</a>
      </div>
  

  </nav>
</div>