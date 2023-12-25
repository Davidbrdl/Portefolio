<?php
$data = yaml_parse_file('assets/yaml/contact.yaml');
?>

<section id="Contact">

<div class="container9">
    <?php
    echo '<h1 class="title title-1">'.($data["title"]).'</h1>';?>

    <form class="form" action="email1.php" method="post"> 
        <div class="form__group">
            <input type="text" class="form__input" id="nom" placeholder="Votre Nom" required name="name">
            <?php
            echo '<label for="nom" class="form__label">'.($data["labelnom"]).'</label>';?>
        </div>

        <div class="form__group">
            <input type="email" class="form__input" id="email" placeholder="Votre Email" required name="email">
            <?php
            echo '<label for="email" class="form__label">'.($data["labelemail"]).'</label>';?>
        </div>

        <div class="form__message">
            <?php
            echo '<label for="message" class="form__message-label">
                '.($data["labelmsg"]).' :
            </label>';?>

            <textarea name="msg" id="message" cols="30" rows="10" class="form__input message__input"></textarea>
        </div>

        <div class="submit">

            <input name="submit_btn" type="submit" id="submit-btn" value="Envoyer">
        </div>
    </form>
</div>
<a href="#Accueil">Retourner à l'Accueil <img src="assets/images/house-solid.svg"></a>
</section>