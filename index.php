<?php

const MCU_API = "https://www.whenisthenextmcufilm.com/api";

$ch = curl_init(MCU_API);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$result = curl_exec($ch);
$data = json_decode($result, true);

curl_close($ch);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Próxima película de Marvel</title>
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css"
>
</head>
<body>
    <main>
        
        <section>
            <img src="<?= $data["poster_url"];?>" alt="Poster de <?= $data["title"];?>" width="200" style="border-radius: 16px">
        </section>
        <hgroup>
            <h3>
                <?= $data["title"];?> Se Estrena en <?= $data["days_until"];?> Dias
            </h3>
            <p>Fecha de Estreno: <?= $data["release_date"];?></p>
            <p>la siguiente es: <?= $data["following_production"]["title"];?></p>
        </hgroup>
    </main>
    
</body>
</html>

<style>
    :root {
        color-scheme: light dark;
    }

    body {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    section {
        display: flex;
        justify-content: center;
    }

    hgroup {
        display: flex;
        justify-content: center;
        flex-direction: column;
        text-align: center;
    }
</style>