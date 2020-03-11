
    function popup_hide(){
      var date = new Date();
      date.setTime(date.getTime()+(30*60*1000));
      var expires = date.toGMTString();
      var offset= -date.getTimezoneOffset()/60;
      document.cookie_akzeptiert = 'timezone='+offset+';expires='+expires+';';

      document.getElementById("cookie_popup").classList.add("hidden");
    }
    
    // setCookie('HideDiv','true',1);
    // $(".collectionhaircookies").css('display','none');

    function cookiealert() {
    //wenn er auf verweigern drückt zeigt er den text an 
    var answer = confirm("Wenn Sie die Cookies ablehnen, kann dies Auswirkungen auf die Suchfunktion haben.")
    if (answer) {
    //wenn er auf verweigern gedrückt hat und dann auf ok dann wird er auf eine andere seite geleitet
     window.location="index_session";
     
    } else { 
    //wenn er auf abbrechen drückt wird wieder derstandtart pop up angezeigt
    
      
    }
    
    }  
  
  
  
  
  
  
    // <div id="cookieControlOnLoad">
    // <div class="container">
    //     ....
    //     <span class="close" id="cookieClose" onclick="CheckCookieAndHideDiv();">&#215;</span>    
    // </div>
    // </div>
    
    // if (getCookie('HideDiv') === 'true') {
    //   $('.cookieControlOnLoad').css('display', 'none')
    // }
    // function CheckCookieAndHideDiv() {
    //            setCookie('HideDiv', 'true', 1);
    //            $(".cookieControlOnLoad").css('display', 'none');
    //  }


    
  
  /*   var now = new Date(); // Variable für aktuelles Datum
    var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
    var deleteCookie = lifetime + 604800; // Macht den Cookie 7 Tage gültig.
       
    now.setTime(deleteCookie);
    var enddate = now.toUTCString();
       
   document.cookie = "kursstart = set; secure; expires=" + enddate;
    document.cookie = "kursort = set; secure; expires=" + enddate;
    document.cookie = "kursalter = set; secure; expires=" + enddate;*/