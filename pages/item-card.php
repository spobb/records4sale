<article class="item-card">
    <div>
        <a href="#" class="artist"><?= $results[$i]['artist'] ?></a>
        <h2 class="title"><?= $results[$i]['label'] ?></h2>
    </div>
    <img src="img/covers/ghost.jpg" alt="album cover">
    <!-- <p><?= $results[$i]['release'] ?></p> -->
    <!-- <p><?= $results[$i]['runtime'] ?></p> -->
    <div>
        <p><?=
            // $results[$i]['category'] . '<br>' .
            $results[$i]['genre']
            ?></p>
        <footer>
            <button>Review</button>
            <span class="price"><?= $results[$i]['price'] . '' ?></span>
            <button>Buy</button>
        </footer>
    </div>
</article>