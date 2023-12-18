<?php

require_once("yaml/yaml.php");

$data=yaml_parse_file('example.yaml');
print_array($data);


?>