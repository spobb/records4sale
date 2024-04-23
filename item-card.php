<article class="item-card">
    <h2><?= $results[$i]['label'] ?></h2>
    <img src="img/covers/ghost.jpg" alt="album cover">
    <!-- <p><?= $results[$i]['release'] ?></p> -->
    <!-- <p><?= $results[$i]['runtime'] ?></p> -->
    <div>
        <p><?= $results[$i]['artist_id'] ?></p>
        <p><?= $results[$i]['category_id'] ?></p>
        <p><?= $results[$i]['genre_id'] ?></p>
        <p><?= $results[$i]['price'] . ' €' ?></p>
    </div>
</article>