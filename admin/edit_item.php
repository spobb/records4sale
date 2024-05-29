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
    $sql = 'SELECT * FROM item WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
}

$sql = 'SELECT * FROM artist ORDER BY label ASC';
$stmt = $pdo->query($sql);
$artists = $stmt->fetchAll();
$sql = 'SELECT * FROM genre ORDER BY label ASC';
$stmt = $pdo->query($sql);
$genres = $stmt->fetchAll();
$sql = 'SELECT * FROM category ORDER BY label ASC';
$stmt = $pdo->query($sql);
$categories = $stmt->fetchAll();
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
    <label for="genre">Genre</label>
    <select name="genre">
        <?php foreach ($genres as $g) {
            echo '<option ';
            if ($g['id'] == $record['genre_id']) {
                echo 'selected ';
            }
            printf('value="%s">%s</option>', $g['id'], $g['label']);
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

    <button class="button">Save</button>
</form>
<a href="index.php?page=listing" class="button">Cancel</a>