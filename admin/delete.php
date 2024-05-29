<?php
require_once '../connection.php';

$sql = "DELETE FROM " . $_POST['type'] . " WHERE id = ?";
$stmt = $pdo->prepare($sql);
$res = $stmt->execute([$_POST['id']]);

header('Location: index.php?page=listing');
