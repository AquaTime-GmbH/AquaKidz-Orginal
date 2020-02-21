<?php 
            
            
             
            if(isset($_POST['search_button'])){
                $viewsearch_ort = $_POST['search_ort']; 
                $viewsearch_start = $_POST['search_start']; 
                $viewsearch_alt = $_POST['search_alt']; 


                if($viewsearch_alt != ''){
                setcookie("kursstart","$viewsearch_start",time()+(3600*168)); 
                setcookie("kursalter","$viewsearch_alt",time()+(3600*168)); 
                setcookie("kursort","$viewsearch_ort",time()+(3600*168)); 
                
            
               


            if($viewsearch_alt == "1"){
                
              header('location: Kursarten/AquaBaby');
                    exit();
                    

                }elseif($viewsearch_alt == "2"){
                   header('location: Kursarten/AquaKidz-Mini');
                    exit();
                    
                  
                }elseif($viewsearch_alt == "4"){
                 header('location: Kursarten/AquaKidz-Maxi');
                    exit();
                    
                    
                }elseif($viewsearch_alt == "7"){
                   header('location: Kursarten/AquaKidz-Mixed');
                    exit();
                }

            }


                else{
                    setcookie("kursstart","$viewsearch_start",time()+(3600*168)); 
                    setcookie("kursort","$viewsearch_ort",time()+(3600*168)); 

                    header('location: Kursorte');
                    exit();
                   
                
                }
            }

        
            ?>