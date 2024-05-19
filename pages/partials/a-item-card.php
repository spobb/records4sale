<article class="item-card">
    <a href="index.php?page=item&id=<?= $res['id'] ?>">
        <img src="<?php if (array_key_exists($res['id'], $images)) { ?>
            public/images/covers/<?= $res['artist_id'] ?>/<?= $res['id'] ?>/<?= $images[$res['id']][0]; ?>
        <?php } else { ?>
            https://picsum.photos/seed/<?= $res['artist'] ?>/300/300
        <?php } ?>
        " alt="album cover">
    </a>
    <div>
        <a href="index.php?page=item&id=<?= $res['id'] ?>" class="title overflow"><?= $res['label'] ?></a>
    </div>
</article>