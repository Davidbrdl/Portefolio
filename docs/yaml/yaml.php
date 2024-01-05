<?php

/*****************************************************
https://symfony.com/doc/current/components/yaml.html
******************************************************/


use Symfony\Component\Yaml\Yaml;
use Symfony\Component\Yaml\Exception\ParseException;

if (!function_exists('yaml_parse_file')){
require_once('vendor/autoload.php');
	function yaml_parse_file($file){
		try {
			return Yaml::parseFile($file);
		} catch (ParseException $exception) {
			printf('Unable to parse the YAML string: <b>%s</b>', $exception->getMessage());
		}
	}
}

function print_array($data){
	echo "<pre>";
	print_r($data);
	echo "</pre>";
}


?>
