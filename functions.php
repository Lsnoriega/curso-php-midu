<?php

function render_template(string $template, array $data = []) {
    
    extract($data);

    require "templates/$template.php";
}


function get_api($url) : array {

    $result = file_get_contents($url);

    $data = json_decode($result, true);

    return $data;
}

function until_message($days) : string {
    
    return match (true) {
       $days === 0  => "Hoy se Estrena! 🍾",
       $days === 1  => "Mañana Se Estrena! ☘️",
       $days < 7    => "Esta Semana! 👾",
       $days < 30   => "Este Mes! 😀",
       default      => "Faltan $days Días 👌",
        
    };

}

?>