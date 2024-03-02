<?php
echo date("j/n/y");
//variabel awal nya haru spake dolar kalo fungsi namanya dulu baru () tujuannya agar fungsinya jalan
//mesinnya bisa kita kasir bahan aturannya, fungsinya menerima minimal 1,type datanya yaitu String (""),$format
//format d (tgl 2 digit) j(1 digit) D(3 huruf nama bulan) l (nama2 bulan b. inggris) M(Nama bulan 3 huruf) Y (TAHUN 2024)
//cari di googgle date.php 
echo "<br>";
echo date("l,j F Y");
echo "<br>";
echo time();
//jika ga pake apaapa maka akan muncul detik dari januari dulu dulu 1970
echo "<br>";
echo time()+ 86400;
echo "<br>";
echo date ("l", time() + 60 * 60 * 24 * 100);
echo "<br>";
echo mktime(0,0,0,2,27,2024);
//bikin sendiri waktu kitu, kita harus masukin jam hari ini 
//jam menit detik bulan tanggal tahun 
echo "<br>";
echo date ("l", mktime(0,0,0,4,28,2005));
//mktime bisa digabung sama date