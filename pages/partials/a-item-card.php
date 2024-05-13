<article class="item-card">
    <div>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title"><?= $row['label'] ?></a>
    </div>
    <a href="index.php?page=item&id=<?= $row['id'] ?>">
        <!-- <img src="<?= album_cover($row) ?> " alt="album cover"> -->
        <img src="./img/covers/plini-sweet-nothings.jpg" alt="album cover">

    </a>
</article>