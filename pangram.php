<?php

print("================================");

function ispangram($string)
{
    $alphabet = range('a', 'z');

    $string = strtolower($string);

    $string = str_replace(' ', '', $string);

    $string = preg_replace('/[^a-z]/', '', $string);

    $unique_chars = array_unique(str_split($string));

    if (count($unique_chars) == count($alphabet)) {
        echo "</p>To jest Pangram</p>";
    } else {
        echo "</p>To nie jest Pangram</p>";
    }
}

$string = "Two driven jocks help fax my big quiz.​";
ispangram($string);
?>
