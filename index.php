<?php
$page = 'home';

if (isset($_GET['page'])) {
    $page = realpath('pages/' . $_GET['page'] . '.php');
}
include 'skeleton.php';
