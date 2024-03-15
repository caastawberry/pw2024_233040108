<?php
$film = [
    [
        "nama" => "Ancika (Dia yang bersamaku 1995)",
        "aktor" => "Zee JKT48, Arbani Yasiz, Daffa Wardana, ...",
        "penulis" => "Pidi baiq, Tubagus deddy, Benni Setiawan",
        "sutradara" => "Benni Setiawan",
        "gendre" => "Drama, Romantis",
        "rating" => "7.5/10⭐",
        "gambar" => "ancika1.jpg"
    ],
    [
        "nama" => "Agak Laen",
        "aktor" => "Bene, Oki, Indra jegel, Boris, ...",
        "penulis" => "Muhadkly acho",
        "sutradara" => "Muhadkly acho",
        "gendre" => "Comedy",
        "rating" => "8.1/10⭐",
        "gambar" => "agaklaen2.jpg"
    ],
    [
        "nama" => "Pemandi Jenazah",
        "aktor" => "Aghniny, Djenar, Ibrahim, Amara, ...",
        "penulis" => "Lele laila",
        "sutradara" => "Hadrah Daeng Ratu",
        "gendre" => "Horror",
        "rating" => "7.1/10⭐", 
        "gambar" => "pjenazah.jpg"
    ],
    [
        "nama" => "Munkar",
        "aktor" => "Adhisty zara, Safira ratu, Saskia, Kaneishia, ...",
        "penulis" => "Evelyn afnilia",
        "sutradara" => "Anggy Umbara",
        "gendre" => "Horror",
        "rating" => "7.9/10⭐",
        "gambar" => "munkar.jpg"
    ],
    [
        "nama" => "Qorin",
        "aktor" => "Omar Daniel, Zulfa M, Aghniny Haque, ...",
        "penulis" => "Lele Laila, Ginanti Rona",
        "sutradara" => "Ginanti Rona",
        "gendre" => "Horror, Misteri",
        "rating" => "4.9/10⭐",
        "gambar" => "qorin.jpg"
    ],
    [
        "nama" => "172 Days",
        "aktor" => "Yasmin N, Bryan Domani,Yoriko A, ...",
        "penulis" => "Archie Hekagery, Nadzira Shafa",
        "sutradara" => "Hadrah Daeng Ratu",
        "gendre" => "Biografi, Drama",
        "rating" => "6.6/10⭐",
        "gambar" => "172days.jpg"
    ],
    [
        "nama" => "Gampang Cuan",
        "aktor" => "Vino G. Bastian, Anya Geraldine, Alzi Markes, ...",
        "penulis" => "Rahabi Mandra",
        "sutradara" => "Rahabi Mandra, Syahrun Ramadhan",
        "gendre" => "Comedy, Drama",
        "rating" => "7.2/10⭐",
        "gambar" => "gampang.jpg"
    ],
    [
        "nama" => "13 Bom di Jakarta",
        "aktor" => "Ardhito, Lutesha, Chicco,Rio dewanto, ...",
        "penulis" => "Angga dwimas sasongko",
        "sutradara" => "Angga Dwimas Sasongko, Mohammad Irfan Ramly",
        "gendre" => "Aksi, Kejahatan, menegangkan",
        "rating" => "7.2/10⭐",
        "gambar" => "13 bom.jpg"
    ],
    [
        "nama" => "Layangan Putus",
        "aktor" => "Reza Rahardian, Raihananun, Anya Geraldine, ...",
        "penulis" => "Mommy A., Oka aurora",
        "sutradara" => "Benni setiawan",
        "gendre" => "Drama, Romantis",
        "rating" => "7.9/10⭐",
        "gambar" => "layangan.jpg"
    ],
    [
        "nama" => "Pasutri Gaje",
        "aktor" => "Reza rahardian, Bunga citra, Indro warkop, ...",
        "penulis" => "Alim sudio, Annisa nisfihani",
        "sutradara" => "Fajar Bustomi",
        "gendre" => "Comedy, Drama",
        "rating" => "7.0/10⭐",
        "gambar" => "pasutrigj.jpg"
    ],
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Daftar Film Bioskop Indonesia </title>
</head>
<body>
<h1>Daftar Film Bioskop Indonesia 2023-2024</h1>
<?php foreach($film as $flm) : ?>
<ul>
<li>
        <img src="img/<?= $flm["gambar"]; ?>">
    </li>
    <li>Nama Film :<?= $flm ["nama"]; ?></li>
    <li>Aktor :<?= $flm ["aktor"]; ?></li>
    <li>Penulis :<?= $flm ["penulis"]; ?></li>
    <li>Sutradara :<?= $flm ["sutradara"]; ?></li>
    <li>Gendre :<?= $flm ["gendre"]; ?></li>
    <li>Rating :<?= $flm ["rating"]; ?></li>
</ul>
<?php endforeach; ?>
</body>
</html>
