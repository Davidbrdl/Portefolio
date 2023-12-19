<?php
$data = yaml_parse_file('assets/yaml/formations.yaml');
?>
<section id="Formations">
        <?php
            echo '<h1>'.($data["title"]).'</h1>';?>
            <div class="container2">
            <ul>
                <?php
                    foreach($data["list-form"] AS $listform){
                        echo "<p>".ucfirst($listform["form"])."</p>\n";
                    }
                ?>
                <a href="https://drive.google.com/file/d/1EZECozwS9vYBDL_AAcBEWKm1G92ep3vU/view?usp=drive_link">Lien Attestation de suivi MOOC de l'ANSSI</a>
            </ul>
            
            <div class="formation">
                <?php
                echo '<img src="assets/images/'.($data["img1"]).'" alt="anssi" width="15%">';?>
                <?php
                echo '<img src="assets/images/'.($data["img2"]).'" alt="cisco" width="13%">';?>
                <?php
                echo '<img src="assets/images/'.($data["img3"]).'" alt="caensup" width="23%">';?>
                <?php
                echo '<img src="assets/images/'.($data["img4"]).'" alt="Udemy" width="20%">';?>
            </div>
            </div>
            <a href="#Contact">Page suivante</a>
        </section>