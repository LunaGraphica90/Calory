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
                <a class="navbar-brand" href="/"><img src="images/logoCalory.png" alt="Logo Calory" ></a>
                <div class="contact mobile">
                        <p class="phone"><a href="tel:+33769154296">07 69 15 42 96</a></p>
                        <p class="mail"><?=encode_mail("projet@calory.fr")?></p>
                    </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link<?php if($_SERVER["REQUEST_URI"] == "/") echo " active"; ?>" href="/#home">Accueil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#about">À propos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#services">Services aux particuliers et professionnels</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/#contact">Contact</a>
                        </li>
                    </ul>
                    <div class="contact desktop">
                        <p class="phone"><a href="tel:+33769154296">07 69 15 42 96</a></p>
                        <p class="mail"><?=encode_mail("projet@calory.fr")?></p>
                    </div>
                </div>
                
            </div>
        </nav>
    </header>
    