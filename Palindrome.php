<?php

print("================================");
function ispalindrome($string)
{
    $string = strtolower($string);

    $string = str_replace(' ','',$string);

    $string = preg_replace('/[^A-Za-z0-9\-]/','',$string);

    $reverse = strrev($string);

    if ($string==$reverse) {
        echo "<p>To jest Palindrom</p>";
    } 
    else {
        echo "</p>To nie jest Palindrom</p>";
    }
}
$string ="Kamil Slimak";
ispalindrome($string);
?>
