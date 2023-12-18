<?php
$data = yaml_parse_file('assets/yaml/competence.yaml');
?>

<section id="Compétences">
    <?php
    echo '<h1 class="comp">'.($data["title"]).'</h1>';?>
            <div class="container">
            <div class="bar">
                <div class="bar-stat" id="html">
                    <?php
                    echo '<span class="bar-text">'.($data["skillbar1"]).'</span>';?>
                </div>
            </div>
            <div class="bar">
                <div class="bar-stat" id="css">
                    <?php
                    echo '<span class="bar-text">'.($data["skillbar2"]).'</span>';?>
                </div>
            </div>
            <div class="bar">
                <div class="bar-stat" id="js">
                    <?php
                    echo '<span class="bar-text">'.($data["skillbar3"]).'</span>';?>
                </div>
            </div>
        </div>
        <a href="#Expériences">Page suivante</a>
        </section>