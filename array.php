<?php

$array = ["a", 10, "b", "hola", 122, 15];
$numbers = [];
$letters = [];


foreach ($array as $el) {
    if (is_numeric($el)) {
        array_push($numbers, $el);
    } else if (strlen($el) == 1) {
        array_push($letters, $el);
    }
}

echo "Array Percorrido: " . json_encode($array);
echo "\r\nNúmeros: " . json_encode($numbers);
echo "\r\nLetras: " . json_encode($letters);
echo "\r\nMaior Número: " . max($numbers);
