

    
    function popup_hide(){
      document.getElementById("cookie-popup").classList.add("hidden");
    }
    
    function cookiealert() {
    //wenne r auf verweigern drückt zeigt er den text an 
    var answer = confirm("Wenn Sie die Cookies ablehnen, kann dies Auswirkungen auf die Suchfunktion haben.")
    if (answer) {
    //wenn er auf verweigern gedrückt hat und dann auf ok dann wird er auf eine andere seite geleitet
     window.location="index_session";
     
    } else { 
    //wenn er auf abbrechen drückt wird wieder derstandtart pop up angezeigt
    
      
    }
    
    }  
  
  
  
  
  
  
  
  
  /*   var now = new Date(); // Variable für aktuelles Datum
    var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
    var deleteCookie = lifetime + 604800; // Macht den Cookie 7 Tage gültig.
       
    now.setTime(deleteCookie);
    var enddate = now.toUTCString();
       
   document.cookie = "kursstart = set; secure; expires=" + enddate;
    document.cookie = "kursort = set; secure; expires=" + enddate;
    document.cookie = "kursalter = set; secure; expires=" + enddate;*/