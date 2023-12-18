<?php
require_once("yaml/yaml.php")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>David Bourdel</title>
</head>

<body>
    <div class="video">
    </div>
    <header class="main-head">
        <nav>
            <img src="images/fleshandblood.png" alt="logo" width="20%" class="logoflesh">
            <ul>
                <li><a href="#Accueil">Accueil</a></li>
                <li><a href="#Apropos">À Propos</a></li>
                <li><a href="#Compétences">Compétences</a></li>
                <li><a href="#Expériences">Expériences</a></li>
                <li><a href="#Formations">Formations</a></li>
                <li><a href="#Contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main>
    <div class="hero">
        
<?php 
require("assets/php/accueil.php");
?>

<?php
require("assets/php/apropos.php");
?>

<?php
require("assets/php/competence.php");
?>

<?php
require("assets/php/experience.php");
?>

        <section id="Formations">
            <h1>Formations</h1>
            <hr width="50" color="#667eea" size="5">
            <div class="container2">
            <ul>
                <li>BAC Générale : Lycée Polyvalent Curie Corot, Saint-Lô</li>
                <li>MOOC de l'ANSSI ; <a href="https://drive.google.com/file/d/1EZECozwS9vYBDL_AAcBEWKm1G92ep3vU/view?usp=drive_link">Lien Attestation de suivi</a></li>
                <li>Cisco : Introduction à la cybersécurité</li>
                <li>BTS SIO en alternance (du 21/08/2023 au 08/2025, Caensup Sainte-Ursule)</li>
                <li>Udemy : BootCamp Web Developpement (25%)</li>
            </ul>
            <div class="formation">
                <img src="assets/images/1200px-ANSSI_Logo.svg.png" alt="anssi" width="15%">
                <img src="assets/images/800px-Cisco_logo_blue_2016.svg.png" alt="cisco" width="13%">
                <img src="assets/images/logo-CaenSup-noir.svg" alt="caensup" width="23%">
                <img src="assets/images/Udemy_logo.svg.png" alt="Udemy" width="20%">
            </div>
            </div>
            <hr width="50" color="#667eea" size="5">
            <a href="#Contact">Page suivante</a>
        </section>
        <!-- RENDRE LE FORMULAIRE DE CONTACT FONCTIONNEL; AVEC ENVOIS DE
        MAIL A MON ADDR EMAIL DANS LA BASE DE DONNEES-->
        <section id="Contact">

            <div class="container9">
                <h1 class="title title-1">Contact</h1>

                <form class="form" action="traitement.php" method="post"> 
                    <div class="form__group">
                        <input type="text" class="form__input" id="nom" placeholder="Votre Nom" required name="name">
                        <label for="nom" class="form__label">Votre Nom</label>
                    </div>

                    <div class="form__group">
                        <input type="email" class="form__input" id="email" placeholder="Votre Email" required name="email">
                        <label for="email" class="form__label">Votre Email</label>
                    </div>

                    <div class="form__message">
                        <label for="message" class="form__message-label">
                            Contenu du message :
                        </label>

                        <textarea name="msg" id="message" cols="30" rows="10" class="form__input message__input"

                        <textarea name="message" id="message" cols="30" rows="10" class="form__input message__input"

                            required></textarea>
                    </div>

                    <div class="submit">

                        <input name="submit_btn" type="submit" id="submit-btn" value="Envoyer" />

                        <input type="submit" value="Envoyer">

                    </div>
                </form>
            </div>
            <hr width="50" color="#667eea" size="5">
            <a href="#Accueil">Retourner à l'Accueil <img src="./images/house-solid.svg"></a>
        </section>
    </div>
    </main>

    <footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    </footer>

</body>

</html>