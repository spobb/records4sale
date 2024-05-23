<?php
require_once '../connection.php';

// is an update ?
if (empty($_POST['id'])) {
    switch ($_POST['type']) {
        case 'artist':
            $sql = 'INSERT INTO artist (label) VALUES (:label)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['label' => $_POST['label']]);
            break;
        case 'genre':
            $sql = 'INSERT INTO genre (label) VALUES (:label)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['label' => $_POST['label']]);
            break;
        case 'category':
            $sql = 'INSERT INTO category (label) VALUES (:label)';
            $stmt = $pdo->prepare($sql);
            $stmt->execute(['label' => $_POST['label']]);
            break;
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
    }
} else {
    $sql = 'UPDATE genre SET label = ? WHERE id = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$_POST['label'], $_POST['id']]);
}
header('Location: index.php?page=listing');
