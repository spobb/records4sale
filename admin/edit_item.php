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


function create_input(string $name, string $type, $value)
{
    $r = '';
    if ($type == 'hidden' or $name == 'type') {
        $r .= '<input type="' . $type . '" name="' . $name . '" value="' . $value . '" readonly>';
    } else {
        $r .= '<label for="' . $name . '">' . $name . '</label>';
        $r .= '<input type="' . $type . '" name="' . $name . '" value="' . $value . '">';
    }
    return $r;
}

function create_select(string $name, array $table, array $record)
{
    $ret = '';
    $ret .= sprintf('<label for "%1$s">%1$s</label><select name="%1$s">', $name);
    foreach ($table as $t) {
        if ($t['id'] === $record[$name . '_id']) {
            $ret .= sprintf('<option value="%d"selected>%s</option>', $t['id'], $t['label']);
        } else {
            $ret .= sprintf('<option value="%d">%s</option>', $t['id'], $t['label']);
        }
    }
    return $ret .= '</select>';
}
?>

<form action="save.php" method="POST" class="form">
    <?php
    echo create_input('type', 'text', $_GET['type']),
    create_input('id', 'hidden', $record['id']),
    create_input('label', 'text', $record['label']),
    create_input('price', 'number', $record['price']),
    create_input('release', 'number', $record['release']),
    create_input('runtime', 'number', $record['runtime']);
    ?>
    <!-- 
    <input type="hidden" name="id" value="<?= $record['id']; ?>" readonly>

    <label for="label">Label</label>
    <input type="text" name="label" value="<?= $record['label']; ?>">

    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" value="<?= $record['price']; ?>">

    <label for="release">Release Date</label>
    <input type="number" name="release" value="<?= $record['release']; ?>">

    <label for="runtime">Runtime</label>
    <input type="number" name="runtime" value="<?= $record['runtime']; ?>"> -->

    <?php
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
            if (in_array($g['id'], $genre)) {
                echo 'checked';
            }
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