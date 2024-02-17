<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    // $nim = $_POST["nim"];
    // $nama = $_POST["nama"];
    // $gender = $_POST["gender"];
    // $prodi = $_POST["prodi"];
    extract($_POST);

    echo "Nim : " . $nim . "<br>Nama : " . $nama . "<br>Gender : " . $gender . "<br>Prodi : " . $prodi;
    if (isset($mata)) {
        if (is_array($mata))
            foreach ($mata as $matkul) {
                echo "<br>Matakuliah Favorite anda : <br>";
                echo "♥ " . $matkul . "<br>";
            }
    } else {
        echo "<br>Tidak ada matakuliah yang anda minati<br>Anda Salah Jurusan";
    }
    ?>
    <div margin-left="100px"><a href="formmhs.php">Balik ke Halaman Sebelumnya</a></div>
</body>

</html>