<?php
$page = 'home';

if (isset($_GET['page'])) {
    $page = 'pages/' . $_GET['page'] . '.php';
}
include 'pages/skeleton.php';
