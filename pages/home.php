<?php
require 'connection.php';
require 'include.php';

if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'search':
            $sql = sprintf(
                "SELECT i.id, i.label, i.price, i.runtime, c.label AS category, g.label AS genre, a.label AS artist, i.artist_id 
                FROM item i
                LEFT JOIN category c ON c.id = i.category_id
                LEFT JOIN genre g ON g.id = i.genre_id
                LEFT JOIN artist a ON a.id = i.artist_id
                WHERE i.label LIKE '%%%s%%' OR a.label LIKE '%%%s%%'",
                $_REQUEST['search'],
                $_REQUEST['search']
            );
            $statement = $pdo->query($sql);
            $results = $statement->fetchAll();
            break;
        default:
            echo sprintf('%s is not a valid action', $_REQUEST['action']);
            $sql = sprintf(
                "SELECT i.id, i.label, i.price, i.runtime, c.label as category, g.label as genre, a.label as artist, i.artist_id 
                FROM item i
                LEFT JOIN category c ON c.id = i.category_id 
                LEFT JOIN genre g ON g.id = i.genre_id 
                LEFT JOIN artist a ON a.id = i.artist_id"
            );
            $statement = $pdo->query($sql);
            $results = $statement->fetchAll();
            break;
    }
} else {
    $sql = sprintf(
        "SELECT i.id, i.label, i.price, i.runtime, c.label as category, g.label as genre, a.label as artist, i.artist_id 
        FROM item i
        LEFT JOIN category c ON c.id = i.category_id 
        LEFT JOIN genre g ON g.id = i.genre_id 
        LEFT JOIN artist a ON a.id = i.artist_id"
    );
    $statement = $pdo->query($sql);
    $results = $statement->fetchAll();
}

?>
<?php include_once 'partials/hero.html'; ?>
<main>

    <h1>Our records</h1>
    <section class="item-catalog column-wrapper">
        <?php
        foreach ($results as $row) {
            if ($row['label'])
                include 'partials/item-card.php';
        }
        ?>
    </section>
</main>