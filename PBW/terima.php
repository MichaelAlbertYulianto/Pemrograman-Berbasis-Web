<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $nim = $_GET["nim"];
        $nama = $_GET["nama"];
        $kota = $_GET["kota"];
        echo "<p align = \"center\" ><font size=\"5\">Selamat Datang $nama</font></p><br>";
        echo "<p align = \"center\" ><font size=\"5\">Nomor Induk mahasiswa anda adalah $nim</font></p><br>";
        echo "<p align = \"center\" ><font size=\"5\">Anda bersala dari kota $kota</font></p>"
    ?>
    <a href="form02.html">Ganti Nama</a>
    
</body>
</html>