 <!-- organisation der url -->
 <?php 
$url_helper= "";
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
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
         integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="<?php echo $url_helper;?>css/style.css">
     <link href="https://fonts.googleapis.com/css?family=Fjalla+One|Lato&display=swap" rel="stylesheet">
 </head>

 <body>

     <!--navbar wird eingebunden-->
     <?php
$aktivschwimmkurse = '';
$aktivkursort = 'aktiv';
$aktivueberuns = '';
$aktivkontakt = '';


include $url_helper .'include/navbar.php';
?>
     <!--------------ende der einbindung------------------>


     <?php 

 if( isset($_COOKIE['kursstart'])) {
    $cookie_kursstart = $_COOKIE["kursstart"]; 
    } else {
        $cookie_kursstart = "";
  }
  if( isset($_COOKIE['kursort'])) {
    $cookie_kursort = $_COOKIE["kursort"]; 
    } else {
        $cookie_kursort = "";
  }
  if( isset($_COOKIE['kursalter'])) {
    $cookie_kursalter = $_COOKIE["kursalter"]; 
    } else {
        $cookie_kursalter = "";
  }
?>

     <div class="hintergrundbild"></div>
     <div class="container">
     <form action="" method="post">
    
         <div class="col-5">


             <div class="card kursort-card">
                 <div class="card-body">
                     <div class="font-color">
                         <h1 class="card-title card-title-style" style="font-size:32px">Finde deinen Ort</h1>
                         <label class="col-4 col-form-label first-card-text font-color">Plz</label>
                         <div class="col-12">
                             <input pattern="^[0-9]{4}$" class="form-control labelshape" id="search_ort"
                                 name="search_ort" type="text" value="<?= $cookie_kursort; ?>">
                         </div>



                     </div>
                 </div>
             </div>
         </div>



         <form action="" method="post">

             <div class="Card-find-aqua">

                 <div class="aquababy-box-überschrift">
                     <h1 style="margin-left: 10px; color:white;">KURSORTE FINDEN</h1>
                 </div>

                 <div class="row">


                     <div class="col-3" style="margin-left:30px;">
                         <label class="col-2 col-form-label text-card-aqua"><span>Ort</span></label>
                         <input class="form-control labelshape" id="search_aquababy_ort" name="search_aquababy_ort"
                             type="text" placeholder="Überall" value="<?= $viewsearch_aquababy_ort_cookie; ?>">
                     </div>


                     <div class="col-2" style="margin-left:10px;">
                         <label class="col-2 col-form-label text-card-aqua"><span>PLZ</span></label>
                         <input class="form-control labelshape" id="search_aquababy_ort" name="search_aquababy_ort"
                             type="text" placeholder="XXXX" value="<?= $viewsearch_aquababy_ort_cookie; ?>">
                     </div>


                     <div class="col-2" style="margin-left:10px;">
                         <label class="col-12 col-form-label text-card-aqua"><span>Im Umkreis von</span></label>
                         <div class="input-group">
                             <input class="form-control labelshape" id="search_aquababy_ort" name="search_aquababy_ort"
                                 type="text" placeholder="0+" value="<?= $viewsearch_aquababy_ort_cookie; ?>">
                             <div class="input-group-append">
                                 <span class="input-group-text">km</span>
                             </div>
                         </div>



                     </div>


                     <div class="col-4"></div>
                 </div>
                 <div class="row">

                     <div class="col-4" style="margin-left:30px;">
                         <label class="col-6 col-form-label text-card-aqua"><span>Im Umkreis von</span></label>
                         <div class="input-group">
                             <input class="form-control labelshape" id="search_aquababy_ort" name="search_aquababy_ort"
                                 type="text" placeholder="xxxx" value="<?= $viewsearch_aquababy_ort_cookie; ?>">
                             <div class="input-group-append">
                                 <span class="input-group-text">Wochen /Monate /Jahre</span>
                             </div>
                         </div>





                     </div>
                     
                  <section style="display:flex; flex-wrap:wrap;">
                      

                         <div class="col-1 abstand-col-1-kurs">
                             <p>Alle</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
                
                  
                         <div class="col-1 abstand-col-1-kurs">
                             <p>Mo</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
                  
     
                         <div class="col-1 abstand-col-1-kurs">
                             <p>Di</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
          
                 
                         <div class="col-1 abstand-col-1-kurs">
                             <p>Mi</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
              
                         <div class="col-1 abstand-col-1-kurs">
                             <p>Do</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
                 
      
                         <div class="col-1 abstand-col-1-kurs">
                             <p>Fr</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
                
                 
                         <div class="col-1 abstand-col-1-kurs">
                             <p>Sa</p>
                             <input class="styling-checkbox-kursort" type="checkbox">
                         </div>
             
            </section>
             </form>
                     <input href="#" type="submit" class="btn  btn_suchen_aqua" name="search_button" value="Suchen">

                 </div>

                 <?php

            $countergebnisse = 0;
            ?>

         </form>

         <?php

//ist der wert vom index value nicht gleich wie der wert von aquababy dann delete cookie and set a new one 


if(isset($_POST['search_button'])){
    
    $viewsearch_aquababy_ort = $_POST['search_aquababy_ort'];
    $viewsearch_aquababy_kursstart = $_POST['search_aquababy_kursstart'];


    setcookie("kursort","$viewsearch_aquababy_ort",time()+(3600*168));

   


if ($viewsearch_aquababy_postleitzahl == ""){
    $viewsearch_aquababy_postleitzahl = "x";
}

if ($viewsearch_aquababy_kursstart == ""){

    $viewsearch_aquababy_kursstart  = date('d.m.Y');
    $viewsearch_aquababy_kursstart = date("d.m.Y", strtotime("$viewsearch_aquababy_kursstart") - (3600 * 24 * 14)); 
}else{
    $viewsearch_aquababy_kursstart = date("d.m.Y", strtotime("$viewsearch_aquababy_kursstart") - (3600 * 24 * 14)); 
}

   
if($viewsearch_aquababy_postleitzahl == "x"){
    $result = mysqli_query($con_mysqli,"SELECT * FROM kurse  order by fm_von_datum_html ASC");
} else{
    $result = mysqli_query($con_mysqli,"SELECT * FROM kurse WHERE fm_bad_ort LIKE '%$viewsearch_aquababy_postleitzahl%' order by fm_von_datum_html ASC");
}


while($row = mysqli_fetch_array($result))
{  
    
    $sql_kurs_id = $row['kurs_id'];
    $sql_fm_kurs_id = $row['fm_kurs_id'];
    $sql_fm_bad_id = $row['fm_bad_id'];
    $sql_fm_bad_name_druck = $row['fm_bad_name_druck'];
    $sql_fm_bad_strasse = $row['fm_bad_strasse'];
    $sql_fm_bad_ort = $row['fm_bad_ort'];
    $sql_fm_bad_postleitzahl = $row['fm_bad_postleitzahl'];
    $sql_fm_offene_plaetze = $row['fm_offene_plaetze'];
    $sql_fm_von_datum_html = new DateTime($row['fm_von_datum_html']);
    $sql_fm_bis_datum_html = new DateTime($row['fm_bis_datum_html']);
    $sql_fm_text_kursinfo = $row['fm_text_kursinfo'];
    $sql_fm_kurskosten = $row['fm_kurskosten'];
    $sql_fm_kurstrainer_erster_id = $row['fm_kurstrainer_erster_id'];
    $sql_fm_marken_id = $row['fm_marken_id'];
    $sql_fm_marke = $row['fm_marke'];
    $sql_fm_markenfamilie = $row['fm_markenfamilie'];
    $sql_fm_Niveau_Description_Internet = $row['fm_Niveau_Description_Internet'];
    $sql_fm_Alter = $row['fm_Alter'];
    $sql_fm_wochentag = $row['fm_wochentag'];
    $sql_fm_Startzeit = new DateTime($row['fm_Startzeit']);
    $sql_fm_Dauer = $row['fm_Dauer'];
    $sql_fm_taeglich = $row['fm_taeglich'];
    $sql_fm_Bad_Eintritt = $row['fm_Bad_Eintritt'];
    $sql_fm_sonst_Kosten = $row['fm_sonst_Kosten'];
    $sql_diagramm_kz1_text = $row['diagramm_kz1_text'];
    $sql_diagramm_kz2_text = $row['diagramm_kz2_text'];
    $sql_diagramm_kz3_text = $row['diagramm_kz3_text'];
    $sql_diagramm_kz4_text = $row['diagramm_kz4_text'];
    $sql_diagramm_kz5_text = $row['diagramm_kz5_text'];
    $sql_diagramm_kz6_text = $row['diagramm_kz6_text'];
    $sql_diagramm_kz7_text = $row['diagramm_kz7_text'];
    $sql_diagramm_kz8_text = $row['diagramm_kz8_text'];
    $sql_fm_status = $row['fm_status'];
    $sql_counter = $row['counter'];
    $sql_updated_at = new DateTime($row['updated_at']);
    $sql_created_at = new DateTime($row['created_at']);
     
    

    if ($sql_fm_von_datum_html->format('d.m.Y') >= $viewsearch_aquababy_kursstart) {     
           $countergebnisse = ++$countergebnisse;
           



?>


         <div class="col-md-12">
             <div class="card-aqua-sizing">

                 <div class="row">

                     <div class="col-2">
                         <img src="<?php echo $url_helper;?>images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg"
                             class="card-img card-aqua-img" alt="Bild Konnte nicht Geladen werden!">
                     </div>
                     <div class="col-md-4">
                         <div class="card-body">
                             <h5 class="card-title card-title-style">
                                 <?=  $sql_fm_von_datum_html->format('d.m.Y'). " - " . $sql_fm_bis_datum_html->format('d.m.Y')  .  " - " .$sql_fm_bad_postleitzahl ;  ?>
                             </h5>

                             <p class="card-text under-font"><small>CA. 10 Wochen - 24 Monate</small></p>
                         </div>
                     </div>


                     <div class="col-6">
                         <?php if($sql_fm_offene_plaetze != '0'){?>

                         <a href="#" class="btn  btn_kursort_aqua_noch">Noch <span
                                 style="color:red;"><?= $sql_fm_offene_plaetze;?></span> Frei </a>
                         <?php }else{?>
                         <a href="#" class="btn  btn_kursort_aqua_noch">Warteliste</a>
                         <?php }?>
                         <div class="row">


                             <a href="#" class="btn  btn_kursort_aqua">Zum Kursort</a>

                             <a href="<?php echo $url_helper;?>Kurs?<?= $sql_fm_marke."-".$sql_fm_Niveau_Description_Internet."&id=".$sql_fm_kurs_id; ?>"
                                 class="btn  btn_kurs_aqua">Zum Kurs</a>
                         </div>
                     </div>

                 </div>
             </div>
         </div>


         <?php
   

        
     } else {}
  
}

   

    if($countergebnisse == '0'){ 
        $result = mysqli_query($con_mysqli,"SELECT * FROM kurse order by starttermin limit 3 " );
       
        while($row = mysqli_fetch_array($result))
{  
    

    $sql_kursort = $row['ort'];
    $view_kursstart = new DateTime($row['starttermin']);


      
?>

         <div class="col-md-12">
             <div class="card-aqua-sizing">

                 <div class="row">

                     <div class="col-2">
                         <img src="<?php echo $url_helper;?>images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg"
                             class="card-img card-aqua-img" alt="Bild Konnte nicht Geladen werden!">
                     </div>
                     <div class="col-md-4">
                         <div class="card-body">
                             <h5 class="card-title card-title-style">
                                 <?= date('d.m.Y') . " - ". $view_kursstart->format('d.m.Y'). " " . $sql_kursort;  ?>
                             </h5>
                             <p class="card-text under-font"><small>CA. 10 Wochen - 24 Monate</small></p>
                         </div>
                     </div>


                     <div class="col-6">
                         <div class="row">
                             <a href="#" class="btn  btn_kursort_aqua">Zum Kursort</a>

                             <a href="#" class="btn  btn_kurs_aqua">Zum Kurs</a>
                         </div>
                     </div>

                 </div>
             </div>
         </div>


         <?php
   

        
}
}
  

    }
   
?>
         <div class="block-card-aqua">
             <?php
if($countergebnisse != '0'){ ?>
             <p class="counter-style-aqua" id="counter"> <?= " " . " von " . $countergebnisse . " Ergebnissen"; 
             
            
             ?></p>

             <?php }
else{
    
    ?>
             <p class="position-style-error-aqua" id="counter">Leider haben wir nichts gefunden - Alternativ Termie </p>

             <?php
} 
?>
         </div>




<input type="submit" name="mehr_anzeigen" class="btn btn_mehr_laden" value="Mehr Laden">

         
     </div>





     <?php
    $result = mysqli_query($con_mysqli,"SELECT internetseite_ FROM marken where marken_name=''  ");
 
 ?>







     <h2 class="text-spiezial">BRAUCHEN SIE MEHR INFORMATIONEN?</h2>
     <div class="row">
         <div class="col-sm-6">
             <div class="card card-1-sizing">
                 <div class="row no-gutters">
                     <div class="col-md-8">
                         <div class="card-body">
                             <h5 class="card-title" style="color:rgb(8, 51, 194);">WISSEN FÜR ELTERN</h5>
                             <p class="card-text font-color">Wir haben die wichtigsten Informationen für Eltern
                                 von Babys und jungen Kindern zusammengestellt, damit sie Wissen worauf es
                                 ankommt.</p>
                         </div>
                     </div>
                     <a href="#" class="btn  bnts_card4 mehr-erfahren">Mehr Erfahren</a>

                 </div>

             </div>
         </div>

         <div class="col-sm-6">
             <div class="card card-2-sizing">
                 <div class="row no-gutters">
                     <div class="col-md-8">
                         <div class="card-body">
                             <h5 class="card-title" style="color:rgb(8, 51, 194);">RUFEN SIE UNS AN</h5>
                             <p class="card-text under-font"><small>AquaTime GmbH</small></p>
                             <p class="card-text font-color">Bahnhofstrasse 32, 6403 Küssnacht am Rig</p>
                             <p class="card-text font-color">Mobil 077 423 58 38; Festnetz 041 852 05 53</p>

                         </div>
                     </div>

                     <a href="#" class="btn  btn_email">Email</a>

                     <a href="#" class="btn  btn_auf">Anrufen</a>
                 </div>
             </div>
         </div>
     </div>
     </div>
     </div>

     <!--footer wird eingebunden-->
     <?php
include 'include/footer.php';
?>
     <!--------------ende der einbindung------------------>