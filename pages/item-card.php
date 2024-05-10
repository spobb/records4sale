<article class="item-card">
    <div>
        <a href="#" class="artist"><?= $row['artist'] ?></a>
        <a href="index.php?page=item&id=<?= $row['id'] ?>" class="title"><?= $row['label'] ?></a>
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
            <form action="index.php?page=item" method="get" name="review-form">
                <button>Review</button>
            </form>
            <span class="price"><?= $row['price'] . '' ?></span>
            <button>Buy</button>
        </footer>
    </div>
</article>