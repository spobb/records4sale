<?php
require_once('connection.php');

$sql = 'SELECT item.id, item.label, item.price, item.runtime, c.label as category, g.label as genre, a.label as artist 
FROM `item`
LEFT JOIN category c ON c.id = item.category_id
LEFT JOIN genre g ON g.id = item.genre_id
LEFT JOIN artist a ON a.id = item.artist_id;';
$statement = $pdo->query($sql);
$results = $statement->fetchAll();

// include('home.html');
?>

<h1>RECORDS</h1>
<section class="item-catalog">
    <?php
    for ($i = 0; $i < count($results); ++$i) {
        include 'item-card.php';
    }
    ?>
</section>