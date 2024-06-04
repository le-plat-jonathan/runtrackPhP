<?php

function convertToLeetSpeak($text) {
    
    $leetSpeakMap = [
        'a' => '4', 'b' => '8', 'c' => '(C)', 'd' => '3', 'e' => '3',
        'f' => '(F)', 'g' => '9', 'h' => '(H)', 'i' => '1', 'j' => '(J)',
        'k' => 'K', 'l' => '7', 'm' => '(M)', 'n' => 'N', 'o' => '0',
        'p' => '(P)', 'q' => '(Q)', 'r' => 'R', 's' => '$', 't' => '7',
        'u' => '(V)', 'v' => 'V', 'w' => '(W)', 'x' => 'X', 'y' => '(Y)',
        'z' => 'Z'
    ];

    $convertedText = '';
    foreach (str_split(strtolower($text)) as $char) {
        if (isset($leetSpeakMap[$char])) {
            $convertedText.= $leetSpeakMap[$char];
        } else {
            $convertedText.= $char;
        }
    }
    return $convertedText;
}

$text = "Hello World!";
$leetSpeakText = convertToLeetSpeak($text);
echo $leetSpeakText; 

?>
