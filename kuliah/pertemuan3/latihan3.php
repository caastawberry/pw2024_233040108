<?php
echo "Mulai <br>";
$nilai_awal = 5;
while($nilai_awal <= 100 ) {
    echo "Hello World! $nilai_awal x<br>";
    $nilai_awal = $nilai_awal + 5;
    //$nilai_awal += 5;
}
echo "Selesai <br>";

echo "<hr>";
echo "Mulai <br>";
for ($i = 10; $i >= 1; $i -- ){
    //i=nilai_awal
    //untuk menambah 1 bisa disingkat dengan ++
    echo "Hello World $i x! <br>";   
}

echo "Selesai <br>";
