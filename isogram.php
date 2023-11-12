<?php

print("================================");
function isisogram($string)
{
    $string = strtolower($string);

    $string = str_replace(' ','',$string);

    $string = preg_replace('/[^A-Za-z0-9\-]/','',$string);

    foreach(range('a','z') as $i){
        if(substr_count($string, $i) >1)
        {
            echo "</p>To nie jest Isogram</p>";
            exit();
        }
        
    }
    echo "</p>To jest Isogram</p>";


}
$string ="ABCDEFa";
isisogram($string);
?>
