<?php
function urutanAngka ($angka) {
    $h = 1;
    for ($i = 1; $i <= $angka ; $i++) {
        for($j = 1; $j <= $i; $j++) {
            echo "$h ";
            $h++;
            if ($j == $i) {
                echo "<br>";
            }
        }
    }
}

echo urutanAngka(5);

