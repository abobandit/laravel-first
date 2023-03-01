<?php
function detect_pangram($string)
{
    return array_map(function ($string) {
       $string = strtolower($string);

    }, $string);
}

$text = "Это символ евро - '€'.";
$ara = `[2-6]+`;
"The quick brown fox jumps over the lazy dog." . array_map();