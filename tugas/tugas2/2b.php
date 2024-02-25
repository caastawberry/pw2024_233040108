<?php

for ($i = 1; $i <= 10; $i++) {
    for ($c = 1; $c <= $i; $c++){
        echo "$c";
        if ($c == $i){
            echo "<br>";
        }
    }
}