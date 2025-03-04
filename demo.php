<?php


$name = "Luis";
$age = 17;

$output = "Hola $name de edad $age 🤣";

define('LOGO_URL', 'https://static.cdnlogo.com/logos/p/79/php.svg');

$outputAge = match (true) {
    $age < 3 => 'eres un bebé 👶', 
    $age < 12 => 'eres un adulto 👦',
    $age < 18 => 'eres un adolescente 🍺',
    $age === 18 => 'eres un adulto',
    $age < 30 => 'eres un adulto joven',
    $age < 50 => 'eres un adulto viejo',
    $age > 50 => 'eres viejo'
};


?>