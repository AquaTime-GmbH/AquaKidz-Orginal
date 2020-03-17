
<!--<footer class="footer-pos">
<div class="row">
    <div class="footer-blau col-6">
   
    



    <div class="row">
            <div class="col-sm-4"></div>
        <div class="col-sm-2"style="width:246px; height:279;">

            <p class="footer-links" >
                <a class="footer-text" href="<?php echo $url_helper;?>">KURSE
                </a>
                <a class="footer-text" href="<?php echo $url_helper?>Kursarten/AquaBaby">AquaBaby
                <small>ca. 10 Wochen - 24 Monate</small>
                </a>

                <a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mini">AquaKidz Mini
                <small>ca. 2 bis 3 Jahre</small>
                </a>

                <a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Maxi">AquaKidz Maxi
                    <small>ca. 3,5 bis 7,5 Jahre</small>
                </a>
                
                <a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mixed">AquaKidz Mixed
                    <small>Ab ca. 7 Jahre</small>
                </a>

            </p>  
        </div>

        <div class="col-sm-2">
        <p class="footer-links">
                <a class="footer-text" href="<?php echo $url_helper;?>Ueber-uns">ÜBER UNS
                </a>
                <a class="footer-text" href="<?php echo $url_helper;?>">Von Eltern für Kinder</a>

                <a class="footer-text" href="<?php echo $url_helper;?>">Motivation</a>

                <a class="footer-text" href="<?php echo $url_helper;?>">Unsere Qualitätsstandards</a>
                
                <a class="footer-text" href="<?php echo $url_helper;?>">Unser Team</a>

                <a class="footer-text" href="<?php echo $url_helper;?>">Unser Team</a>
                
            </p>  
        </div>
    </div>
</div>


    <div class="footer-blau col-6">








    </div>  
</div> 
    <div class="copyright-box">
        <div class="copyright-text">
            <?= "&copy AquaTime GmbH " . "2015 - " . date('Y');?>
        </div>
    </div>

</footer>-->



<footer>
<div class="row">
    <div class="footer-blau col-md-6">

    
    

    <div class="row">
            <div class="col-sm-4"></div>
        <div class="col-sm-2"style="width:246px; height:279;">

            <p class="footer-links" >
                <a class="footer-text" href="<?php echo $url_helper;?>">KURSE
                </a>
                <a class="footer-text" href="<?php echo $url_helper?>Kursarten/AquaBaby">AquaBaby
                <small>ca. 10 Wochen - 24 Monate</small>
                </a>

                <a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mini">AquaKidz Mini
                <small>ca. 2 bis 3 Jahre</small>
                </a>

                <a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Maxi">AquaKidz Maxi
                    <small>ca. 3,5 bis 7,5 Jahre</small>
                </a>
                
                <a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mixed">AquaKidz Mixed
                    <small>Ab ca. 7 Jahre</small>
                </a>

            </p>  
        </div>

        <div class="col-sm-2">
        <p class="footer-links">
                <a class="footer-text" href="<?php echo $url_helper;?>Ueber-uns">ÜBER UNS
                </a>
                <a class="footer-text" href="<?php echo $url_helper;?>">Von Eltern für Kinder</a>

                <a class="footer-text" href="<?php echo $url_helper;?>">Motivation</a>

                <a class="footer-text" href="<?php echo $url_helper;?>">Unsere Qualitätsstandards</a>
                
                <a class="footer-text" href="<?php echo $url_helper;?>">Unser Team</a>

                <a class="footer-text" href="<?php echo $url_helper;?>News">News</a>
                
            </p>  
        </div>
    </div>








    </div>


    <div class="col-md-6 footer-white">




    </div>
</div>


    <div class="copyright-box">
        <div class="copyright-text">
            <?= "&copy AquaTime GmbH " . "2014 - " . date('Y');?>
        </div>
    </div>

</footer>











<!-- Cookie popup style -->
<div id="cookie_popup">
 <div class="hinweis">
        <p>Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der Verwendung von Cookies zu.</p>
        </div> 
        <span class="more">
        <a href="datenschutz.php">Details</a>
        </span>

    <!-- beim klicken von dem button bleibt manauf der seite und der pop up fenster verschwindet -->
        <button  onClick="var d = new Date(); d = new Date(d.getTime() +1000*60*60*24*730); document.cookie = 'Akzeptiert=1; expires='+ d.toGMTString() + ';'; document.getElementById('cookie_popup').style.display = 'none';"  class="btn btn_ok_cookie" type="submit" name="ok_cookie_button">Akzeptieren</button>   
        <form action="" method="post" >
    <!-- beim klicken von diesem button kommt eine altert warnung die sagt ob man wirklich die cookies ablehnen will und wird dann auf die seite von session weiter geleitet -->
        <button class="btn btn_alert_cookie" type="submit" name="session_cookie">Verweigern</button>
        </form>
  </div>
</div>
<script>
var r = 0;
a = document.cookie;while(a != ''){while(a.substr(0,1) == ' '){a = a.substr(1,a.length);}cn = a.substring(0,a.indexOf('='));
if(a.indexOf(';') != -1){cw = a.substring(a.indexOf('=')+1,a.indexOf(';'));

}else{
    cw = a.substr(a.indexOf('=')+1,a.length);
}
if(cn == 'Akzeptiert'){
    r = cw;
}
i = a.indexOf(';')+1;
if(i == 0){
    i = a.length
}
a = a.substring(i,a.length);
}
if(r == '1') document.getElementById('cookie_popup').style.display = 'none';

//Cookie popup Script End 
</script>

<?php

if (isset($_POST['session_cookie'])){
    echo ' <script> window.location="index_session";</script>';
   
}

?>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>    
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>    
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/8d9d572486.js" crossorigin="anonymous"></script>
