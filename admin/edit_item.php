<?php

$record = [
    'id' => '',
    'label' => '',
    'price' => '',
    'release' => '',
    'runtime' => '',
    'artist' => '',
    'genre' => '',
    'category' => ''
];

if (isset($_GET['id'])) {
    $sql = 'SELECT * FROM item WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_GET['id']]);
    $record = $stmt->fetch();
}

$sql = 'SELECT * FROM artist';
$stmt = $pdo->query($sql);
$artists = $stmt->fetchAll();
$sql = 'SELECT * FROM genre';
$stmt = $pdo->query($sql);
$genres = $stmt->fetchAll();
$sql = 'SELECT * FROM category';
$stmt = $pdo->query($sql);
$categories = $stmt->fetchAll();
?>

<form action="save.php" method="POST" class="form">
    <label for="type">Type</label>
    <input type="text" name="type" value="<?= $_GET['type']; ?>" readonly>

    <label for="id">ID</label>
    <input type="text" name="id" value="<?= $record['id']; ?>" readonly>

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
        <?php foreach ($artists as $a) {
            printf('<option value="%s">%s</option>', $a['id'], $a['label']);
        } ?>
    </select>
    <label for="genre">Genre</label>
    <select name="genre">
        <?php foreach ($genres as $g) {
            printf('<option value="%s">%s</option>', $g['id'], $g['label']);
        } ?>
    </select>
    <label for="category">Category</label>
    <select name="category">
        <?php foreach ($categories as $g) {
            printf('<option value="%s">%s</option>', $g['id'], $g['label']);
        } ?>
    </select>

    <button class="button">Save</button>
</form>