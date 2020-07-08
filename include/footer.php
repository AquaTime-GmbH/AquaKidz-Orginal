<footer>

    <div class="row">
        <div class="footer-blau col-md-6">



            <div class="container">



                <div class="row">

                    <div class="col-md-4"></div>



                    <div class="col-md-4">

                        <a class="footer-text" href="<?php echo $url_helper;?>">KURSE</a>

                        <ul class="ul-footer-links">
                            <li style="margin-top:10px;"><a class="footer-text"
                                    href="<?php echo $url_helper?>Kursarten/AquaBaby">AquaBaby</a>
                                <p class="small-footer-style"><small>ca. 10 Wochen - 24 Monate</small></p>
                            </li>
                            <li><a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mini">AquaKidz
                                    Mini</a>
                                <p class="small-footer-style"><small>ca. 2 bis 3 Jahre</small></p>
                            </li>
                            <li><a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Maxi">AquaKidz
                                    Maxi</a>
                                <p class="small-footer-style"><small>ca. 3,5 bis 7,5 Jahre</small></p>
                            </li>
                            <li><a class="footer-text" href="<?php echo $url_helper;?>Kursarten/AquaKidz-Mixed">AquaKidz
                                    Mixed</a>
                                <p class="small-footer-style"><small>Ab ca. 7 Jahre</small></p>
                            </li>
                        </ul>

                    </div>



                    <div class="col-md-4">

                        <a class="footer-text" href="<?php echo $url_helper;?>Ueber_uns">ÜBER UNS</a>

                        <ul class="ul-footer-links">
                            <li class="footer-right-abstand" style="margin-top:10px;"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Ueber_uns#sectionvonefk">Von Eltern für Kinder</a>
                            </li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Ueber_uns#sectionmotivation">Motivation</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Ueber_uns#sectionqualli">Unsere
                                    Qualitätsstandards</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Ueber_uns#sectionteam">Unser Team</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>AquaNews">News</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Aquasium">AquaVision</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Haftausschluss">Haftausschluss</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>Agb">AGB</a></li>
                            <li class="footer-right-abstand"><a class="footer-text"
                                    href="<?php echo $url_helper;?>impressum">impressum</a></li>
                        </ul>

                    </div>

                </div>
            </div>


        </div>

        <div class="col-sm-6 footer-white">
            <div class="row">


                <div style="" class="col-sm zentrierung-bilder-footer">

                    <ul class="ul-footer-links">

                        <li>
                            <div class="raster-aussen-footer">
                                <img style="width:130px;" class="footer-picture-sizing"
                                    src="<?php echo $url_helper;?>images/footerpic.png" alt="Bild ladet nicht!">
                            </div>
                        </li>

                        <li>
                            <div class="raster-aussen-footer">
                                <img class="footer-picture-sizing" src="<?php echo $url_helper;?>images/footerpic2.png"
                                    alt="Bild ladet nicht!">
                            </div>
                        </li>

                    </ul>

                </div>

                <div style="" class="col-sm zentrierung-bilder-footer">

                    <ul class="ul-footer-links">

                        <li>
                            <div class="raster-aussen-footer">
                                <img style="width:220px !important;" class="footer-picture-sizing"
                                    src="<?php echo $url_helper;?>images/footerpic3.png" alt="Bild ladet nicht!">
                            </div>
                        </li>

                        <li>
                            <div class="raster-aussen-footer">
                                <img style="width:200px !important;" class="footer-picture-sizing"
                                    src="<?php echo $url_helper;?>images/footerpic4.png" alt="Bild ladet nicht!">
                            </div>
                        </li>

                    </ul>

                </div>



                <div style="" class="col-sm zentrierung-bilder-footer">

                    <ul class="ul-footer-links">
                        <li>
                            <div class="raster-aussen-footer">
                                <img style="width:240px !important;" class="footer-picture-sizing"
                                    src="<?php echo $url_helper;?>images/footerpic5.png" alt="Bild ladet nicht!">
                            </div>
                        </li>

                        <li>
                            <div class="raster-aussen-footer">
                                <img style="width:200px !important;" class="footer-picture-sizing"
                                    src="<?php echo $url_helper;?>images/footerpic6.png" alt="Bild ladet nicht!">
                            </div>
                        </li>
                    </ul>

                </div>


            </div>
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
    <p class="text-pos-popup">Wir verwenden Cookies. Durch die weitere Nutzung der Webseite stimmen Sie der
        Verwendung von Cookies zu.</p>
        <div class="container">
            <div class="row" style="justify-content:center;">
            
                

            <button class="btn btn_details" id="myBtn">Details</button>
                <form method="post">
                
                    <!-- beim klicken von dem button bleibt manauf der seite und der pop up fenster verschwindet -->
                    <button
                        onClick="var d = new Date(); d = new Date(d.getTime() +1000*60*60*24*730); document.cookie = 'Akzeptiert=1; expires='+ d.toGMTString() + ';'; document.getElementById('cookie_popup').style.display = 'none';"
                        class="btn btn_ok_cookie" type="submit" name="ok_cookie_button">Akzeptieren</button>

                    <!-- beim klicken von diesem button kommt eine altert warnung die sagt ob man wirklich die cookies ablehnen will und wird dann auf die seite von session weiter geleitet -->
                    <button class="btn btn_alert_cookie" type="submit" name="session_cookie">Verweigern</button>

            </div>

            </form>
        </div>
    </div>

    





<!-- The Modal -->
<div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <!-- Das Kreuz zum schliessen -->
        

        <div class="border-boxd">

<span class="close">&times;</span>

        </div>

        <button type="button" class="collapsible-detail-footer">Geltungsbereich</button>
        <div class="content">
            <p>
                Diese Datenschutzerklärung soll die Nutzer dieser Website gemäß europäschischer
                Datenschutzgrundverordnung (DSGVO) über die Art, den Umfang und den Zweck der Erhebung und
                Verwendung
                personenbezogener Daten durch den Websitebetreiber Sebastian Prohaska informieren.
                Der Websitebetreiber nimmt Ihren Datenschutz sehr ernst und behandelt Ihre personenbezogenen Daten
                vertraulich und entsprechend der gesetzlichen Vorschriften.
                Bedenken Sie, dass die Datenübertragung im Internet grundsätzlich mit Sicherheitslücken bedacht sein
                kann. Ein vollumfänglicher Schutz vor dem Zugriff durch Fremde ist nicht realisierbar.
            </p>
        </div>

        <button type="button" class="collapsible-detail-footer">Zugriffsdaten</button>
        <div class="content">
            <p>Der Websitebetreiber bzw. Seitenprovider erhebt Daten über Zugriffe auf die Seite und speichert diese
                als „Server-Logfiles“ ab. Folgende Daten werden so protokolliert:
                <ul class="liste-detail-footer">
                    <li>Besuchte Website</li>
                    <li>Uhrzeit zum Zeitpunkt des Zugriffes</li>
                    <li>Menge der gesendeten Daten in Byte</li>
                    <li>Quelle/Verweis, von welchem Sie auf die Seite gelangten</li>
                    <li>Verwendeter Browser</li>
                    <li>Verwendetes Betriebssystem</li>
                    <li>Verwendete IP-Adresse</li> Die erhobenen Daten dienen lediglich statistischen Auswertungen
                    und zur Verbesserung der Website. Der Websitebetreiber behält sich allerdings vor, die
                    Server-Logfiles nachträglich zu überprüfen, sollten konkrete Anhaltspunkte auf eine
                    rechtswidrige Nutzung hinweisen.
                </ul>
            </p>
        </div>

        <button type="button" class="collapsible-detail-footer">Cookies</button>
        <div class="content">
            <p>
                Diese Website verwendet Cookies. Dabei handelt es sich um kleine Textdateien, welche auf Ihrem
                Endgerät gespeichert werden. Diese richten keinerlei Schaden an.
                Ihr Browser greift auf diese Dateien zu. Durch den Einsatz von Cookies erhöht sich die
                Benutzerfreundlichkeit und Sicherheit dieser Website.
                Gängige Browser bieten die Einstellungsoption, Cookies nicht zuzulassen. Hinweis: Es ist nicht
                gewährleistet, dass Sie auf alle Funktionen dieser Website ohne Einschränkungen zugreifen können,
                wenn Sie entsprechende Einstellungen vornehmen.
            </p>
        </div>

        <button type="button" class="collapsible-detail-footer">Umgang mit personenbezogenen Daten</button>
        <div class="content">

            <p>
                Der Websitebetreiber erhebt, nutzt und gibt Ihre personenbezogenen Daten nur dann weiter, wenn dies
                im
                gesetzlichen Rahmen erlaubt ist oder Sie in die Datenerhebung einwilligen.
                Als personenbezogene Daten gelten sämtliche Informationen, welche dazu dienen, Ihre Person zu
                bestimmen und welche zu
                Ihnen zurückverfolgt werden können – also beispielsweise Ihr Name, Ihre E-Mail-Adresse und
                Telefonnummer.
            </p>
        </div>

        <button type="button" class="collapsible-detail-footer">Google Analytics</button>
        <div class="content">
            <p>
                Diese Website nutzt den Dienst „Google Analytics“, welcher von der Google Inc. (1600 Amphitheatre
                Parkway Mountain View, CA 94043, USA) angeboten wird,
                zur Analyse der Websitebenutzung durch Nutzer. Der Dienst verwendet „Cookies“ – Textdateien, welche
                auf Ihrem Endgerät gespeichert werden. Die durch die Cookies gesammelten Informationen werden im
                Regelfall an einen Google-Server in den USA gesandt und dort gespeichert.

                Auf dieser Website greift die IP-Anonymisierung. Die IP-Adresse der Nutzer wird innerhalb der
                Mitgliedsstaaten der EU und des Europäischen Wirtschaftsraum gekürzt. Durch diese Kürzung entfällt
                der Personenbezug Ihrer IP-Adresse. Im Rahmen der Vereinbarung zur Auftragsdatenvereinbarung, welche
                die Websitebetreiber mit der Google Inc. geschlossen haben, erstellt diese mithilfe der gesammelten
                Informationen eine Auswertung der Websitenutzung und der Websiteaktivität und erbringt mit der
                Internetnutzung verbundene Dienstleistungen.
                Sie haben die Möglichkeit, die Speicherung des Cookies auf Ihrem Gerät zu verhindern, indem Sie in
                Ihrem Browser entsprechende Einstellungen vornehmen. Es ist nicht gewährleistet, dass Sie auf alle
                Funktionen dieser Website ohne Einschränkungen zugreifen können, wenn Ihr Browser keine Cookies
                zulässt.

                Weiterhin können Sie durch ein Browser-Plugin verhindern, dass die durch Cookies gesammelten
                Informationen (inklusive Ihrer IP-Adresse) an die Google Inc. gesendet und von der Google Inc.
                genutzt werden. Folgender Link führt Sie zu dem entsprechenden Plugin:
                https://tools.google.com/dlpage/gaoptout?hl=de

                Alternativ verhindern Sie mit einem Klick auf diesen Link (WICHTIG! Opt-Out-Link einfügen), dass
                Google Analytics innerhalb dieser Website Daten über Sie erfasst. Mit dem Klick auf obigen Link
                laden Sie ein „Opt-Out-Cookie“ herunter. Ihr Browser muss die Speicherung von Cookies also hierzu
                grundsätzlich erlauben. Löschen Sie Ihre Cookies regelmäßig, ist ein erneuter Klick auf den Link bei
                jedem Besuch dieser Website vonnöten.
                Hier finden Sie weitere Informationen zur Datennutzung durch die Google Inc.:
                https://support.google.com/analytics/answer/6004245?hl=de
            </p>
        </div>

        <button type="button" class="collapsible-detail-footer">Newsletter-Abonnement</button>
        <div class="content">
            <p>
                Der Websitebetreiber bietet Ihnen einen Newsletter an, in welchem er Sie über aktuelle Geschehnisse
                und Angebote informiert. Möchten Sie den Newsletter abonnieren,
                müssen Sie eine valide E-Mail-Adresse angeben. Diese wird lediglich für den Versand des abonnierten
                Newsletters
                verwendet und nicht an Dritte weitergereicht. Sie können das Abonnement jederzeit abbestellen.
            </p>
        </div>

        <button type="button" class="collapsible-detail-footer">Rechte des Nutzers: Auskunft, Berichtigung und
            Löschung</button>
        <div class="content">
            <p>
                Sie als Nutzer erhalten auf Antrag Ihrerseits kostenlose Auskunft darüber, welche personenbezogenen
                Daten über Sie gespeichert wurden. Sofern Ihr Wunsch nicht mit einer gesetzlichen Pflicht zur
                Aufbewahrung von
                Daten (z. B. Vorratsdatenspeicherung) kollidiert, haben Sie ein Anrecht auf Berichtigung
                falscher Daten und auf die Sperrung oder Löschung Ihrer personenbezogenen Daten.
                Diese Datenschutzerklärung wurde von ithelps - SEO Agentur und Webdesign Wien rechtmäßig kopiert.
            </p>
        </div>


    </div>
</div>














<!-- Script für Akzeptieren-->
<script>
    var r = 0;
    a = document.cookie;
    while (a != '') {
        while (a.substr(0, 1) == ' ') {
            a = a.substr(1, a.length);
        }
        cn = a.substring(0, a.indexOf('='));
        if (a.indexOf(';') != -1) {
            cw = a.substring(a.indexOf('=') + 1, a.indexOf(';'));

        } else {
            cw = a.substr(a.indexOf('=') + 1, a.length);
        }
        if (cn == 'Akzeptiert') {
            r = cw;
        }
        i = a.indexOf(';') + 1;
        if (i == 0) {
            i = a.length
        }
        a = a.substring(i, a.length);
    }
    if (r == '1') document.getElementById('cookie_popup').style.display = 'none';

    //Cookie popup Script End 
</script>


<!--Detais script beginn-->
<script>
    // Get the modal
    var modal = document.getElementById("myModal");

    // Get the button that opens the modal
    var btn = document.getElementById("myBtn");

    // Get the <span> element that closes the modal
    var span = document.getElementsByClassName("close")[0];

    // When the user clicks the button, open the modal 
    btn.onclick = function () {
        modal.style.display = "block";
    }

    // When the user clicks on <span> (x), close the modal
    span.onclick = function () {
        modal.style.display = "none";
    }

    // When the user clicks anywhere outside of the modal, close it
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
</script>
<!--Detais script ende-->


<script>
    var coll = document.getElementsByClassName("collapsible-detail-footer");
    var i;

    for (i = 0; i < coll.length; i++) {
        coll[i].addEventListener("click", function () {
            this.classList.toggle("active");
            var content = this.nextElementSibling;
            if (content.style.display === "block") {
                content.style.display = "none";
            } else {
                content.style.display = "block";
            }
        });
    }
</script>



<!--wenn der Verweigern button gedrückt wird -->
<?php

if (isset($_POST['session_cookie'])){
    echo ' <script> window.location="index_session";</script>';
   exit();
}

?>


</body>

</html>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://kit.fontawesome.com/8d9d572486.js" crossorigin="anonymous"></script>