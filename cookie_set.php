<?php
if (isset($_POST['ok_cookie_button'])){

setcookie('Cookie_accepted','yes',time()+(3600*168));

echo " <script
document.getElementById(\"cookie_popup\").classList.add(\"hidden\");
window.location=\"index\";

</script>";
          
}else{

}  
?>