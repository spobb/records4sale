<?php
require '../connection.php';

$page = 'listing.php';

if (isset($_GET['page'])) {
    $page = $_GET['page'] . '.php';
}

$sql = "SELECT * FROM genre g";
$statement = $pdo->query($sql);
$results = $statement->fetchAll();

require 'backend.php';
