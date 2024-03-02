<?php

echo "<h4> Menghitung Luas Lingkaran</h4>";
function hitungLuasLingkaran($r){
echo "Jari-jari = $r cm. <br>";
$s = ($r * $r) * 3.14;
echo "Luas Lingkaran = $s cm²";
}

hitungLuasLingkaran(10);

echo "<hr>";

echo "<h4> Menghitung Keliling Lingkaran</h4>";
function hitungKelilingLingkaran($r){
    echo "Jari-jari = $r cm. <br>";
$t = 2 *  3.14 * $r;
echo "Keliling Lingkaran = $t cm";

}

hitungKelilingLingkaran(20);

echo "<hr>";
