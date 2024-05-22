<?php
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
        <div class="item-image">
            <img src="<?php if (array_key_exists($res['id'], $images)) { ?>
                public/images/covers/<?= $res['artist_id'] ?>/<?= $res['id'] ?>/<?= $images[$res['id']][0]; ?>
            <?php } else { ?>
                https://picsum.photos/seed/<?= $res['id'] ?>/300/300
            <?php } ?>
            " alt="album cover">
            <div class="column-wrapper item-info">
                <a href="index.php?page=artist&id=<?= $res['artist_id'] ?>"
                    class="artist overflow"><?= $res['artist'] ?></a>
                <span><?= $res['genre'] ?></span>
                <span><?= $res['release'] ?></span>
            </div>
        </div>
        <ol class="tracklist">
            <li class="song">song 01</li>
            <li class="song">song 02</li>
            <li class="song">song 03</li>
            <li class="song">song 04</li>
            <li class="song">song 05</li>
            <li class="song">song 06</li>
            <li class="song">song 07</li>
            <li class="song">song 08</li>
            <li class="song">song 09</li>
            <li class="song">song 10</li>
            <li class="song">song 11</li>
            <li class="song">song 12</li>
            <li><?php if ($res['runtime'] <= 0) {
                if ($res['runtime'] > 60) {
                    $h = floor($res['runtime'] / 60);
                    $m = $res['runtime'] % 60;
                    printf("runtime: %d hr %02d min", $h, $m);
                } else
                    echo 'runtime:' . $res['runtime'] . ' min';
            }
            ?></li>
        </ol>
        <footer id="review">
            <?php require 'pages/partials/review.php' ?>
        </footer>
    </div>
</main>