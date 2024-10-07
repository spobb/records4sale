<article class="item-card">
    <div class="item-names">
        <!-- <a href="index.php?page=artist&id=<?= $res['artist_id'] ?>" class="artist overflow"><?= $res['artist'] ?></a>
        <a href="index.php?page=item&id=<?= $res['id'] ?>" class="title overflow"><?= $res['label'] ?></a> -->
        <span class="artist overflow"><?= $res['artist'] ?></span>
        <span class="title overflow"><?= $res['label'] ?></span>
    </div>
    <a href="index.php?page=item&id=<?= $res['id'] ?>">
        <img src="<?php if (array_key_exists(key: $res['id'], array: $images)) { ?>
            public/images/covers/<?= $res['artist_id'] ?>/<?= $res['id'] ?>/<?= $images[$res['id']][0]; ?>
        <?php } else { ?>
            public/assets/placeholder.svg
            <?php } ?>
            "
            alt="<?= $res['label'] . ' by ' . $res['artist'] ?>">
    </a>
    <div class="item-info">
        <!-- <span><?=
                    $res['genre']
                    ?></span> -->
        <footer>
            <span class="price"><?= $res['price'] . '' ?></span>
            <button>Add</button>
        </footer>
    </div>
</article>