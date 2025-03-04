<?php

require_once "consts.php";
require_once "functions.php";
require_once "classes/next_movie.php";

// Si hay datos de película en la URL, úsalos en lugar de la API
if (isset($_GET['movie_data'])) {
    $movie_data = json_decode(urldecode($_GET['movie_data']), true);
    $next_movie = NextMovie::create_from_data($movie_data);
} else {
    // Si no, consume la API normalmente
    $next_movie = NextMovie::get_and_create_api(URL_API);
}

$next_movie_data = $next_movie->get_data();

render_template("head", $next_movie_data);
render_template("main", array_merge($next_movie_data, ["until_message" => $next_movie->until_message()]));
render_template("styles", $next_movie_data);

?>

