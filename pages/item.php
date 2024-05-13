<?php
include 'connection.php';
include 'include.php';

if (isset($_REQUEST['id'])) {
    $sql = sprintf(
        "SELECT i.id, i.label, i.price, i.artist_id, i.runtime, i.release, c.label as category, g.label as genre, a.label as artist 
        FROM item i 
        LEFT JOIN category c ON c.id = i.category_id 
        LEFT JOIN genre g ON g.id = i.genre_id 
        LEFT JOIN artist a ON a.id = i.artist_id
        WHERE i.id = %d",
        $_REQUEST['id']
    );
    $statement = $pdo->query($sql);
    $res = $statement->fetch();
}
?>

<main>
    <h1 class="overflow"><?= $res['label'] ?></h1>
    <div class="item-page">
        <!-- <img src="<?= album_cover($res) ?> " alt="album cover"> -->
        <img src="img/covers/512x512.svg" alt="placeholder">
        <div>
            <div class="wrapper item-info">
                <a href="index.php?page=artist&id=<?= $res['artist_id'] ?>" class="artist overflow"><?= $res['artist'] ?></a>
                <span><?= $res['genre'] ?></span>
                <span><?= $res['release'] ?></span>
            </div>
            <ol class="tracklist">
                <li>song 01</li>
                <li>song 02</li>
                <li>song 03</li>
                <li>song 04</li>
                <li>song 05</li>
                <li>song 06</li>
                <li>song 07</li>
                <li>song 08</li>
                <li>runtime: <?php if ($res['runtime'] > 60) {
                                    $h = floor($res['runtime'] / 60);
                                    $m = $res['runtime'] % 60;
                                    printf("%d hr %02d min", $h, $m);
                                } else echo $res['runtime'] . ' min'; ?></li>
            </ol>
        </div>
        <footer id="review">
            <?php include 'partials/review.html' ?>
        </footer>
    </div>
</main>