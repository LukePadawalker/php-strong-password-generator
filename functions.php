<?php

function randomPasswordGenerator($length)
{
    $character = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()-_';
    $character_length = strlen($character);
    $password = '';

    for ($i = 0; $i < $length; $i++) {
        $number = rand(0, $character_length - 1);
        $password .= $character[$number];
    }
    return
        $password;
}

?>