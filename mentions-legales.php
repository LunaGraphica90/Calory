<?php

/******************************************/
/* Calory - Soulé Madjid - Site web - v1  */
/* Copyright 2022-2023                    */
/* Luna Graphica & E-Concept Applications */
/******************************************/


// On inclut le fichier de fonctions et le header
require_once("include/functions.php");

require_once("include/header.php");


// Configuration mentions légales :
$nomLegalSociete = "MADJID SOULE";
$responsableLegal = "MADJID Soulé";
$adresseSociete = "35 Rue de Bavilliers, 90000 BELFORT";
$telSociete = "07 69 15 42 96";
$mailSociete = "projet@calory.fr";
$siren = "808 089 353";
$siret = "808 089 353 00029";
$tvaintracom = "FR33808089353";
$nomUsuelSociete = "Calory";
$urlSiteWeb = "https://" . $_SERVER["HTTP_HOST"];
$urlLienSiteWeb = "<a href=\"https://" . $_SERVER["HTTP_HOST"] . "\" target=\"_blank\">https://" . $_SERVER["HTTP_HOST"] . "</a>";
$urlCourteSiteWeb = $_SERVER["HTTP_HOST"];
$urlCourteLienSiteWeb = "<a href=\"https://" . $_SERVER["HTTP_HOST"] . "\" target=\"_blank\">" . $_SERVER["HTTP_HOST"] . "</a>";

$hebergeur = "E-Concept Applications";
$hebergeurAdresse = "16 Rue de Bavilliers, 90000 BELFORT";
$hebergeurSite = "<a href=\"https://e-concept-applications.fr\" target=\"_blank\">https://e-concept-applications.fr</a>";

$graphiste = "Luna Graphica";
$graphisteAdresse = "";
$graphisteSite = "<a href=\"https://luna-graphica.fr/\" target=\"_blank\">https://luna-graphica.fr/</a>";


?>



        <section id="about">
            <div class="content-about">
                <h2>Mentions légales</h2>
                
                    Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez, sans réserves, les présentes modalités.<br>
                    <br>
                    Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <?=$urlCourteLienSiteWeb?> sont :<br>
                    <br>
                    <strong>Éditeur du Site :</strong><br>
                    <?=$nomLegalSociete?> - Numéro de SIRET : <?=$siret?><br>
                    <br>
                    Responsable éditorial : <?=$responsableLegal?><br>
                    <?=$adresseSociete?><br>
                    Téléphone : <?=encode_mail($mailSociete)?><br>
                    Email : <?=$telSociete?><br>
                    Site Web : <?=$urlCourteLienSiteWeb?><br>
                    <br>
                    <strong>Hébergement :</strong><br>
                    <?=$hebergeur?><br>
                    Adresse : <?=$hebergeurAdresse?><br>
                    Site Web : <?=$hebergeurSite?><br>
                    <br>
                    <strong>Développement :</strong><br>
                    <?=$hebergeur?><br>
                    Adresse : <?=$hebergeurAdresse?><br>
                    Site Web : <?=$hebergeurSite?><br>
                    <br>
                    <strong>Charte graphique :</strong><br>
                    <?=$hebergeur?><br>
                    Site Web : <?=$hebergeurSite?><br>
                    <br>
                    <strong>Conditions d’utilisation :</strong><br>
                    <br>
                    Ce site (<?=$urlCourteLienSiteWeb?>) est proposé en différents langages web (HTML, HTML5, Javascript, CSS, etc…) pour un meilleur confort d’utilisation et un graphisme plus agréable.<br>
                    <br>
                    Nous vous recommandons de recourir à des navigateurs modernes comme Internet explorer, Safari, Firefox, Google Chrome, etc…<br>
                    <br>
                    L’agence web AntheDesign met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet.<br>
                    <br>
                    Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de AntheDesign , et signaler toutes modifications du site qu’il jugerait utile. AntheDesign n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.<br>
                    <br>
                    Cookies : Le site <?=$urlCourteLienSiteWeb?> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez.<br>
                    <br>
                    Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.<br>
                    <br>
                    Liens hypertextes : Les sites internet de peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. SARL ANTHEDESIGN ne dispose d’aucun moyen pour contrôler les sites en connexion avec ses sites internet.<br>
                    <br>
                    AntheDesign ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.<br>
                    <br>
                    Les utilisateurs, les abonnés et les visiteurs des sites internet  ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de SARL ANTHEDESIGN.<br>
                    <br>
                    Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de SARL ANTHEDESIGN, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien.<br>
                    <br>
                    La SARL ANTHEDESIGN se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.<br>
                    <br>
                    Services fournis :<br>
                    <br>
                    L’ensemble des activités de la société ainsi que ses informations sont présentés sur notre site <?=$urlCourteLienSiteWeb?>.<br>
                    <br>
                    SARL ANTHEDESIGN s’efforce de fournir sur le site <?=$urlCourteLienSiteWeb?> des informations aussi précises que possible. Les renseignements figurant sur le site <?=$urlCourteLienSiteWeb?> ne sont pas exhaustifs et les photos non contractuelles.<br>
                    <br>
                    Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site <?=$urlCourteLienSiteWeb?> sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.<br>
                    <br>
                    Limitation contractuelles sur les données :<br>
                    <br>
                    Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions.<br>
                    <br>
                    Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par courriel, à l’adresse contact@anthedesign.fr, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).<br>
                    <br>
                    Tout contenu téléchargé se fait aux risques et périls de l’utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d’un quelconque dommage subi par l’ordinateur de l’utilisateur ou d’une quelconque perte de données consécutives au téléchargement.<br>
                    <br>
                    De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis-à-jour.<br>
                    <br>
                    Les liens hypertextes mis en place dans le cadre du présent site internet en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de SARL ANTHEDESIGN.<br>
                    <br>
                    Propriété intellectuelle :<br>
                    <br>
                    Tout le contenu du présent site <?=$urlCourteLienSiteWeb?>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.<br>
                    <br>
                    Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord exprès par écrit de SARL ANTHEDESIGN. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.<br>
                    <br>
                    Déclaration à la CNIL :<br>
                    <br>
                    Conformément à la loi 78-17 du 6 janvier 1978 (modifiée par la loi 2004-801 du 6 août 2004 relative à la protection des personnes physiques à l’égard des traitements de données à caractère personnel) relative à l’informatique, aux fichiers et aux libertés, ce site a fait l’objet d’une déclaration 1656629 auprès de la Commission nationale de l’informatique et des libertés (www.cnil.fr).<br>
                    <br>
                    Litiges :<br>
                    <br>
                    Les présentes conditions du site <?=$urlCourteLienSiteWeb?> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence, pour le règlement de contentieux éventuels, est le français.<br>
                    <br>
                    Données personnelles :<br>
                    <br>
                    De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <?=$urlCourteLienSiteWeb?>.<br>
                    <br>
                    Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, votre fonction, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique « contact ».<br>
                    <br>
                    Dans tous les cas, vous pouvez refuser de fournir vos données personnelles. Dans ce cas, vous ne pourrez pas utiliser les services du site, notamment celui de solliciter des renseignements sur notre société, ou de recevoir les lettres d’information.<br>
                    <br>
                    Enfin, nous pouvons collecter de manière automatique certaines informations vous concernant lors d’une simple navigation sur notre site internet, notamment : des informations concernant l’utilisation de notre site, comme les zones que vous visitez et les services auxquels vous accédez, votre adresse IP, le type de votre navigateur, vos temps d’accès.<br>
                    <br>
                    De telles informations sont utilisées exclusivement à des fins de statistiques internes, de manière à améliorer la qualité des services qui vous sont proposés. Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.<br>
            </div>
        </section>




<?php





require_once("include/footer.php");

?>