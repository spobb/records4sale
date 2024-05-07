<article class="item-card">
    <div>
        <a href="#" class="artist"><?= $row['artist'] ?></a>
        <h2 class="title"><?= $row['label'] ?></h2>
    </div>
    <img src="<?= album_cover($row) ?> " alt="album cover">
    <!-- <p><?= $row['release'] ?></p> -->
    <!-- <p><?= $row['runtime'] ?></p> -->
    <div>
        <p><?=
            // $row['category'] . '<br>' .
            $row['genre']
            ?></p>
        <footer>
            <button class="button" onclick="getReviewPage();">Review</button>
            <span class="price"><?= $row['price'] . '' ?></span>
            <button class="button">Buy</button>
        </footer>
    </div>
</article>