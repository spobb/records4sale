<article class="item-card">
    <div>
        <a href="#" class="artist"><?= $row['artist'] ?></a>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title"><?= $row['label'] ?></a>
    </div>
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <img src="<?= album_cover($row) ?> " alt="album cover">
    </a>
    <div>
        <span><?=
                $row['genre']
                ?></span>
        <footer>
            <span class="price"><?= $row['price'] . '' ?></span>
            <button>Buy</button>
        </footer>
    </div>
</article>