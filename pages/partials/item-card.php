<article class="item-card">
    <div>
        <a href="index.php?page=artist&id=<?= $row['artist_id'] ?>" class="artist overflow"><?= $row['artist'] ?></a>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title overflow"><?= $row['label'] ?></a>
    </div>
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <!-- <img src="<?= album_cover($row) ?> " alt="album cover"> -->
        <img src="img/covers/512x512.svg" alt="placeholder">

    </a>
    <div class="item-info">
        <span><?=
                $row['genre']
                ?></span>
        <footer>
            <span class="price"><?= $row['price'] . '' ?></span>
            <button>Buy</button>
        </footer>
    </div>
</article>