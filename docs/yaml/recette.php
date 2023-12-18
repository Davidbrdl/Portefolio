<?php

require_once("yaml/yaml.php");
$data=yaml_parse_file('recette.yaml');
//print_array($data);

echo "<h1>".$data["titre"]."</h1>\n";

echo "<h2>Durée</h2>\n";
foreach($data["duree"] AS $uneDuree){
	echo "<p>".ucfirst($uneDuree["nom"])." : ".$uneDuree["duree"]." ".$uneDuree["unite"]."</p>\n";
}

/*****************************************

ECRIRE LES INSTRUCTIONS SUIVANTES ICI.

*****************************************/

?>