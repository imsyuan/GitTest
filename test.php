<?php

/**
 * @return int|false
 */
function open_file(): int|false
{
    $fp = fopen('./composer.json', 'r');
    if($fp === false) {
        return false;
    }
    return fwrite($fp, "some string");
}