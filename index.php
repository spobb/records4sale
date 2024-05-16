<?php
//database connection

require_once 'pages/connection.php';
require_once 'pages/include.php';

$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.php');
}

require_once 'skeleton.php';
