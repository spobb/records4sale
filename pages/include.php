<?php

// fetches the album cover image based on title and artist name in database

function album_cover($result)
{
    $ret = sprintf('./img/covers/%s-%s.jpg', $result['artist'], $result['label']);
    $ret = str_replace(' ', '-', $ret);
    return strtolower($ret);
}
