<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calory - Bureau d'études - La maîtrise des fluides et de l’énergie</title>
    <link rel="icon" type="image/x-icon" href="climages/favicon.ico">
    <link href="/css/styles.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-light">
            <div class="container-fluid">
            <a class="navbar-brand" href="#">Calory</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#home">Accueil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#about">À propos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#services">Services proposés</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact">Contact</a>
                </li>
                </ul>
            </div>
            </div>
        </nav>
    </header>
    <section id="home">
        <h1>Calory, la maîtrise des fluides et de l'énergie</h1>
    </section>
    <section id="about">
        <h2>À propos</h2>
        <p>Calory vous accompagne dans l’exécution de vos projets, de la préparation à la réception.</p>
        <p>Il est aujourd’hui indispensable d’avoir des documents de travail clairs et précis pour communiquer avec les différents interlocuteurs du projet (La maîtrise d’ouvrage, la maîtrise d’oeuvre, les autres lots…), et également pour que les hommes de terrain puissent avoir toutes les billes à la bonne réalisation de l’ouvrage.</p>
        <p>Plans d’exécution, plans de réservations, notes de calculs, schémas de principe, détails et élévations, fiches produits, DOE… Calory vous propose de vous décharger de la partie études de vos projets, au travers de l’ensemble des documents nécessaires au bon accomplissement de ceux ci.</p>
    </section>
    <section id="services">
        <h2>Services proposés</h2>
        <p>Calory vous propose des solutions pour l’étude de vos projets en génie climatique.</p>
        <p>Phase d'exécution :</p>
        <ul>
            <li>Schémas de principe hydraulique et/ou aéraulique</li>
            <li>Synoptiques des colonnes (plomberie, chauffage, ventilation)</li>
            <li>Plans de réseaux</li>
            <li>Plans de réservations</li>
            <li>Schémas et détails de locaux techniques</li>
            <li>Synthèse avec les autres corps d’état</li>
        </ul>
        <p>Phase préparatoire :</p>
        <ul>
            <li>Dimensionnement des installations</li>
            <li>Calculs des déperditions et apports</li>
            <li>Calculs des réseaux (hydraulique et aérauliques)</li>
            <li>Sélection du matériel</li>
        </ul>
    </section>
    <section id="contact">
        <h2>Contact</h2>
        <p>Vous voulez des précisions sur les prestations ? Vous souhaitez discuter de votre projet ?</p>
        <p>N’hésitez pas à prendre contact en remplissant le formulaire ci dessous, ou bien par téléphone ou par mail (disponible du lundi au jeudi de 09h à 12h et de 14h à 18h)</p>
        <p>Calory</p>
        <p>Belfort (90)</p>
        <p>Tél. : 07 69 15 42 96</p>
        <p>Mail : projet@calory.fr</p>
        <form class="row" method="post" action="#">
            <div class="col-md-6">
                <label for="lastname" class="form-label">Nom</label>
                <input type="text" class="form-control" id="inputlastname" name="lastname">
            </div>
            <div class="col-md-6">
                <label for="firstname" class="form-label">Prénom</label>
                <input type="text" class="form-control" id="inputfirstname" name="firstname">
            </div>
            <div class="col-md-12">
                <label for="company" class="form-label">Entreprise</label>
                <input type="text" class="form-control" id="inputcompany" name="company">
            </div>
            <div class="col-md-6">
                <label for="phone" class="form-label">Téléphone</label>
                <input type="text" class="form-control" id="inputphone" name="phone">
            </div>
            <div class="col-md-6">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="inputemail" name="email">
            </div>
            <div class="col-md-12">
                <label for="subject" class="form-label">Sujet</label>
                <select class="form-select" aria-label="Default select example" name="subject">
                    <option selected>Choisir</option>
                    <option value="1">Réalisation de plans</option>
                    <option value="2">Dimensionnement</option>
                    <option value="3">Études générales</option>
                    <option value="4">Besoin de précisions</option>
                    <option value="5">Autre demande</option>
                </select>
            </div>
            <div class="col-md-12">
                <label for="message" class="form-label">Message</label>
                <textarea class="form-control" id="textareamessage" rows="4" name="message"></textarea>
            </div>
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Envoyer</button>
            </div>
        </form>
    </section>
    <footer>
        <p>Copyright©<?= date('Y') ?> Calory - Tous droits réservés</p>
        <ul>
            <li><a href="" >Mentions légales</a></li>
            <li><a href="https://luna-graphica.fr/" target="_blank">Design/intégration : Luna Graphica</a></li>
            <li><a href="https://e-concept-applications.fr/" target="_blank">Technique/Hébergement : E-Concept Applications</a></li>
        </ul>
    </footer>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    
    <!-- GotoTop Button-->
    <script> configObj = {"buttonD":"M8 18.568L10.8 21.333 16 16.198 21.2 21.333 24 18.568 16 10.667z","buttonT":"translate(-1148 -172) translate(832 140) translate(32 32) translate(284)","shadowSize":"0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05)","roundnessSize":"999px","buttonDToBottom":"12px","buttonDToRight":"12px","selectedBackgroundColor":"#4a44bb","selectedIconColor":"#ffffff","buttonWidth":"40px","buttonHeight":"40px","svgWidth":"32px","svgHeight":"32px"};function createButton(obj, pageSimulator) {    const body = document.querySelector("body");    backToTopButton = document.createElement("span");    backToTopButton.classList.add("softr-back-to-top-button");    backToTopButton.id = "softr-back-to-top-button";    pageSimulator      ? pageSimulator.appendChild(backToTopButton)      : body.appendChild(backToTopButton);    backToTopButton.style.width = obj.buttonWidth;    backToTopButton.style.height = obj.buttonHeight;    backToTopButton.style.marginRight = obj.buttonDToRight;    backToTopButton.style.marginBottom = obj.buttonDToBottom;    backToTopButton.style.borderRadius = obj.roundnessSize;    backToTopButton.style.boxShadow = obj.shadowSize;    backToTopButton.style.color = obj.selectedBackgroundColor;    backToTopButton.style.backgroundColor = obj.selectedBackgroundColor;    pageSimulator ? backToTopButton.style.position = "absolute" : backToTopButton.style.position = "fixed";    backToTopButton.style.outline = "none";    backToTopButton.style.bottom = "0px";    backToTopButton.style.right = "0px";    backToTopButton.style.cursor = "pointer";    backToTopButton.style.textAlign = "center";    backToTopButton.style.border = "solid 2px currentColor";    backToTopButton.innerHTML =      '<svg class="back-to-top-button-svg" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" > <g fill="none" fill-rule="evenodd"> <path d="M0 0H32V32H0z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> <path class="back-to-top-button-img" fill-rule="nonzero" d="M11.384 13.333h9.232c.638 0 .958.68.505 1.079l-4.613 4.07c-.28.246-.736.246-1.016 0l-4.613-4.07c-.453-.399-.133-1.079.505-1.079z" transform="translate(-1028 -172) translate(832 140) translate(32 32) translate(164) matrix(1 0 0 -1 0 32)" /> </g> </svg>';    backToTopButtonSvg = document.querySelector(".back-to-top-button-svg");    backToTopButtonSvg.style.verticalAlign = "middle";    backToTopButtonSvg.style.margin = "auto";    backToTopButtonSvg.style.justifyContent = "center";    backToTopButtonSvg.style.width = obj.svgWidth;    backToTopButtonSvg.style.height = obj.svgHeight;    backToTopButton.appendChild(backToTopButtonSvg);    backToTopButtonImg = document.querySelector(".back-to-top-button-img");    backToTopButtonImg.style.fill = obj.selectedIconColor;    backToTopButtonSvg.appendChild(backToTopButtonImg);    backToTopButtonImg.setAttribute("d", obj.buttonD);    backToTopButtonImg.setAttribute("transform", obj.buttonT);        if(!pageSimulator) {      backToTopButton.style.display = "none";      window.onscroll = function() {        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {          backToTopButton.style.display = "block";        } else {          backToTopButton.style.display = "none";        }      };        backToTopButton.onclick = function() {        document.body.scrollTop = 0;        document.documentElement.scrollTop = 0;      };    }  };document.addEventListener("DOMContentLoaded", function() { createButton(configObj, null); });</script>
</body>
</html>