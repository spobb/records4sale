<?php
require 'connection.php';
require 'include.php';

if (isset($_REQUEST['action'])) {
    switch ($_REQUEST['action']) {
        case 'search':
            $sql = sprintf(
                "SELECT
                    i.id,
                    (
                    SELECT
                        i.label
                    WHERE
                        i.label LIKE '%%%s%%'
                ) AS label,
                i.price,
                i.runtime,
                c.label AS category,
                g.label AS genre,
                a.label AS artist
                FROM
                    item i
                LEFT JOIN category c ON
                    c.id = i.category_id
                LEFT JOIN genre g ON
                    g.id = i.genre_id
                LEFT JOIN artist a ON
                    a.id = i.artist_id AND i.label LIKE '%%%s%%'",
                $_REQUEST['search'],
                $_REQUEST['search']
            );
            break;
        case 'register':
            echo 'registered!';
            break;
        case 'identify':
            echo 'identified';
            break;
        default:
            echo 'no action specified!';
            break;
    }
} else {
    $sql = sprintf(
        "SELECT i.id, i.label, i.price, i.runtime, c.label as category, g.label as genre, a.label as artist 
        FROM item i
        LEFT JOIN category c ON c.id = i.category_id 
        LEFT JOIN genre g ON g.id = i.genre_id 
        LEFT JOIN artist a ON a.id = i.artist_id"
    );
}

$statement = $pdo->query($sql);
$results = $statement->fetchAll();

?>

<main>
    <h1>Our records</h1>
    <section class="item-catalog">
        <?php
        foreach ($results as $row) {
            if ($row['label'])
                include 'item-card.php';
        }
        ?>
    </section>
</main>