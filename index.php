<?php

/******************************************/
/* Calory - Soulé Madjid - Site web - v1  */
/* Copyright 2022-2023                    */
/* Luna Graphica & E-Concept Applications */
/******************************************/

session_start();

// Mail destination formulaire
$mail_destinataire = "contact@e-concept-applications.fr";


// On inclut le fichier de fonctions et le header
require_once("include/functions.php");

require_once("include/header.php");


// Tableau des sujets de mails :
$sujets = array(1 => "Réalisation de plans",
                2 => "Dimensionnement",
                3 => "Études générales",
                4 => "Conception SDB",
                5 => "Besoin de précisions",
                6 => "Autre demande"
                );


// On regarde s'il faut envoyer un mail ou non...

if(isset($_POST["action"]) and $_POST["action"] == "envoi-mail") {

    // On filtre le contenu des variables entrantes du $_POST...
    $prenom = filter_input(INPUT_POST, 'prenom', FILTER_SANITIZE_SPECIAL_CHARS);
    $nom = filter_input(INPUT_POST, 'nom', FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, 'mail', FILTER_SANITIZE_SPECIAL_CHARS);
    $societe = filter_input(INPUT_POST, 'societe', FILTER_SANITIZE_SPECIAL_CHARS);
    $prenom2 = filter_input(INPUT_POST, 'firstname', FILTER_SANITIZE_SPECIAL_CHARS);
    $nom2 = filter_input(INPUT_POST, 'lastname', FILTER_SANITIZE_SPECIAL_CHARS);
    $email2 = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_SPECIAL_CHARS);
    $societe2 = filter_input(INPUT_POST, 'company', FILTER_SANITIZE_SPECIAL_CHARS);
    $message = filter_input(INPUT_POST, 'message', FILTER_SANITIZE_SPECIAL_CHARS);
    $tel = filter_input(INPUT_POST, 'phone', FILTER_SANITIZE_SPECIAL_CHARS);
    $id_sujet = (int)filter_input(INPUT_POST, 'subject', FILTER_SANITIZE_SPECIAL_CHARS);
    ${$_SESSION["champ_antispam"]} = filter_input(INPUT_POST, $_SESSION["champ_antispam"], FILTER_SANITIZE_SPECIAL_CHARS);

    // Filtre antispam : On vérifie si le résultat du calcul est bon.
    if(${$_SESSION["champ_antispam"]} == $_SESSION["antispam"]) {
        // On jarte les mails en .ru...
        if(substr($email, -3) != ".ru") {
            // Si nom, prenom, societe et email sont remplis ou non... Si oui, on kill (2nd contrôle antispam)
            if($prenom == "" and $nom == "" and $email == "" and $societe == "") {
                // On vérifie que les champs requis sont bien renseignés...
                if($nom2 != "" and $email2 != "" and $message != "" and $id_sujet != "") {
                    // Objet du mail...
                    $objet = $prenom2." ".$nom2." a envoyé un email depuis le site " . $_SERVER["HTTP_HOST"];
                    
                    // Contenu du mail...
                    $data = "Nom : ".$nom2." ".$prenom2."\n";
                    if($societe2 != "") {
                        $data .= "Société : ".$societe2."\n";
                    }
                    $data .= "Adresse email : ".$email2."\n";
                    if($tel != "") {
                        $data .= "Téléphone : ".$tel."\n";
                    }
                    $data .= "Objet : ".$sujets[$id_sujet]."\n";
                    $data .= "\n\nMessage :\n".$message."\n\n";
        
                    // Traitement des special char de saut de ligne suite à l'encodage effectué par le filtrage des variables au début...
                    // \r\n
                    $data = str_replace("&#13;&#10;", "\n", $data);
                    // \n
                    $data = str_replace("&#10;", "\n", $data);
                    // \r
                    $data = str_replace("&#13;", "\n", $data);
        
                    // Si le mail part...        
                    if(mail($mail_destinataire, $objet, $data, "Content-type: text/plain; charset=utf-8\nFrom: ".$email2."")) {
                        // On détruit le contenu du formulaire dans la session...
                        if(isset($_SESSION["formulaire"])) {
                            unset($_SESSION["formulaire"]);
                        }
                        // Et on remet le message de confirmation.
                        $_SESSION["formulaire"]["remarque"] = "Votre message a bien été envoyé.";
                    } else {
                        // Sinon, on garde le formulaire, avec un message d'erreur.
                        unset($_SESSION["formulaire"]["remarque"]);
                        $_SESSION["formulaire"]["erreur"] = "Votre message n'a PAS été envoyé.";
                    }
                } else {
                    // S'il manque des variables, on recharge le formulaire et on affiche un message...
                    $_SESSION["formulaire"]["nom"] = $nom2;
                    $_SESSION["formulaire"]["prenom"] = $prenom2;
                    $_SESSION["formulaire"]["email"] = $email2;
                    $_SESSION["formulaire"]["tel"] = $tel;
                    $_SESSION["formulaire"]["societe"] = $societe2;
                    $_SESSION["formulaire"]["sujet"] = $id_sujet;
                    $_SESSION["formulaire"]["message"] = stripslashes($message);
                    unset($_SESSION["formulaire"]["remarque"]);
                    $_SESSION["formulaire"]["erreur"] = "Merci de remplir au moins votre nom, votre mail, un sujet et un message.";
                }
            } else {
                // Spam, on kill direct.
                header("HTTP/1.1 500 Internal Server Error");
                exit("<h1>500 Internal Server Error</h1>");
            }
        } else {
            // Spam, on kill direct.
            header("HTTP/1.1 500 Internal Server Error");
            exit("<h1>500 Internal Server Error</h1>");
        }
    
        //
    } else {
        // Calcul antispam incorrect, on remet le formulaire avec un message.
        $_SESSION["formulaire"]["nom"] = $nom2;
        $_SESSION["formulaire"]["prenom"] = $prenom2;
        $_SESSION["formulaire"]["email"] = $email2;
        $_SESSION["formulaire"]["tel"] = $tel;
        $_SESSION["formulaire"]["societe"] = $societe2;
        $_SESSION["formulaire"]["sujet"] = $id_sujet;
        $_SESSION["formulaire"]["message"] = stripslashes($message);
        unset($_SESSION["formulaire"]["remarque"]);
        $_SESSION["formulaire"]["erreur"] = "Contrôle anti-spam incorrect !<br>Merci d'inscrire le résultat du calcul en chiffres.";
    }
} else {
    unset($_SESSION);
}


/***********************************/
/* Génération du contrôle antispam */
/***********************************/

// On génère un tableau de correspondance nombres numériques/nombres texte
$numbers = array(1=>"un", 2=>"deux", 3=>"trois", 4=>"quatre", 5=>"cinq", 6=>"six",
    7=>"sept", 8=>"huit", 9=>"neuf", 10=>"dix", 11=>"onze", 12=>"douze",
    13=>"treize", 14=>"quatorze", 15=>"quinze");
$operators = array("+"=>"plus", "-"=>"moins");

// On génère des nombres aléatoires...
srand((double)microtime()*1000000);
$number1 = rand(1, 15);
$number2 = rand(1, 15);
// Et un opérateur aléatoire.
$operator = rand(1, 2);
if($operator == 1) {
    $operator = "+";
} else {
    // Si soustraction, on met le plus grand nombre en premier.
    $operator = "-";
    if($number1 < $number2) {
        $tmp = $number2;
        $number2 = $number1;
        $number1 = $tmp;
    }
}
// On mémorise l'opération en numérique.
$operation = $number1." ".$operator." ".$number2;
// Pour chaque opérande et opérateur, on choisit en aléatoire si on l'affiche en numérique ou en toutes lettres
if(rand(1,2) == 1) {
    $operation_libelle = $number1;
} else {
    $operation_libelle = $numbers[$number1];
}
if(rand(1,2) == 1) {
    $operation_libelle .= " ".$operator." ";
} else {
    $operation_libelle .= " ".$operators[$operator]." ";
}
if(rand(1,2) == 1) {
    $operation_libelle .= $number2;
} else {
    $operation_libelle .= $numbers[$number2];
}

// On effectue le calcul pour enregistrer le résultat...
eval("\$_SESSION[\"antispam\"] = ".$operation.";");
// On définit le nom du champ antispam...
$_SESSION["champ_antispam"] = "antispam".((int)microtime()*1000000);


?>

        <section id="home">
            <div id="pictos">
                <img class="pictos" src="images/clim.png" alt="Climatisation">
                <img class="pictos" src="images/chauff.png" alt="Chauffage">
                <img class="pictos" src="images/plomb.png" alt="Plomberie">
                <img class="pictos" src="images/vent.png" alt="Ventilation">
            </div>

            <div class="home-content mt-5">
                <div class="cadre one"></div>
                <div class="mask-text col-lg-4 col-md-12">
                    <h1>La maîtrise <span><br>des fluides <br>et de l'énergie</span></h1>
                </div>
                <div class="cadre two"></div>
                <div class="mask-image col-lg-8 col-md-12">
                    <?php
                    // Avec un alt, c'est mieux... ^^
                    ?>
                    <img alt="" class="home-image img-fluid" src="images/ImageAccueil2_NB.jpg">
                </div>
            </div>
        </section>
        <section id="about">
            <div class="content-about">
                <h2>À propos</h2>
                <p>Dans le cadre d'une construction neuve ou d'une rénovation, il est indispensable d'avoir des documents de travail clairs et précis pour communiquer entre les différents acteurs du projet (Maîtrise d'ouvrage, Maîtrise d'œuvre, Entreprises…), pour protéger les intérêts de toutes les parties, et également pour que les compagnons puissent avoir toutes les billes à la bonne réalisation des travaux.</p>
                <p>Après plusieurs années en entreprise, je suis arrivé à la conclusion que l'importance des études des projets est trop souvent minimisée, alors qu'elles sont la clé de voûte de ceux-ci pour leur parfaite exécution.</p>
                <p>Plans de réseaux, plans de réservations, notes de calculs, schémas de principe, détails et élévations, sélection du matériel… <strong>Je peux vous apporter mon analyse et mon expertise, afin de vous décharger de la partie études de vos projets de plomberie, chauffage, ventilation et climatisation</strong>, au travers de l'ensemble des documents qui vous seront nécessaires de la préparation à l'achèvement.</p>
            </div>
        </section>
        <section id="services">
            <div class="content-services">
                <h2>Les services</h2>
                <h3><iconify-icon inline icon="line-md:upload-loop" rotate="90deg" flip="horizontal"></iconify-icon> Professionnels</h3>
                <p>Je prends connaissance de la totalité des pièces que vous me fournissez qui délimitent votre projet. Ensuite, nous définissons ensemble <strong>vos besoins à partir de vos attentes et de vos objectifs</strong>. Pour finir, nous fixons la liste des documents attendus et je vous accompagne de la préparation du projet jusqu'au rendu final.</p>

                <div class="services-cards">
                    <div class="card" >
                        <img class="card-img-top" src="images/ImageServices2.jpg" alt="Phase préparatoire">
                        <div class="card-body">
                            <h5 class="card-title">Phase préparatoire</h5>
                            <ul>
                                <li>Sélection des terminaux</li>
                                <li>Sélection de la robinetterie</li>
                                <li>Diffusion de fiches produits</li>
                                <li>Dimensionnement des réseaux hydrauliques et aérauliques</li>
                                <li>Calculs des déperditions et des apports</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card">
                        <img class="card-img-top" src="images/ImageServices1.jpg" alt="Phase d'exécution">
                        <div class="card-body">
                            <h5 class="card-title">Phase d'exécution</h5>
                            <ul>
                                <li>Schémas de principe hydraulique et/ou aéraulique</li>
                                <li>Synoptiques des colonnes (plomberie, chauffage, ventilation)</li>
                                <li>Plans de réseaux</li>
                                <li>Plans de réservations</li>
                                <li>Schémas et détails de locaux techniques</li>
                                <li>Synthèse avec les autres corps d'état</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-services">
                <h3><iconify-icon inline icon="line-md:upload-loop" rotate="90deg" flip="horizontal"></iconify-icon> Particuliers</h3>
                <blockquote>
                    <p><iconify-icon inline icon="material-symbols:check-small-rounded"></iconify-icon> Vous désirez concevoir ou rénover une salle de bains ou tout autre pièce d'eau, et <strong>vous souhaiteriez un accompagnement</strong> pour passer de l'idée à la réalité.<br>
                    <iconify-icon inline icon="material-symbols:check-small-rounded"></iconify-icon> Vous voulez installer une ventilation chez vous, ou revoir votre système de chauffage, et <strong>vous aimeriez être aiguillé</strong> sur la façon de procéder.<br>
                    <iconify-icon inline icon="material-symbols:check-small-rounded"></iconify-icon> Vous construisez, et <strong>vous avez besoin d'un regard extérieur</strong> sur vos plans fluides et les documents en votre possession avant la réalisation des travaux.</p>
                </blockquote>

                <h4>Quelque soit la nature de votre demande, voici le déroulé :</h4>
                
                <div class="services-cards part">
                <div class="col-lg-4">
                    <div class="card particular">
                            <img class="card-img-top" src="images/servpart1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <?php
                                // Un espace insécable &nbsp; à gauche et à droite de l'icône pour que le validateur ne considère pas le <h5> comme vide.
                                ?>
                                <h5 class="card-title">&nbsp;<iconify-icon icon="tabler:square-rounded-number-1"></iconify-icon>&nbsp;</h5>
                                <p>Après avoir pris contact avec moi, nous fixons un premier rendez-vous en distanciel, durant lequel je suis à <strong>votre entière écoute</strong>. C'est à ce moment que nous mettons en lumière <strong>vos attentes</strong>.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                        <div class="card particular">
                            <img class="card-img-top" src="images/servpart2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">&nbsp;<iconify-icon icon="tabler:square-rounded-number-2"></iconify-icon>&nbsp;</h5>
                                <p>Si le besoin est, nous convenons d'un rendez-vous sur site, pour appréhender davantage les volumes et les contraintes éventuelles à l'élaboration de <strong>votre projet</strong>, et de <strong>votre cahier des charges</strong>.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                        <div class="card particular">
                            <img class="card-img-top" src="images/servpart3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">&nbsp;<iconify-icon icon="tabler:square-rounded-number-3"></iconify-icon>&nbsp;</h5>
                                <p>Enfin, nous établissons un plan d'action pour atteindre <strong>vos objectifs</strong>. Pendant l'accompagnement, vous êtes et restez le maître à bord, <strong>nous avançons à votre rythme</strong> et après validation de chacune des étapes que nous aurons défini ensemble, <strong>jusqu'à l'aboutissement de votre projet.</strong></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="contact" class="contact">
            <div class="col-xl-8">
                <div class="contact-row">
                    <div class="col-lg-5 text-contact">
                        <h2>Contact</h2>
                        <p class="bolder">Vous voulez des précisions sur les prestations ? <br>Vous souhaitez discuter de votre projet ?</p>
                        <?php
                        // </br> n'existe pas ^^ C'est <br> ou <br /> ;) 
                        ?>
                        <p>N'hésitez pas à prendre contact en remplissant le formulaire ci-contre, par téléphone ou par mail<br><?php //(disponible du lundi au jeudi de 09h à 12h et de 14h à 18h)
                        ?></p>
                        <p class="text-uppercase">Calory : </p>
                        <p class="city ms-3">Belfort (90)</p>
                        <p class="phone ms-3"><a href="tel:+33769154296">07 69 15 42 96</a></p>
                        <p class="mail ms-3"><?=encode_mail("projet@calory.fr")?></p>
                    </div>
                    <div class="col-lg-7 form-contact">
                        <div id="formulaire" class="p-4">
                            <form class="row" method="post" action="/#contact">
                                <?php
                                // Si on a une remarque à afficher, on ajoute une div en conséquence...
                                if(isset($_SESSION["formulaire"]["remarque"])) {
                                ?>
                                    <div class="col-12 mt-3 alert alert-success">
                                        <?=$_SESSION["formulaire"]["remarque"]?>
                                    </div>
                                <?php
                                }

                                // Si on a une erreur à afficher, on ajoute une div en conséquence...
                                if(isset($_SESSION["formulaire"]["erreur"])) {
                                ?>
                                    <div class="col-12 mt-3 alert alert-danger">
                                        <?=$_SESSION["formulaire"]["erreur"]?>
                                    </div>
                                <?php                                                                
                                } 

                                // Le code HTML qui suit est masqué (par la classe col-0) et sert au contrôle antispam (les cases DOIVENT rester vides)
                                ?>
                                <div class="col-0">
                                    <label for="nom" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="nom" name="nom" value="" placeholder="Antispam - Ne pas remplir cette case">
                                </div>
                                <div class="col-0">
                                    <label for="prenom" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="prenom" name="prenom" value="" placeholder="Antispam - Ne pas remplir cette case">
                                </div>
                                <div class="col-0">
                                    <label for="societe" class="form-label">Société</label>
                                    <input type="text" class="form-control" id="societe" name="societe" value="" placeholder="Antispam - Ne pas remplir cette case">
                                </div>
                                <div class="col-0">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="" placeholder="Antispam - Ne pas remplir cette case">
                                </div>

                                <?php
                                // On reprend le code normal.

                                // !!! Les attributs for doivent correspondre aux id, pas aux name ! ;) 
                                ?>
                                <div class="col-6">
                                    <label for="inputlastname" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="inputlastname" name="lastname" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["nom"];?>" required>
                                </div>
                                <div class="col-6">
                                    <label for="inputfirstname" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="inputfirstname" name="firstname" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["prenom"];?>">
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="inputcompany" class="form-label">Entreprise</label>
                                    <input type="text" class="form-control" id="inputcompany" name="company" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["societe"];?>">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="inputphone" class="form-label">Téléphone</label>
                                    <?php
                                    // type="tel" ==> Clavier adapté sur smartphone ;) 
                                    ?>
                                    <input type="tel" class="form-control" id="inputphone" name="phone" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["tel"];?>">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="inputemail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputemail" name="email" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["email"];?>" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <select class="form-select" aria-label="Default select example" id="subject" name="subject" required>
                                        <?php
                                        // On sélectionne la première option si on n'a pas de sujet déjà sélectionné...
                                        // On met également l'option à disabled pour que la saisie soit invalide avec le required, et on met un value à "" pour que le validateur W3C soit content.
                                        ?>
                                        <option value="" disabled<?php if(!isset($_SESSION["formulaire"]["sujet"])) echo " selected"; ?>>Choisir</option>
                                        <?php
                                        // On boucle sur la liste des sujets, et on sélectionne le bon au passage si on a un formulaire déjà rempli...
                                        foreach($sujets as $id_sujet => $sujet) {
                                        ?>
                                        <option value="<?=$id_sujet?>"<?php if(isset($_SESSION["formulaire"]["sujet"]) and $_SESSION["formulaire"]["sujet"] == $id_sujet) echo " selected"; ?>><?=$sujet?></option>
                                        <?php
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="textareamessage" class="form-label">Message</label>
                                    <textarea class="form-control" id="textareamessage" rows="6" name="message" required><?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["message"];?></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                     <label for="antispam" class="form-label antispam">Contrôle antispam :<br>
                                     Combien font <?=$operation_libelle?>&nbsp;?</label>
                                     <input type="number" class="form-control" name="<?=$_SESSION["champ_antispam"]?>" id="antispam" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <button name="action" value="envoi-mail" type="submit" class="btn btn-calory">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xl-4 px-0 contact-image">
                    <div class="contact-bkg"></div>
                </div>
        </section>


<?php
require_once("include/footer.php");
?>