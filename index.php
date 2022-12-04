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
</head>
<body>
    <header class="sticky header">
        <div class="corner header"></div>
        <nav class="navbar navbar-expand-lg" id="navbar">
            <div class="container-fluid">
                <a class="navbar-brand" href=""><img src="images/logo.png" alt="Logo Calory" ></a>
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
                        <a class="nav-link" href="#services">Nos services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    </ul>
                    <div class="contact">
                        <p class="phone">07 69 15 42 96</p>
                        <p class="mail">projet@calory.fr</p>
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

            <div class="home-content d-flex align-items-center mt-5">
                <div class="cadre one"></div>
                <div class="mask-text col-md-4">
                    <h1>La maîtrise <span><br>des fluides <br>et de l'énergie</span></h1>
                </div>
                <div class="cadre two"></div>
                <div class="mask-image col-md-8">
                    <img class="home-image" src="images/ImageAccueil2_NB.jpg">
                </div>
            </div>
        </section>
        <section id="about">
            <div class="content-about">
                <h2>À propos</h2>
                <p>Calory vous accompagne dans l’exécution de vos projets, de la préparation à la réception.</p>
                <p>Il est aujourd’hui indispensable d’avoir des documents de travail clairs et précis pour communiquer avec les différents interlocuteurs du projet (La maîtrise d’ouvrage, la maîtrise d’œuvre, les autres lots…), et également pour que les hommes de terrain puissent avoir toutes les billes à la bonne réalisation de l’ouvrage.</p>
                <p>Plans d’exécution, plans de réservations, notes de calculs, schémas de principe, détails et élévations, fiches produits, DOE… Calory vous propose de vous décharger de la partie études de vos projets de <em>plomberie, chauffage, ventilation et climatisation</em>, au travers de l’ensemble des documents nécessaires au bon accomplissement de ceux-ci.</p>
            </div>
        </section>
        <section id="services">
            <div class="content-services">
                <h2>Nos services</h2>
                <p>Calory vous propose des solutions pour l’étude de vos projets en plomberie et génie climatique (chauffage, ventilation, climatisation), de la préparation à l’exécution.</p>

                <div id="services-cards">
                    <div class="card prepa" >
                        <img class="card-img-top" src="images/ImageServices2.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">Phase préparatoire</h5>
                            <ul>
                                <li>Dimensionnement des installations</li>
                                <li>Calculs des déperditions et apports</li>
                                <li>Calculs des réseaux (hydraulique et aérauliques)</li>
                                <li>Sélection du matériel</li>
                            </ul>
                        </div>
                    </div>

                    <div class="card" >
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

        </section>
        <section id="contact" class="contact">
            <div class="col-md-8">
                <div class="row">
                    <div class="col-6 text-contact">
                        <h2>Contact</h2>
                        <p class="bolder">Vous voulez des précisions sur les prestations ? Vous souhaitez discuter de votre projet ?</p>
                        <p>N’hésitez pas à prendre contact en remplissant le formulaire ci-contre, par téléphone ou par mail</br>(disponible du lundi au jeudi de 09h à 12h et de 14h à 18h)</p>
                        <p class="text-uppercase">Calory : </p>
                        <p class="city ms-3">Belfort (90)</p>
                        <p class="phone ms-3">Tél. : 07 69 15 42 96</p>
                        <p class="mail ms-3">Mail : projet@calory.fr</p>
                    </div>
                    <div class="col-md-6 px-5">
                        <div id="formulaire" class="p-4">
                            <form class="row" method="post" action="#">
                                <div class="col-6">
                                    <label for="lastname" class="form-label">Nom</label>
                                    <input type="text" class="form-control" id="inputlastname" name="lastname">
                                </div>
                                <div class="col-6">
                                    <label for="firstname" class="form-label">Prénom</label>
                                    <input type="text" class="form-control" id="inputfirstname" name="firstname">
                                </div>
                                <div class="col-12 mt-3">
                                    <label for="company" class="form-label">Entreprise</label>
                                    <input type="text" class="form-control" id="inputcompany" name="company">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="phone" class="form-label">Téléphone</label>
                                    <input type="text" class="form-control" id="inputphone" name="phone">
                                </div>
                                <div class="col-6 mt-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="inputemail" name="email">
                                </div>
                                <div class="col-12 mt-3">
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
                                <div class="col-12 mt-3">
                                    <label for="message" class="form-label">Message</label>
                                    <textarea class="form-control" id="textareamessage" rows="6" name="message"></textarea>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-calory">Envoyer</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-4 px-0 contact-image">
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
    <script type="text/javascript" src="js/activeLink.js"></script>
    <script type="text/javascript" src="js/stopfixNavigation.js"></script>
    <!-- GotoTop Button-->
    <script type="text/javascript" src="js/gototop.js"></script>

</body>
</html>