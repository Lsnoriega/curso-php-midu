<?php

class NextMovie {

    public function __construct(
        private string $title,
        private int $days_until,
        private string $type,
        private string $poster_url,
        private string $release_date,
        private string $overview,
        private string $following_production
    ) {
        
    }

    public function until_message() : string {

        $days = $this ->days_until;
    
        return match (true) {
           $days === 0  => "Hoy se Estrena! 🍾",
           $days === 1  => "Mañana Se Estrena! ☘️",
           $days < 7    => "Esta Semana! 👾",
           $days < 30   => "Este Mes! 😀",
           default      => "Faltan $days Días 👌",
        };
    
    }

    public static function get_and_create_api(string $api_url) : NextMovie {

        $result = file_get_contents($api_url);
    
        $data = json_decode($result, true);
    
        return new self(
            $data["title"],
            $data["days_until"],
            $data["type"],
            $data["poster_url"],
            $data["release_date"],
            $data["overview"],
            $data["following_production"]["title"] ?? "Desconocido",
        );
    }

    public function get_data(){
        return get_object_vars($this);
    }
}

?>