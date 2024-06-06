<?php

// fetches the album cover image based on title and artist name in database

$images = [];
$dir = 'public/images/covers';

$artists = scandir($dir);

foreach ($artists as $artist) {
    if ($artist == '.' or $artist == '..') {
        continue;
    }
    $albums = scandir($dir . '/' . $artist);
    foreach ($albums as $album) {
        if ($album == '.' or $album == '..') {
            continue;
        }
        $files = scandir($dir . '/' . $artist . '/' . $album);
        foreach ($files as $file) {
            if ($file == '.' or $file == '..') {
                continue;
            }
            $images[$album][] = $file;
        }
    }
}

function format_string($str)
{
    $str = str_replace(' ', '-', $str);
    $str = preg_replace('/[:,;]/', '', $str);
    return strtolower($str);
}
// function album_cover($res)
// {
//     $dir = 'public/images/covers';
//     $ret = sprintf('%s/%s/%s/', $dir, $res['artist'], $res['label']);
//     $file = sprintf('%s-%s.jpg', $res['artist'], $res['label']);
//     $ret = format_string($ret .= $file);
//     file_exists($ret) ? $ret : $ret = 'https://picsum.photos/seed/seed/300/300';
//     return $ret;
// }

function create_folders(array $results)
{
    $dir = "public/images/covers/" . $results['artist_id'] . "/" . $results['id'];

    if (!file_exists($dir)) {
        mkdir($dir, 0777, true);
    }
}

// validate login credentials

function validate_credentials($user, $pass, $pdo)
{
    $sql = 'SELECT * FROM `user` WHERE `email` = ?';
    $stmt = $pdo->prepare($sql);
    $stmt->execute([$user]);
    $users = $stmt->fetch();

    var_dump($pass, $users, password_verify($pass, $users['password']));

    return (!empty($users) && password_verify($pass, $users['password']));
}
