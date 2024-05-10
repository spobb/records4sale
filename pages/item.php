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
    <a href="index.php?page=artist&id=<?= $res['artist_id'] ?>" class="artist"><?= $res['artist'] ?></a>
    <a href="index.php?page=item&id=<?= $res['id'] ?>" class="title"><?= $res['label'] ?></a>
    <span><?= $res['genre'] ?></span>
    <span><?= $res['release'] ?></span>
    <img src="<?= album_cover($res) ?> " alt="album cover">
    <div class="tracklist">
        <span>song01</span>
        <span>song02</span>
        <span>song03</span>
        <span>song04</span>
        <span>song05</span>
        <span>song06</span>
        <span>song07</span>
        <span>song08</span>
        <span><?= $res['runtime'] ?></span>
    </div>
    <footer id="review">
        <?php include 'pages/review.php' ?>

    </footer>
</main>