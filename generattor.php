<?php

class RandString
{
    function getRandomString($length = 16)
    {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $string = '';

        for ($i = 0; $i < $length; $i++) {
            $string .= $characters[mt_rand(0, strlen($characters) - 1)];
        }
        $string = substr_replace($string, "-", 4, 0);
        $string = substr_replace($string, "-", 9, 0);
        $string = substr_replace($string, "-", 14, 0);
        return $string;
    }
}
$gen = new RandString();
print_r($gen->getRandomString());
