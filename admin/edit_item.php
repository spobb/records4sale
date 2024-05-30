<?php

// initialize empty array

$record = [
    'id' => '',
    'label' => '',
    'price' => '',
    'release' => '',
    'runtime' => '',
    'artist' => '',
    'genre' => '',
    'category' => '',
    'artist_id' => '',
    'category_id' => '',
    'genre_ids' => ''
];

// check if ID is set

if (!empty($_GET['id'])) {
    $sql = 'SELECT item.*, GROUP_CONCAT(genre.id) as genre_ids  
    FROM item 
    LEFT JOIN item_genre ON item_genre.item_id = item.id
    LEFT JOIN genre ON item_genre.genre_id = genre.id 
    WHERE item.id = ?
    GROUP BY item.id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
}
//artist query

$sql = 'SELECT * FROM artist ORDER BY label ASC';
$stmt = $pdo->query($sql);
$artists = $stmt->fetchAll();

//category query

$sql = 'SELECT * FROM category ORDER BY label ASC';
$stmt = $pdo->query($sql);
$categories = $stmt->fetchAll();

//genre query

$sql = 'SELECT * FROM genre ORDER BY label ASC';
$stmt = $pdo->query($sql);
$genres = $stmt->fetchAll();

// item_genres query

$sql = "SELECT *, i.label as item, g.label as genre 
FROM item_genre ig 
JOIN item i ON i.id = ig.item_id 
JOIN genre g ON g.id = ig.genre_id 
ORDER BY g.label ASC";
$stmt = $pdo->query($sql);
$item_genres = $stmt->fetchAll();

?>

<form action="save.php" method="POST" class="form">
    <?php
    echo
    create_input('type', 'text', $_GET['type']),
    create_input('id', 'hidden', $record['id']),
    create_input('label', 'text', $record['label']),
    create_input('price', 'number', $record['price']),
    create_input('release', 'number', $record['release']),
    create_input('runtime', 'number', $record['runtime']);

    echo create_select('artist', $artists, $record);
    echo create_select('category', $categories, $record);
    ?>

    <div class="tags">
        <?php
        $genre = explode(',', $record['genre_ids']);
        foreach ($genres as $g) {
            if (in_array($g['id'], $genre)) {
                printf('<span class="tag">
                            <a href="index.php?page=delete_item_genre&genre_id=%d&item_id=%d">X</a>
                        %s</span>', $g['id'], $record['id'], $g['label']);
            }
        }
        ?>
    </div>
    <fieldset>
        <?php
        foreach ($genres as $g) {
            echo '<div><input type="checkbox" value="' . $g['id'] . '" name="genre[]" id="' . $g['id'] . '"';
            echo in_array($g['id'], $genre) ? 'checked' : '';
            echo '><label for="' . $g['id'] . '">' . $g['label'] . '</label></div>';
        }
        ?>
    </fieldset>
    <!-- <label for="genre">Select genres:
        <select name="genre" class="multi-select"></select>
    </label> -->

    <button class="button save">Save</button>
</form>
<a href="index.php?page=listing" class="button cancel">Cancel</a>
<form action="delete.php" method="POST" class="form">
    <input type="hidden" name="type" value="<?= $_GET['type']; ?>" readonly>
    <input type="hidden" name="id" value="<?= $record['id']; ?>" readonly>
    <input type="hidden" name="confirmed" value="false" readonly>
    <input type="hidden" name="label" value="<?= $record['label']; ?>" readonly>
    <button class="button delete">Delete</button>
</form>

<script src="js/multiselect.js"></script>