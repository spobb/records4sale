<article class="item-card">
    <a href="#"><?= $results[$i]['artist_id'] ?></a>
    <h2><?= $results[$i]['label'] ?></h2>
    <img src="img/covers/ghost.jpg" alt="album cover">
    <!-- <p><?= $results[$i]['release'] ?></p> -->
    <!-- <p><?= $results[$i]['runtime'] ?></p> -->
    <div>
        <p><?= $results[$i]['category_id'] . '<br>' . $results[$i]['genre_id'] ?></p>
        <footer>
            <button>Review</button>
            <span class="price"><?= $results[$i]['price'] . '' ?></span>
            <button>Buy</button>
        </footer>
    </div>
</article>