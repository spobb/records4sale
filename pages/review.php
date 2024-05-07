<?php
$sql = "SELECT i.id, i.label, i.price, c.label as category, g.label as genre, a.label as artist 
        FROM item i
        LEFT JOIN category c ON c.id = i.category_id 
        LEFT JOIN genre g ON g.id = i.genre_id 
        LEFT JOIN artist a ON a.id = i.artist_id";

$statement = $pdo->query($sql);
$results = $statement->fetchAll();
?>
$row['label']

<h1>Review of:</h1>
<section>
    <div class="flex-wrapper">
        <form action="" method="POST">
            <label for="message"></label>
            <textarea name="message" cols="30" rows="10" placeholder="Write a review..."></textarea>

            <button>Send</button>
        </form>
    </div>
</section>