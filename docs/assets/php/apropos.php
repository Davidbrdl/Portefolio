<?php
$data = yaml_parse_file('assets/yaml/Apropos.yaml');
?>
<section id="Apropos">
    <?php
    echo '<h1>'.($data["title"]).'</h1>';?>
        <div class="container4">
            <?php
            echo '<p>'.($data["paragraph"]).'</p>';?>
            <?php
            echo '<img src="assets/images/'.($data["image"]).'" alt="logo-sdis50" width="10%">';?>
            <?php
            echo '<p>'.($data["paragraph2"]).'</p>';?>
            </div>
            <a href="#Compétences">Page suivante</a>
        </section>