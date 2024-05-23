<?php
require_once '../connection.php';

// is an update ?
if (empty($_POST['id'])) {
    switch ($_POST['type']) {
        case 'item':
            var_dump($_POST);
            $sql = 'INSERT INTO item (label, price, `release`, runtime, artist_id, genre_id, category_id) VALUES (?, ?, ?, ?, ?, ?, ?)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $_POST['label'],
                $_POST['price'],
                $_POST['release'],
                $_POST['runtime'],
                $_POST['artist'],
                $_POST['genre'],
                $_POST['category']
            ]);
            break;
        default:
            $sql = 'INSERT INTO ' . $_POST['type'] . ' (label) VALUES (?)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST['label']]);
            break;
    }
} else {
    switch ($_POST['type']) {
        case 'item':
            var_dump($_POST);
            $sql = 'UPDATE item SET label=?, price=?, `release`=?, runtime=?, artist_id=?, genre_id=?, category_id=? WHERE id = ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                $_POST['label'],
                $_POST['price'],
                $_POST['release'],
                $_POST['runtime'],
                $_POST['artist'],
                $_POST['genre'],
                $_POST['category'],
                $_POST['id'],
            ]);
            break;
        default:
            $sql = 'UPDATE ' . $_POST['type'] . ' SET label = ? WHERE id = ?';
            $stmt = $pdo->prepare($sql);
            $stmt->execute([$_POST['label'], $_POST['id']]);
            break;
    }
}
header('Location: index.php?page=listing');
