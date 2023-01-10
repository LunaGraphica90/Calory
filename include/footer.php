    <footer>
        <div class="content-footer">
            <div class="corner footer"></div>
<?php
// Pensons au futur... :) 
?>
            <p>Copyright&copy;<?php if(date('Y') == "2023") echo date('Y'); else echo "2023-".date('Y'); ?> Calory - Tous droits réservés</p>
            <ul>
                <li><a href="mentions-legales.html" >Mentions légales</a></li>
                <li><a href="https://luna-graphica.fr/" target="_blank">Design/intégration : Luna Graphica</a></li>
                <li><a href="https://e-concept-applications.fr/" target="_blank">Technique/Hébergement : E-Concept Applications</a></li>
            </ul>
        </div>
    </footer>
    

<?php
// Plus d'attribut "type" sur les balises <script>
?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/activeLink.js"></script>
    <script src="js/stopfixNavigation.js"></script>
    <!-- GotoTop Button-->
    <script src="js/gototop.js"></script>
    <!-- Collaped NavBar-->
    <script src="js/collapedNav.js"></script>
    
    
    <script src="/tarteaucitron/tarteaucitron.js"></script>

    <script type="text/javascript">
    tarteaucitron.init({
	  "privacyUrl": "", /* Privacy policy url */
      "bodyPosition": "bottom", /* or top to bring it as first element for accessibility */

	  "hashtag": "#tarteaucitron", /* Open the panel with this hashtag */
	  "cookieName": "tarteaucitron", /* Cookie name */

	  "orientation": "middle", /* Banner position (top - bottom) */
   
      "groupServices": false, /* Group services by category */
      "serviceDefaultState": "wait", /* Default state (true - wait - false) */
                       
	  "showAlertSmall": false, /* Show the small banner on bottom right */
	  "cookieslist": false, /* Show the cookie list */
                       
      "closePopup": false, /* Show a close X on the banner */

      "showIcon": true, /* Show cookie icon to manage cookies */
      //"iconSrc": "", /* Optionnal: URL or base64 encoded image */
      "iconPosition": "BottomRight", /* BottomRight, BottomLeft, TopRight and TopLeft */

	  "adblocker": false, /* Show a Warning if an adblocker is detected */
                       
      "DenyAllCta" : true, /* Show the deny all button */
      "AcceptAllCta" : true, /* Show the accept all button when highPrivacy on */
      "highPrivacy": true, /* HIGHLY RECOMMANDED Disable auto consent */
                       
	  "handleBrowserDNTRequest": false, /* If Do Not Track == 1, disallow all */

	  "removeCredit": true, /* Remove credit link */
	  "moreInfoLink": true, /* Show more info link */

      "useExternalCss": false, /* If false, the tarteaucitron.css file will be loaded */
      "useExternalJs": false, /* If false, the tarteaucitron.js file will be loaded */

	  //"cookieDomain": ".my-multisite-domaine.fr", /* Shared cookie for multisite */
                      
      "readmoreLink": "", /* Change the default readmore link */

      "mandatory": true, /* Show a message about mandatory cookies */
      "mandatoryCta": true /* Show the disabled accept button when mandatory on */
    });
    </script>
</body>
</html>