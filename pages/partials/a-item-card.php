<article class="item-card">
    <div>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title overflow"><?= $row['label'] ?></a>
    </div>
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <!-- <img src="<?= album_cover($row) ?> " alt="album cover"> -->
        <img src="img/covers/512x512.svg" alt="placeholder">
    </a>
</article>