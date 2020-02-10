<nav class="navbar sticky-top navbar-expand-md navbar-dark bg-primary" style="height:80px;">
  <div class="container">
    <!--Der (Burger) wenn die seite kleiner wird-->
      <button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
        <span class="navbar-toggler-icon"></span>
      </button>

    <div class="collapse navbar-collapse" id="collapse_target">
      <div class="col-1">
        <div class="logo">
          <img src="../assets/images/Logo.png" class="card-img-top"  alt="Bild ladet nicht!">
        </div>
      </div>

    <div class="col-4"></div>
    <div class="col-7">

    
      <li class="nav-item">
          <div class="nav-link btn" style="width:100px; height:37px color:white; float:right;">LOGIN</div>
      </li>
 
    <ul class="navbar-nav" style="float:right;"> 
        <li class="nav-item">
            <a class="nav-link font-link" href="<?= base_url();?>Homepage_con/schwimmkurse" target="_blank" style="border-radius:20px 0px 0px 0px; background-color:white; color:rgb(0, 123, 255);">SCHWIMMKURSE</a>
        </li>
      
        <li class="nav-item">
            <a class="nav-link" href="#" style="background-color:white; color:rgb(0, 123, 255);">KURSORT</a>
        </li>
      
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="<?= base_url();?>Homepage_con/sites" target="_blank" data-toggle="dropdown" data-target="dropdown_target" style="background-color:white; color:rgb(0, 123, 255);">ÜBER UNS</a>
            <div class="dropdown-menu" aria-labelledby="dropdowntarget">
            <a class="dropdown-item"> dropdown 1</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item"> dropdown 2</a>
            <a class="dropdown-item"> dropdown 3</a>
          
        </li>
      </ul>
      
      <li class="nav-item ">
          <a class="nav-link" href="#" style="border-radius:0px 20px 0px 0px; background-color:white; color:rgb(0, 123, 255);">KONTAKT</a>
      </li>
      
   

      </ul>  
    
      </div> 
    </div>

</nav>
<body>