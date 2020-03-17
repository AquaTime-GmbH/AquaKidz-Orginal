<?php 
            
             
            if(isset($_POST['search_button'])){
                $viewsearch_ort = $_POST['search_ort']; 
                $viewsearch_start = $_POST['search_start']; 
                $viewsearch_alt = $_POST['search_alt']; 


                if($viewsearch_alt != ''){

                    //session start mit den übergebenen werten 

                    //$_SESSION['username'] = $name;
                    setcookie("kursstart","$viewsearch_start",time()+(3600*168));
                    setcookie("kursalter","$viewsearch_alt",time()+(3600*168));
                    setcookie("kursort","$viewsearch_ort",time()+(3600*168));
                
            

            if($viewsearch_alt == "1"){
                
             echo ' <script> window.location="Kursarten/AquaBaby";</script>';
                    exit();
                    

                }elseif($viewsearch_alt == "2"){
                    echo ' <script> window.location="Kursarten/AquaKidz-Mini";</script>';
                    exit();
                    
                  
                }elseif($viewsearch_alt == "4"){
                    echo ' <script> window.location="Kursarten/AquaKidz-Maxi";</script>';
                    exit();
                    
                    
                }elseif($viewsearch_alt == "7"){
                    echo ' <script> window.location="Kursarten/AquaKidz-Mixed";</script>';
                    exit();
                }

            }


                else{
                    setcookie("kursstart","$viewsearch_start",time()+(3600*168)); 
                    setcookie("kursort","$viewsearch_ort",time()+(3600*168)); 

                   echo ' <script> window.location="Kursorte";</script>';
                    exit();
                   
                
                }
            }

        
            ?>