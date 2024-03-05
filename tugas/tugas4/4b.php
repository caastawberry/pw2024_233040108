<?php

$hardware =["Motherboard", "Processor", "Hard Disk", "PC Coller", "VGA Card", "SSD"];
echo "<h2>Macam-macam perangkat keras komputer</h2><br>";

for($i =0; $i < count($hardware); $i++){
    $j = $i + 1;
    echo "$j. $hardware[$i]<br>";
}

echo "<h2>Macam-macam perangkat keras komputer</h2><br>";

array_push($hardware, "Card Reader", "Modem");
sort($hardware);

for($i =0; $i < count($hardware); $i++){
    $j = $i + 1;
    echo "$j. $hardware[$i]<br>";
}


