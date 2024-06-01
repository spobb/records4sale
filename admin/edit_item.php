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
    'genre_ids' => '',
    'song_ids' => ''
];

// check if ID is set

if (!empty($_GET['id'])) {
    $sql = 'SELECT item.*, GROUP_CONCAT(DISTINCT genre.id) as genre_ids
    ,GROUP_CONCAT(DISTINCT song.id) as song_ids
    FROM item 
    LEFT JOIN item_genre ON item_genre.item_id = item.id
    LEFT JOIN genre ON item_genre.genre_id = genre.id 
    LEFT JOIN tracklist ON tracklist.item_id = item.id
    LEFT JOIN song ON tracklist.song_id = song.id 
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

//song query

$sql = 'SELECT * FROM song ORDER BY label ASC';
$stmt = $pdo->query($sql);
$songs = $stmt->fetchAll();

$genre = explode(',', $record['genre_ids']);
$song = explode(',', $record['song_ids']);

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
            echo '<div><input type="checkbox" value="' . $g['id'] . '" name="genre[]" id="genre_' . $g['id'] . '"';
            echo in_array($g['id'], $genre) ? 'checked' : '';
            echo '><label for="genre_' . $g['id'] . '">' . $g['label'] . '</label></div>';
        }
        ?>
    </fieldset>
    <hr>
    <div class="tags multi-select-selected">
    </div>
    <label for="song[]">Pick your songs:</label>
    <select class="multi-select" name="song[]">
        <?php
        foreach ($songs as $s) {
            echo '<option value="' . $s['id'] . '" id="song_' . $s['id'] . '">' . $s['label'] . '</option>';
            // echo in_array($s['id'], $song) ? 'checked' : '';

            // echo '<span>Title: ' . $s['label'] . ' ID: ' . $s['id'] . '</span><br>';
        }
        ?>
    </select>

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

<script src="js/select.js"></script>