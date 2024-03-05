<?php

// Array tipe data yang digunakan unutk mendeskripsikan kumpulan elemen (nilai atau variable), yang tiap-tiap elemennya memiliki index.
// bisa menyimpan lebih dari satu.Array adalah variable yang sakti karena bisa menampung lebih dari satu.
// contoh: $hari = array ('Senin','Selasa','Rabu','kamis'); ini cara lama
// $hari = ['icha', 'aprilia'];
// semua index mulainya dari 0 bukan 1
// 1. Membuat Array
$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$mahasiswa = ["Sandhika", 2.5, false];

// 2. mencetak isi Array
// Mencetak 1 elemen pada array namun ada syaratnya yaitu menggunakan index 
echo $hari[2];
echo "<br>";
echo $bulan[0];
echo "<br>";
echo "$mahasiswa[1]";
echo "<hr>";

// Mencetak seluruh isi array
// digunakan khusus untuk debugging
// var_dump() atau print_r()
var_dump($hari); //untuk informasi lengkap
echo "<br>";
print_r($bulan);
echo "<br>";
var_dump($mahasiswa);
echo "<br>";
print_r($mahasiswa);
echo "<hr>";

// 3. Memanipulasi (nambah,ngedit,hapus isi Array)
// Menambah isi array
// di akhir array: [] atau array_push()
$hari[] = "Kamis";
$hari[] = "Jum'at";
print_r($hari);
echo "<br>";
array_push($bulan, "April", "Mei");
print_r($bulan);
echo "<br>";

// di awal array: array_unshift()
array_unshift($mahasiswa, "233040108");
print_r($mahasiswa);

echo "<hr>";

// Menghapus isi array
// di akhir: array_pop()
// di awal: array_shift()
array_pop($hari);
print_r($hari);
echo "<br>";
array_shift($bulan);
print_r($bulan);