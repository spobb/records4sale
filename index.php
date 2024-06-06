<?php
//database connection
session_start();
$_SESSION['active'] ? true : false;

require_once 'connection.php';
require_once 'app/include.php';

$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.php');
}

require_once 'skeleton.php';
