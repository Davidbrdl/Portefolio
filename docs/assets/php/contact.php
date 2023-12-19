<?php
$data = yaml_parse_file('assets/yaml/contact.yaml');
?>

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

            <textarea name="msg" id="message" cols="30" rows="10" class="form__input message__input"></textarea>
        </div>

        <div class="submit">

            <input name="submit_btn" type="submit" id="submit-btn" value="Envoyer">
        </div>
    </form>
</div>
<hr width="50" color="#667eea" size="5">
<a href="#Accueil">Retourner à l'Accueil <img src="assets/images/house-solid.svg"></a>
</section>