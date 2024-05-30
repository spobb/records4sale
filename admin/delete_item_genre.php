<?php
require_once '../connection.php';

$sql = "DELETE FROM item_genre WHERE genre_id = ? AND item_id = ?";
$stmt = $pdo->prepare($sql);
$res = $stmt->execute([$_GET['genre_id'], $_GET['item_id']]);

header('Location: index.php?page=edit&type=item&id=' . $_GET['item_id']);
