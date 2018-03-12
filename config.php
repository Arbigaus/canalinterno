<?php
require 'environment.php';

// TODO: Definição da global BASE
$url = "http://".$_SERVER['HTTP_HOST'];
define("BASE", $url);

$admin_url = $url."/admin";
define("BASEADMIN", $admin_url);

// TODO: Definição da global Tile
$title = explode('.', BASE);
$title = (substr($title[0], 7) == 'canalinterno') ? 'Interno' : 'Externo';
define("TITLE", $title);

global $config;
$config = array();
if(ENVIRONMENT == "development") {
	$config['dbname'] = 'db_canalinterno';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'g123456@*';
} else {
	$config['dbname'] = 'db_canalinterno';
	$config['host'] = 'localhost';
	$config['dbuser'] = 'root';
	$config['dbpass'] = 'g123456@*';
}
