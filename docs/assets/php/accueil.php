<?php
$data=yaml_parse_file('assets/yaml/Accueil.yaml');
?>
<div class="Accueil">
        <section id="Accueil">
            <?php 
            echo '<h1>'.($data["title"]).'</h1>';?>
            <?php
            echo '<img src="assets/images/'.($data["image"]).'" alt="maria" width="10%">';?>
            <?php
            echo '<h2>'.($data["titre2"]).'</h2>';?>
            <div class="container3">
                <?php
                echo '<p><strong>'.($data["accroche"]).'</strong></p>';?>
            </div>
            <a href="#Apropos">Page suivante</a>
        </section>
    </div>