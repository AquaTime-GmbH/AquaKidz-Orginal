

<style>
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
</section>





<div class="aqua-navbar" style="">
        <nav class="navbar sticky-top navbar-expand-md navbar-dark " style="height:80px; background-color:c">
    
   Der (Burger) wenn die seite kleiner wird-
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="collapse_target">
      <div class="col-2">
        <div class="logo">
          <img src="../assets/images/Logo.png" class="card-img-top"  alt="Bild ladet nicht!">
        </div>
      </div>
  
    <div class="col-3"></div>
    <div class="col-7 navbar-pos">
   
    <ul class="navbar-nav" style="float:right;"> 
        <li class="nav-item ">
            <a class="nav-link " href="<?= base_url();?>Homepage_con/schwimmkurse" target="_blank" style="border-radius:20px 0px 0px 0px;  background-color: white; color:#416cb2;">SCHWIMMKURSE</a>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" href="#" style="background-color:white; color:#416cb2;">KURSORT</a>
        </li>
      
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?/*= base_url();*/?>Homepage_con/sites" target="_blank" data-toggle="dropdown" data-target="dropdown_target" style="background-color:white; color:#416cb2;">ÜBER UNS</a>
            <div class="dropdown-menu" aria-labelledby="dropdowntarget">
            <a class="dropdown-item"> dropdown 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"> dropdown 2</a>
            <a class="dropdown-item"> dropdown 3</a>
          
        </li>
      </ul>
      
      <li class="nav-item ">
          <a class="nav-link" href="#" style="border-radius:0px 20px 0px 0px; background-color:white; color:#416cb2;">KONTAKT</a>
      </li>
     
      
       
      
      </ul>  
      <a class="btn" href="#" style="color:white;">LOGIN</a>
      </div> 



  </nav>
</div>