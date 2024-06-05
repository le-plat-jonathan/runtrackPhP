<?php

function myStrLen($str) {
    $length = 0;
    while (isset($str[$length])) {
        $length++;
    }
    return $length;
}

function leetSpeak($str) {

    $leet = [
        'A' => '4', 'a' => '4',
        'B' => '8', 'b' => '8',
        'E' => '3', 'e' => '3',
        'G' => '6', 'g' => '6',
        'L' => '1', 'l' => '1',
        'S' => '5', 's' => '5',
        'T' => '7', 't' => '7'
    ];
    
    $result = '';
    
    for ($i = 0; $i < myStrLen($str); $i++) {
        $char = $str[$i];
        if (isset($leet[$char])) {
            $result .= $leet[$char];
        } else {
            $result .= $char;
        }
    }
    
    return $result;
}


$original = "HELLO WORLD !";
$converted = leetSpeak($original);
echo $converted;
?>
