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



        <section id="about" class="mentionslegales">
            <div class="content-about">
                <h2>Mentions légales</h2>
                
                    Merci de lire avec attention les différentes modalités d’utilisation du présent site avant d’y parcourir ses pages. En vous connectant sur ce site, vous acceptez, sans réserves, les présentes modalités.<br>
                    <br>
                    Aussi, conformément à l’article n°6 de la Loi n°2004-575 du 21 Juin 2004 pour la confiance dans l’économie numérique, les responsables du présent site internet <?=$urlCourteLienSiteWeb?> sont :<br>
                    <br>
                    <strong>Éditeur du Site :</strong><br>
                    <?=$nomLegalSociete?><?php if($nomUsuelSociete != "") { echo ", " . $nomUsuelSociete; } ?> - Numéro de SIRET : <?=$siret?><br>
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
                    La société <?=$nomUsuelSociete?> met en œuvre tous les moyens dont elle dispose, pour assurer une information fiable et une mise à jour fiable de ses sites internet.<br>
                    <br>
                    Toutefois, des erreurs ou omissions peuvent survenir. L’internaute devra donc s’assurer de l’exactitude des informations auprès de <?=$nomUsuelSociete?>, et signaler toutes modifications du site qu’il jugerait utile. <?=$nomUsuelSociete?> n’est en aucun cas responsable de l’utilisation faite de ces informations, et de tout préjudice direct ou indirect pouvant en découler.<br>
                    <br>
                    <strong>Cookies :</strong> Le site <?=$urlCourteLienSiteWeb?> peut-être amené à vous demander l’acceptation des cookies pour des besoins de statistiques et d’affichage. Un cookie est une information déposée sur votre disque dur par le serveur du site que vous visitez.<br>
                    <br>
                    Il contient plusieurs données qui sont stockées sur votre ordinateur dans un simple fichier texte auquel un serveur accède pour lire et enregistrer des informations . Certaines parties de ce site ne peuvent être fonctionnelles sans l’acceptation de cookies.<br>
                    <br>
                    L'internaute dispose d'une interface de gestion des cookies du site internet en cliquant sur l'icône <img alt="cookies" id="cookiesml" src="data:image/png;base64,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"> en bas à droite du site internet.<br>
                    <br>
                    <strong>Liens hypertextes :</strong> Les sites internet peuvent offrir des liens vers d’autres sites internet ou d’autres ressources disponibles sur Internet. <?=$nomUsuelSociete?> ne dispose d’aucun moyen pour contrôler les sites en connexion avec ces sites internet.<br>
                    <br>
                    <?=$nomUsuelSociete?> ne répond pas de la disponibilité de tels sites et sources externes, ni ne la garantit. Elle ne peut être tenue pour responsable de tout dommage, de quelque nature que ce soit, résultant du contenu de ces sites ou sources externes, et notamment des informations, produits ou services qu’ils proposent, ou de tout usage qui peut être fait de ces éléments. Les risques liés à cette utilisation incombent pleinement à l’internaute, qui doit se conformer à leurs conditions d’utilisation.<br>
                    <br>
                    Les utilisateurs, les abonnés et les visiteurs des sites internet  ne peuvent pas mettre en place un hyperlien en direction de ce site sans l’autorisation expresse et préalable de <?=$nomUsuelSociete?>.<br>
                    <br>
                    Dans l’hypothèse où un utilisateur ou visiteur souhaiterait mettre en place un hyperlien en direction d’un des sites internet de <?=$nomUsuelSociete?>, il lui appartiendra d’adresser un email accessible sur le site afin de formuler sa demande de mise en place d’un hyperlien.<br>
                    <br>
                    La société <?=$nomUsuelSociete?> se réserve le droit d’accepter ou de refuser un hyperlien sans avoir à en justifier sa décision.<br>
                    <br>
                    <strong>Services fournis :</strong><br>
                    <br>
                    L’ensemble des activités de la société ainsi que ses informations sont présentés sur notre site <?=$urlCourteLienSiteWeb?>.<br>
                    <br>
                    <?=$nomUsuelSociete?> s’efforce de fournir sur le site <?=$urlCourteLienSiteWeb?> des informations aussi précises que possible. Les renseignements figurant sur le site <?=$urlCourteLienSiteWeb?> ne sont pas exhaustifs et les photos non contractuelles.<br>
                    <br>
                    Ils sont donnés sous réserve de modifications ayant été apportées depuis leur mise en ligne. Par ailleurs, tous les informations indiquées sur le site <?=$urlCourteLienSiteWeb?> sont données à titre indicatif, et sont susceptibles de changer ou d’évoluer sans préavis.<br>
                    <br>
                    <strong>Limitation contractuelles sur les données :</strong><br>
                    <br>
                    Les informations contenues sur ce site sont aussi précises que possible et le site remis à jour à différentes périodes de l’année, mais peut toutefois contenir des inexactitudes ou des omissions.<br>
                    <br>
                    Si vous constatez une lacune, erreur ou ce qui parait être un dysfonctionnement, merci de bien vouloir le signaler par courriel <a href="/#contact">via le formulaire de contact du site</a>, en décrivant le problème de la manière la plus précise possible (page posant problème, type d’ordinateur et de navigateur utilisé, …).<br>
                    <br>
                    Tout contenu téléchargé se fait aux risques et périls de l’utilisateur et sous sa seule responsabilité. En conséquence, ne saurait être tenu responsable d’un quelconque dommage subi par l’ordinateur de l’utilisateur ou d’une quelconque perte de données consécutives au téléchargement.<br>
                    <br>
                    De plus, l’utilisateur du site s’engage à accéder au site en utilisant un matériel récent, ne contenant pas de virus et avec un navigateur de dernière génération mis à jour.<br>
                    <br>
                    Les liens hypertextes mis en place dans le cadre du présent site internet en direction d’autres ressources présentes sur le réseau Internet ne sauraient engager la responsabilité de <?=$nomUsuelSociete?>.<br>
                    <br>
                    <strong>Propriété intellectuelle :</strong><br>
                    <br>
                    Tout le contenu du présent site <?=$urlCourteLienSiteWeb?>, incluant, de façon non limitative, les graphismes, images, textes, vidéos, animations, sons, logos, gifs et icônes ainsi que leur mise en forme sont la propriété exclusive de la société à l’exception des marques, logos ou contenus appartenant à d’autres sociétés partenaires ou auteurs.<br>
                    <br>
                    Toute reproduction, distribution, modification, adaptation, retransmission ou publication, même partielle, de ces différents éléments est strictement interdite sans l’accord express par écrit de <?=$nomUsuelSociete?>. Cette représentation ou reproduction, par quelque procédé que ce soit, constitue une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle. Le non-respect de cette interdiction constitue une contrefaçon pouvant engager la responsabilité civile et pénale du contrefacteur. En outre, les propriétaires des Contenus copiés pourraient intenter une action en justice à votre encontre.<br>
                    <br>
                    <strong>Litiges :</strong><br>
                    <br>
                    Les présentes conditions du site <?=$urlCourteLienSiteWeb?> sont régies par les lois françaises et toute contestation ou litiges qui pourraient naître de l’interprétation ou de l’exécution de celles-ci seront de la compétence exclusive des tribunaux dont dépend le siège social de la société. La langue de référence pour le règlement de contentieux éventuels est le français.<br>
                    <br>
                    <strong>Données personnelles :</strong><br>
                    <br>
                    De manière générale, vous n’êtes pas tenu de nous communiquer vos données personnelles lorsque vous visitez notre site Internet <?=$urlCourteLienSiteWeb?>.<br>
                    <br>
                    Cependant, ce principe comporte certaines exceptions. En effet, pour certains services proposés par notre site, vous pouvez être amenés à nous communiquer certaines données telles que : votre nom, le nom de votre société, votre adresse électronique, et votre numéro de téléphone. Tel est le cas lorsque vous remplissez le formulaire qui vous est proposé en ligne, dans la rubrique <a href="/#contact">« contact »</a>.<br>
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