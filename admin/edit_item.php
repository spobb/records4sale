<?php

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
    'genre_id' => '',
    'category_id' => ''
];

if (isset($_GET['id'])) {
    $sql = 'SELECT item.*, GROUP_CONCAT(genre.id) as genre_ids  
        FROM item 
        JOIN item_genre ON item_genre.item_id = item.id
        JOIN genre ON item_genre.genre_id = genre.id 
        WHERE item.id = ?
        GROUP BY item.id';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
}

$sql = 'SELECT * FROM artist ORDER BY label ASC';
$stmt = $pdo->query($sql);
$artists = $stmt->fetchAll();
$sql = 'SELECT * FROM category ORDER BY label ASC';
$stmt = $pdo->query($sql);
$categories = $stmt->fetchAll();
$sql = 'SELECT * FROM genre ORDER BY label ASC';
$stmt = $pdo->query($sql);
$genres = $stmt->fetchAll();

?>

<form action="save.php" method="POST" class="form">
    <label for="type">Type</label>
    <input type="text" name="type" value="<?= $_GET['type']; ?>" readonly>

    <input type="hidden" name="id" value="<?= $record['id']; ?>" readonly>

    <label for="label">Label</label>
    <input type="text" name="label" value="<?= $record['label']; ?>">

    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" value="<?= $record['price']; ?>">

    <label for="release">Release Date</label>
    <input type="number" name="release" value="<?= $record['release']; ?>">

    <label for="runtime">Runtime</label>
    <input type="number" name="runtime" value="<?= $record['runtime']; ?>">

    <label for="artist">Artist</label>
    <select name="artist">
        <?php
        foreach ($artists as $a) {
            echo '<option ';
            if ($a['id'] == $record['artist_id']) {
                echo 'selected ';
            }
            printf('value="%s">%s</option>', $a['id'], $a['label']);
        } ?>
    </select>
    <label for="category">Category</label>
    <select name="category">
        <?php foreach ($categories as $c) {
            echo '<option ';
            if ($c['id'] == $record['category_id']) {
                echo 'selected ';
            }
            printf('value="%s">%s</option>', $c['id'], $c['label']);
        } ?>
    </select>

    <div class="tags">

        <?php
        $genre = explode(',', $record['genre_ids']);
        foreach ($genres as $g) {
            if (in_array($g['id'], $genre)) {
                printf('<span class="tag">%s</span>', $g['label']);
            }
        }
        ?>
    </div>

    <fieldset>
        <legend>Select genres</legend>
        <?php
        $sql = "SELECT *, i.label as item, g.label as genre 
        FROM item_genre ig 
        JOIN item i ON i.id = ig.item_id 
        JOIN genre g ON g.id = ig.genre_id 
        ORDER BY g.label ASC";
        $stmt = $pdo->query($sql);
        $item_genres = $stmt->fetchAll();

        foreach ($genres as $g) {
            printf('<div><input type="checkbox" value="%d" name="genre[]" id="%d"><label for="%d">%s</label></div>', $g['id'],  $g['id'], $g['id'], $g['label']);
        }

        ?>
    </fieldset>

    <button class="button">Save</button>
</form>
<a href="index.php?page=listing" class="button">Cancel</a>