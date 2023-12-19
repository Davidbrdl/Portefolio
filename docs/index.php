<?php
require_once("yaml/yaml.php")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>David Bourdel</title>
</head>

<body>
    <div class="video">
    </div>
    <header class="main-head">
        <nav>
            <img src="assets/images/fleshandblood.png" alt="logo" width="20%" class="logoflesh">
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

<?php
require("assets/php/formations.php");
?>
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
            <a href="#Accueil">Retourner à l'Accueil <img src="assets/images/house-solid.svg"></a>
        </section>
    </div>
    </main>

    <footer>
    </footer>

</body>

</html>