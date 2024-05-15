<article class="item-card">
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <img src="<?php $img = album_cover($row);
                    if (!file_exists($img)) {
                        $img = 'https://picsum.photos/seed/' . $row['label'] . '/300/300';
                    }
                    echo $img; ?>" alt="album cover">
    </a>
    <div>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title overflow"><?= $row['label'] ?></a>
    </div>
</article>