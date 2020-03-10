function cookieOk() {
  /*   var now = new Date(); // Variable für aktuelles Datum
    var lifetime = now.getTime(); // Variable für Millisekunden seit 1970 bis aktuelles Datum
    var deleteCookie = lifetime + 604800; // Macht den Cookie 7 Tage gültig.
       
    now.setTime(deleteCookie);
    var enddate = now.toUTCString();
       
   document.cookie = "kursstart = set; secure; expires=" + enddate;
    document.cookie = "kursort = set; secure; expires=" + enddate;
    document.cookie = "kursalter = set; secure; expires=" + enddate;*/
    document.getElementById("cookie-popup").classList.add("hidden");
  }

  function cookiealert() {
    var answer = confirm("Wenn Sie die Cookies ablehnen, kann dies Auswirkungen auf die Suchfunktion haben.")
    if (answer) {

     window.location="index_session";
     
  } else { 
    //wenn er auf abbrechen drückt 
    //document.getElementById("cookie-popup").classList.add("hidden");
      
    }

  }