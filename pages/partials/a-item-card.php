<article class="item-card">
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <img src="<?= album_cover($row) ?>" alt="album cover">
    </a>
    <div>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title overflow"><?= $row['label'] ?></a>
    </div>
</article>