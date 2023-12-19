<?php
$data = yaml_parse_file('assets/yaml/Expérience.yaml');
?>
<section id="Expériences">
    <?php
            echo '<h1>'.($data["title"]).'</h1>';?>
            <div class="container5">
                <?php
                echo '<p>'.($data["exp1"]).'</p>';?>
                <?php
                echo '<p>'.($data["exp1-2"]).'</p>';?>
                <?php
                echo '<p>'.($data["exp1-3"]).'</p>';?>
                <ul style="list-style: none;">
                    <?php
                        foreach($data["list-act"] AS $listact){
                            echo "<p>".ucfirst($listact["act"])."</p>\n";
                        }
                    ?>
                </ul>
                <?php
                echo '<p>'.($data["exp2"]).'</p>';?>
                <?php
                echo '<p>'.($data["exp2-2"]).'</p>';?>
                <ul style="list-style: none;">
                    <?php
                        foreach($data["list-act2"] AS $listact2){
                            echo "<p>".ucfirst($listact2["act"])."</p>\n";
                        }
                    ?>
                </ul>
                <?php
                echo '<p>'.($data["exp3"]).'</p>';?>
                <?php
                echo '<p>'.($data["exp3-2"]).'</p>';?>
                <?php
                echo '<p>'.($data["exp3-3"]).'</p>';?>
                <ul style="list-style: none;">
                    <?php
                        foreach($data["list-act3"] AS $listact3){
                            echo "<p>".ucfirst($listact3["act"])."</p>\n";
                        }
                    ?>
                </ul>
            <?php
            echo '<p><a href="https://drive.google.com/file/d/1Rq24duPzhBkUuHQBAszUUlyaNCEx5oRD/view?usp=drive_link" class="liencv">'.($data["liencv"]).'</a></p>';?>
            </div>
            <a href="#Formations">Page suivante</a>
        </section>