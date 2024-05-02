<?php
require_once('connection.php');

$sql = 'SELECT * FROM item';
$statement = $pdo->query($sql);
$results = $statement->fetchAll();
?>
<h1>RECORDS</h1>
<section class="item-catalog">
    <?php
    for ($i = 0; $i < count($results); ++$i) {
        include 'item-card.php';
    }
    ?>
</section>