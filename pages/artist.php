<?php
include 'connection.php';
include 'include.php';

if (isset($_REQUEST['id'])) {
    $sql = sprintf(
        "SELECT i.id, i.label, i.price, i.artist_id, a.label as artist 
        FROM item i 
        LEFT JOIN artist a ON a.id = i.artist_id
        WHERE a.id = %d",
        $_REQUEST['id']
    );
    $statement = $pdo->query($sql);
    $res = $statement->fetch();
}
?>

<main>
    <img src="<?= album_cover($res) ?> " alt="album cover">
    <div>
        <div class="wrapper item-info">
            <a href="index.php?page=artist&id=<?= $res['artist_id'] ?>" class="artist"><?= $res['artist'] ?></a>
            <a href="index.php?page=item&id=<?= $res['id'] ?>" class="title"><?= $res['label'] ?></a>
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
        <?php include 'pages/review.html' ?>

    </footer>
</main>