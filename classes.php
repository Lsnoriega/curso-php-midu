<?php

class SuperHero {

    public function __construct(public string $name, public string $planet, public array $powers) {
       
    }

    public function attack() : string
    {
       return "¡$this->name ataca con sus poderes!";
    }

    public function description() :string
    {
        $powers = implode(", ", $this->powers);

        return "$this->name es un super heroe que vive en $this->planet y tiene los siguientes poderes: $powers";
    } 

    public static function random()
    {
        $names = ["Ironman", "Batman", "Superman"];
        $planets = ["Earth", "Gotham", "Krypton"];
        $powers = [["Superfuerza", "Volar"], ["Inteligencia", "Dinero"], ["SuperTraje", "Más Dinero"]];
        
        $name = $names[array_rand($names)];
        $planet = $planets[array_rand($planets)];
        $power = $powers[array_rand($powers)];

        return new self ($name,$planet,$power);
    }

    public function get_data(){
        return get_object_vars($this);
    }

}

$hero = SuperHero::random();

echo $hero-> description();


?>