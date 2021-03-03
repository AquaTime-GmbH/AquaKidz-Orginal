




<?php

//datenbank hier durch laufen lassen 

             
            if(isset($_POST['search_button'])){
                //der wert von index input felder wird hier übergeben
                $viewsearch_ort = $_POST['search_ort']; 
                
                $viewsearch_alt = $_POST['search_alt']; 


                if($viewsearch_alt != ''){

                    //session start mit den übergebenen werten 

                    //$_SESSION['username'] = $name;

                   //vom wert alter und plz wird ein cookie gesetzt 
                    setcookie("kursalter","$viewsearch_alt",time()+(3600*168));
                    setcookie("kursort","$viewsearch_ort",time()+(3600*168));
                
            

            if($viewsearch_alt == "1"){
                
                echo '<script> window.location="Kursarten/AquaBaby.php";</script>';
           //if anfrage wenn bestimmtes gewählt wird nach bestimmten marken filtern
                    
                    exit();
                    

                }elseif($viewsearch_alt == "2"){
                    echo ' <script> window.location="Kursarten/AquaKidz-Mini.php";</script>';
                   
                    exit();
                    
                  
                }elseif($viewsearch_alt == "4"){
                    echo ' <script> window.location="Kursarten/AquaKidz-Maxi.php";</script>';
   
                    exit();
                    
                    
                }elseif($viewsearch_alt == "7"){
                    echo ' <script> window.location="Kursarten/AquaKidz-Mixed.php";</script>';
                 
                    exit();
                }

            }


                else{
                    setcookie("kursort","$viewsearch_ort",time()+(3600*168)); 

                   echo ' <script> window.location="Kursorte.php";</script>';
                   
                    exit();
                   
                
                }
            }

        
            ?>

            


<?php 

include  $url_helper .'include/database.php';


$viewsearch_aquababy_ort = $_POST['search_aquababy_ort'];

if ($viewsearch_aquababy_postleitzahl == ""){
    $viewsearch_aquababy_postleitzahl = "x";
}
   
if($viewsearch_aquababy_postleitzahl == "x"){
    $result = mysqli_query($con_mysqli,"SELECT * FROM kurse WHERE  (fm_wochentag = '1 - Montag') and (fm_marke='AquaKidz Mini' AND fm_status='veröffentlicht') OR (fm_status='ongoing' AND fm_marke='AquaKidz Mini') and (fm_wochentag = '1 - Montag')  order by fm_status='ongoing' DESC,  fm_von_datum_html ASC");
  
    //$result_marken = mysqli_query($con_mysqli,"SELECT markenname FROM marken where markenname in ('AquaMixed Training','AquaVacation','AquaKidz Maxi','AquaKidz Schwimmschule','AquaMermaid') group by markenname; "); 

    //aquakidz maxi
    //SELECT * FROM kurse WHERE (fm_marke in ('AquaVacation','AquaKidz Maxi') AND fm_status="verffentlicht") OR (fm_status="ongoing" AND fm_marke='AquaKidz Mini') order by fm_status="ongoing" DESC,  fm_von_datum_html ASC
   
   //aquakidz mini
  //SELECT * FROM kurse WHERE (fm_marke='AquaKidz Mini' AND fm_status="verffentlicht") OR (fm_status="ongoing" AND fm_marke='AquaKidz Mini') order by fm_status="ongoing" DESC,  fm_von_datum_html ASC
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
    
      if ($sql_fm_von_datum_html->format('YYYY-MM-DD') >= $viewsearch_aquababy_kursstart) {     
           $countergebnisse = ++$countergebnisse;

///////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////MARKEN////////////////////////////////////////////////
///////////////////////////////////////////////////////////////////////////////////////////////////
  

//kursort seite wenn du die postleitzahl angibst aber keinen alter soll alle marken filtern (bzw anzeigen)
                     
//       while($row = mysqli_fetch_array($result_marken))
// {  
//     $sql_marken_id = $row['id'];
//     $sql_markenname = $row['markenname'];
//     $sql_markenfamilie = $row['markenfamilie'];
//     $sql_internetseite_alter = $row['internetseite_alter'];
//     $sql_internetseite_kinderlernen = $row['internetseite_kinderlernen'];
//     $sql_internetseite_biggestsellvalue = $row['internetseite_biggestsellvalue'];
//     $sql_internetseite_anzahlschueler = $row['internetseite_anzahlschueler'];
//     $sql_internetseite_zielsetzung = $row['internetseite_zielsetzung'];
//     $sql_internetseite_wichtigsteinputs = $row['internetseite_wichtigsteinputs'];
//     $sql_internetseite_bestesfeedback = $row['internetseite_bestesfeedback'];
//     $sql_internetseite_zusatzinfos = $row['internetseite_zusatzinfos'];

// echo $sql_markenname;



?>
 <div class="col-md-12">
             <div class="card-aqua-sizing">

                 <div class="row">

                     <div class="col-2">
                         <img src="<?php echo $url_helper;?>images/little-boy-learning-to-swim-in-a-swimming-pool-P93KRDN.jpg"
                             class="card-img card-aqua-img" alt="Bild Konnte nicht Geladen werden!">
                     </div>
                     <div class="col-md-6">
                         <div class="card-body">
                             <h5 class="card-title card-title-style">
                             <div class="row">
                                <?=  $sql_fm_von_datum_html->format('d.m.Y'). " - " . $sql_fm_bis_datum_html->format('d.m.Y')  . " - " .$sql_fm_bad_ort . " - ". $sql_fm_Startzeit->format('H:i:s');  ?>
                             </div>
                                 <div class="row" style="margin-top:15px;">
                                     <?= " Anzahl verbleibende Termine: ". $sql_fm_offene_plaetze . " - " ."Dauer: " . $sql_fm_Dauer . "min";  ?>
                                 </div>
                             </h5>

                             <p class="card-text under-font"><small>CA. 10 Wochen - 24 Monate</small></p>
                         </div>
                     </div>


                     <div class="col-4">
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
   
//}
        
     } else {}
  
    

}