<main>
        
    <section>
        <img src="<?= $data["poster_url"];?>" alt="Poster de <?= $data["title"];?>" width="200" style="border-radius: 16px">
    </section>
    <hgroup>
        <h3>
            <?= $data["title"];?> - <?= $data["until_message"] ?>
        </h3>
        <p>Fecha de Estreno: <?= $data["release_date"];?></p>
        <p>la siguiente es: <?= $data["following_production"];?></p>
    </hgroup>
        
</main>