<?php
require_once('connection.php');

$sql = 'SELECT * FROM item';
$statement = $pdo->query($sql);
$results = $statement->fetchAll();
?>
<section>
    <h1>RECORDS</h1>
    <article>
        <?php
        for ($i = 0; $i < count($results); ++$i) {
            include 'item-card.php';
        }
        ?>
    </article>
</section>