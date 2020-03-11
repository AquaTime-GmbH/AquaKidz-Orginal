<?php 

if (isset($_POST['ok_cookie_button'])){


setcookie('Cookie_accepted','yes',time()+(3600*168));

echo ' <script> window.location="index";</script>';
exit();
                   
}else{

}    



?>
