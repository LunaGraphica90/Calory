<?php

/******************************************/
/* Calory - Soulé Madjid - Site web - v1  */
/* Copyright 2022-2023                    */
/* Luna Graphica & E-Concept Applications */
/******************************************/

session_start();

// Fonction d'encodage du mail pour affichage :
function encode_mail($email) {
    $mail_encoded = "";
    for($i = 0; $i < strlen($email); $i++) {
        switch((rand(1, 300) % 3)) {
            case 0:
                $mail_encoded .= "&#".ord($email[$i]).";";
                break;
            case 1:
                $mail_encoded .= "&#x".bin2hex($email[$i]).";";
                break;
            case 2:
                $mail_encoded .= $email[$i];
                break;
            default:
                echo "Error";
                break;
        }
    }
    return $mail_encoded;
}





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

    // Filtre antispam
    if(${$_SESSION["champ_antispam"]} == $_SESSION["antispam"]) {
        if(substr($email, -3) != ".ru") {
            // On envoie le mail
            // Si nom, prenom, societe et email sont remplis ou non... Si oui, on kill.
            if($prenom == "" and $nom == "" and $email == "" and $societe == "") {
                if($nom2 != "" and $email2 != "" and $message != "") {
                    $objet = $prenom2." ".$nom2." a envoyé un email depuis le site " . $_SERVER["HTTP_HOST"];
                    
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
        
                    // Traitement des special char de saut de ligne...
                    // \r\n
                    $data = str_replace("&#13;&#10;", "\n", $data);
                    // \n
                    $data = str_replace("&#10;", "\n", $data);
                    // \r
                    $data = str_replace("&#13;", "\n", $data);
        
        
                    if(mail("contact@e-concept-applications.fr", $objet, $data, "Content-type: text/plain; charset=utf-8\nFrom: ".$email2."")) {
                        if(isset($_SESSION["formulaire"])) {
                            unset($_SESSION["formulaire"]);
                        }
                        $_SESSION["formulaire"]["remarque"] = "Votre message a bien été envoyé.";
                    } else {
                        if(isset($_SESSION["formulaire"])) {
                            unset($_SESSION["formulaire"]);
                        }
                        $_SESSION["formulaire"]["remarque"] = "Votre message n'a pas été envoyé.";
                    }
        
                    //header("Location: /#contact");
                } else {
                    $_SESSION["formulaire"]["nom"] = $nom2;
                    $_SESSION["formulaire"]["prenom"] = $prenom2;
                    $_SESSION["formulaire"]["email"] = $email2;
                    $_SESSION["formulaire"]["tel"] = $tel;
                    $_SESSION["formulaire"]["societe"] = $societe2;
                    $_SESSION["formulaire"]["sujet"] = $id_sujet;
                    $_SESSION["formulaire"]["message"] = stripslashes($message);
                    $_SESSION["formulaire"]["remarque"] = "Merci de remplir au moins votre nom, votre mail et un message.<br>";
                    //header("Location: /#contact");
                }
            } else {
                header("HTTP/1.1 500 Internal Server Error");
                exit("<h1>500 Internal Server Error</h1>");
            }
        } else {
            header("HTTP/1.1 500 Internal Server Error");
            exit("<h1>500 Internal Server Error</h1>");
        }
    
        //
    } else {
        $_SESSION["formulaire"]["nom"] = $nom2;
        $_SESSION["formulaire"]["prenom"] = $prenom2;
        $_SESSION["formulaire"]["email"] = $email2;
        $_SESSION["formulaire"]["tel"] = $tel;
        $_SESSION["formulaire"]["societe"] = $societe2;
        $_SESSION["formulaire"]["sujet"] = $id_sujet;
        $_SESSION["formulaire"]["message"] = stripslashes($message);
        $_SESSION["formulaire"]["remarque"] = "Contrôle anti-spam incorrect !<br>Merci d'inscrire le résultat du calcul en chiffres.";
        //header("Location: /#contact");
    }
} else {
    unset($_SESSION);
}




// On génère un tableau de correspondance nombres numériques/nombres texte
$numbers = array(1=>"un", 2=>"deux", 3=>"trois", 4=>"quatre", 5=>"cinq", 6=>"six",
    7=>"sept", 8=>"huit", 9=>"neuf", 10=>"dix", 11=>"onze", 12=>"douze",
    13=>"treize", 14=>"quatorze", 15=>"quinze");
$operators = array("+"=>"plus", "-"=>"moins");

srand((double)microtime()*1000000);
$number1 = rand(1, 15);
$number2 = rand(1, 15);
$operator = rand(1, 2);
if($operator == 1) {
    $operator = "+";
} else {
    $operator = "-";
    if($number1 < $number2) {
        $tmp = $number2;
        $number2 = $number1;
        $number1 = $tmp;
    }
}
$operation = $number1." ".$operator." ".$number2;
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
eval("\$_SESSION[\"antispam\"] = ".$operation.";");
$_SESSION["champ_antispam"] = "antispam".((int)microtime()*1000000);







?>


<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calory - Ingénierie fluides - La maîtrise des fluides et de l’énergie</title>
    <link rel="icon" type="image/x-icon" href="images/favicon.ico">
    <link href="css/styles.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500;1,600&display=swap" rel="stylesheet">
    <script src="https://code.iconify.design/iconify-icon/1.0.2/iconify-icon.min.js"></script>
</head>
<body>
    <header class="sticky header">
        <div class="corner header"></div>
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img src="images/logoCalory.png" alt="Logo Calory" ></a>
                <div class="contact mobile">
                        <p class="phone">07 69 15 42 96</p>
                        <p class="mail"><?=encode_mail("projet@calory.fr")?></p>
                    </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#services">Services aux particuliers et professionnels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="contact desktop">
                        <p class="phone">07 69 15 42 96</p>
                        <p class="mail"><?=encode_mail("projet@calory.fr")?></p>
                    </div>
                </div>
                
            </div>
        </nav>
    </header>
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
                    <img alt="Accueil Calory" class="home-image img-fluid" src="images/ImageAccueil2_NB.jpg">
                </div>
            </div>
        </section>
        <section id="about">
            <div class="content-about">
                <h2>À propos</h2>
                <p>Dans le cadre d’une construction neuve ou d’une rénovation, il est indispensable d’avoir des documents de travail clairs et précis pour communiquer entre les différents acteurs du projet (Maîtrise d’ouvrage, Maîtrise d’œuvre, Entreprises…), pour protéger les intérêts de toutes les parties, et également pour que les compagnons puissent avoir toutes les billes à la bonne réalisation des travaux.</p>
                <p>Après plusieurs années en entreprise, je suis arrivé à la conclusion que l’importance des études des projets est trop souvent minimisée, alors qu’elles sont la clé de voûte de ceux-ci pour leur parfaite exécution.</p>
                <p>Plans de réseaux, plans de réservations, notes de calculs, schémas de principe, détails et élévations, sélection du matériel… Je peux vous apporter mon analyse et mon expertise, afin de vous décharger de la partie études de vos projets de plomberie, chauffage, ventilation et climatisation, au travers de l’ensemble des documents qui vous seront nécessaires de la préparation à l’achèvement.</p>
            </div>
        </section>
        <section id="services">
            <div class="content-services">
                <h2>Les services</h2>
                <h3><iconify-icon inline icon="line-md:upload-loop" rotate="90deg" flip="horizontal"></iconify-icon> Professionnels</h3>
                <p>Je prends connaissance de la totalité des pièces que vous me fournissez qui délimitent votre projet. Ensuite, nous définissons ensemble vos besoins à partir de vos attentes et de vos objectifs. Pour finir, nous fixons la liste des documents attendus et je vous accompagne de la préparation du projet jusqu’au rendu final.</p>

                <div class="services-cards">
                    <div class="card prepa" >
                        <img class="card-img-top" src="images/ImageServices2.jpg" alt="Card image cap">
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
                        <img class="card-img-top" src="images/ImageServices1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Phase d'exécution</h5>
                            <ul>
                                <li>Schémas de principe hydraulique et/ou aéraulique</li>
                                <li>Synoptiques des colonnes (plomberie, chauffage, ventilation)</li>
                                <li>Plans de réseaux</li>
                                <li>Plans de réservations</li>
                                <li>Schémas et détails de locaux techniques</li>
                                <li>Synthèse avec les autres corps d’état</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="content-services">
                <h3><iconify-icon inline icon="line-md:upload-loop" rotate="90deg" flip="horizontal"></iconify-icon> Particuliers</h3>
                <blockquote>
                    <p><iconify-icon inline icon="material-symbols:check-small-rounded"></iconify-icon> Vous désirez concevoir ou rénover une salle de bains ou tout autre pièce d’eau, et vous souhaiteriez un accompagnement pour passer de l’idée à la réalité.<br>
                    <iconify-icon inline icon="material-symbols:check-small-rounded"></iconify-icon> Vous voulez installer une ventilation chez vous, ou revoir votre système de chauffage, et vous aimeriez être aiguillé sur la façon de procéder.<br>
                    <iconify-icon inline icon="material-symbols:check-small-rounded"></iconify-icon> Vous construisez, et vous avez besoin d’un regard extérieur sur vos plans fluides et les documents en votre possession avant la réalisation des travaux.</p>
                </blockquote>

                <p style="text-align:center; font-weight:600;">Quelque soit la nature de votre demande, voici le déroulé :</p>
                
                <div class="services-cards part">
                <div class="col-lg-4">
                    <div class="card particular">
                            <img class="card-img-top" src="images/servpart1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">&nbsp;<iconify-icon icon="tabler:square-rounded-number-1"></iconify-icon>&nbsp;</h5>
                                <p>Après avoir pris contact avec moi, nous fixons un premier rendez-vous en distanciel, durant lequel je suis à votre entière écoute. C'est à ce moment que nous mettons en lumière vos attentes.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                        <div class="card particular">
                            <img class="card-img-top" src="images/servpart2.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">&nbsp;<iconify-icon icon="tabler:square-rounded-number-2"></iconify-icon>&nbsp;</h5>
                                <p>Si le besoin est, nous convenons d'un rendez-vous sur site, pour appréhender davantage les volumes et les contraintes éventuelles à l'élaboration de votre projet, et de votre cahier des charges.</p>
                            </div>
                        </div>
                </div>
                <div class="col-lg-4">
                        <div class="card particular">
                            <img class="card-img-top" src="images/servpart3.jpg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title">&nbsp;<iconify-icon icon="tabler:square-rounded-number-3"></iconify-icon>&nbsp;</h5>
                                <p>Enfin, nous établissons un plan d'action pour atteindre vos objectifs. Pendant l'accompagnement, vous êtes et restez le maître à bord, nous avançons à votre rythme et après validation de chacune des étapes que nous aurons défini ensemble, jusqu'à l'aboutissement de votre projet.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>
        <section id="contact" class="contact">
            <div class="col-xl-8">
                <div class="contact-row">
                    <div class="col-lg-6 text-contact">
                        <h2>Contact</h2>
                        <p class="bolder">Vous voulez des précisions sur les prestations ? Vous souhaitez discuter de votre projet ?</p>
                        <p>N’hésitez pas à prendre contact en remplissant le formulaire ci-contre, par téléphone ou par mail<br>(disponible du lundi au jeudi de 09h à 12h et de 14h à 18h)</p>
                        <p class="text-uppercase">Calory : </p>
                        <p class="city ms-3">Belfort (90)</p>
                        <p class="phone ms-3">Tél. : 07 69 15 42 96</p>
                        <p class="mail ms-3">Mail : <?=encode_mail("projet@calory.fr")?></p>
                    </div>
                    <div class="col-lg-6 p-5">
                        <div id="formulaire" class="p-4">
                            <form class="row" method="post" action="/#contact">
<?php
if(isset($_SESSION["formulaire"]["remarque"])) {
?>
                                <div class="col-12 mt-3">
                                    <label class="form-label"><?=$_SESSION["formulaire"]["remarque"]?><br><br></label>
                         </div>
<?php                                                                
}                                
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
                                    <input type="text" class="form-control" id="inputphone" name="phone" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["tel"];?>">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="inputemail" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputemail" name="email" value="<?php if(isset($_SESSION["formulaire"]["nom"])) echo $_SESSION["formulaire"]["email"];?>" required>
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="subject" class="form-label">Sujet</label>
                                    <select class="form-select" aria-label="Default select example" id="subject" name="subject" required>
                                        <option value="" disabled<?php if(!isset($_SESSION["formulaire"]["sujet"])) echo " selected"; ?>>Choisir</option>
                                        <?php
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
                                     <label for="antispam" class="form-label">Contrôle antispam :<br>
                                     Combien font <?=$operation_libelle?> ?</label>
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
    <footer>
        <div class="content-footer">
            <div class="corner footer"></div>
            <p>Copyright©<?= date('Y') ?> Calory - Tous droits réservés</p>
            <ul>
                <li><a href="" >Mentions légales</a></li>
                <li><a href="https://luna-graphica.fr/" target="_blank">Design/intégration : Luna Graphica</a></li>
                <li><a href="https://e-concept-applications.fr/" target="_blank">Technique/Hébergement : E-Concept Applications</a></li>
            </ul>
        </div>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <script src="js/activeLink.js"></script>
    <script src="js/stopfixNavigation.js"></script>
    <!-- GotoTop Button-->
    <script src="js/gototop.js"></script>
    <!-- Collaped NavBar-->
    <script src="js/collapedNav.js"></script>

</body>
</html>