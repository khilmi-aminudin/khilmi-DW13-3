<?php

$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';

for ($j=0; $j < 3 ; $j++) { 
    for ($i=0; $i < 4 ; $i++) { 
        echo substr(str_shuffle($permitted_chars), 0, 4) . " ";
        
    }

    echo "<br/>";
}
?>