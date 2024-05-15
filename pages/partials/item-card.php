<article class="item-card">
    <div class="item-names">
        <a href="index.php?page=artist&id=<?= $row['artist_id'] ?>" class="artist overflow"><?= $row['artist'] ?></a>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title overflow"><?= $row['label'] ?></a>
    </div>
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <img src="<?php $img = album_cover($row);
                    if (!file_exists($img)) {
                        $img = 'https://picsum.photos/seed/' . $row['label'] . '/300/300';
                    }
                    echo $img; ?>" alt="album cover">
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