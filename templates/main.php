<main>
        
    <section>
        <img src="<?= $data["poster_url"];?>" alt="Poster de <?= $data["title"];?>" width="250" style="border-radius: 16px">
    </section>
    <hgroup>
        <h3>
            <?= $data["title"];?> - <?= $data["until_message"] ?>
        </h3>
        <p>Fecha de Estreno: <?= $data["release_date"];?></p>
        <?php if (!empty($data["following_production"]["title"])): ?>
            <p>La siguiente es: 
                <a href="index.php?movie_data=<?= urlencode(json_encode($data["following_production"])) ?>">
                    <?= $data["following_production"]["title"];?>
                </a>
            </p>
        <?php else: ?>
            <p>No hay más películas anunciadas 🎬</p>
        <?php endif; ?>
    </hgroup>
    
        
</main>