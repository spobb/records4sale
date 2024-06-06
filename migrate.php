<?php
require_once 'connection.php';

$sql = 'SELECT `email`, `password` FROM `user`';
$stmt = $pdo->query($sql);
$users = $stmt->fetchAll();

foreach ($users as $row) {
    if (!str_starts_with($row['password'], '$2y$')) {
        $hashed = password_hash($row['password'], PASSWORD_DEFAULT);

        $sql = 'UPDATE user SET `password` = ? WHERE email = ?';
        $stmt = $pdo->prepare($sql);
        $stmt->execute([$hashed, $row['email']]);
    }
}
