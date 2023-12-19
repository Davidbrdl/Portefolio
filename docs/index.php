<?php
require_once("yaml/yaml.php")
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
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

<?php
require("assets/php/contact.php");
?>
    </div>
    </main>

    <footer>
    </footer>

</body>

</html>