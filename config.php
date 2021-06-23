<?php
require 'environment.php';

$_config = array();
global $db;
date_default_timezone_set('America/Sao_Paulo');
if(ENVIROMENT == "development"){
    define("BASE_URL", "http://localhost/academico/");
    $_config['DBName'] = 'academico';
    $_config['DBHost'] = 'localhost';
    $_config['DBUser'] = 'root';
    $_config['DBPass'] = '';

}else{
    define("BASE_URL", "");
    $_config['DBName'] = '';
    $_config['DBHost'] = '';
    $_config['DBUser'] = '';
    $_config['DBPass'] = '';
}
try {
    $db = new PDO("mysql:dbname=".$_config['DBName'].";host=".$_config['DBHost'], $_config['DBUser'], $_config['DBPass']);
} catch (PDOException $e) {
    echo "ERROR: ".$e->getMessage();
    exit;
}