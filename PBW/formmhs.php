<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $prodi = array(
        "Kedokteran",
        "Manajemen",
        "Akuntansi",
        "Informatika",
        "Sistem Informasi",
        "Bio Teknologi",
        "Bahasa Inggris",
        "Humaniora",
        "Filsafat Keilahian",
        "Arsitektur dan Desain",
        "Desain Produk"
    );
    $favorite = array(
        "DDP",
        "ASD",
        "APB",
        "PBW",
        "SIMBAD",
        "Agama",
        "ABD"
    );
    ?>
    <form method="post" action="baca_mhs.php">
        <table border="1">
            <caption>Data Mahasiswa</caption>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" size="8"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" name="nama" size="30"></td>
            </tr>
            <tr>
                <td>Gender</td>
                <!-- Grouping radio berdasarkan name -->
                <td><input type="radio" value="pria" name="gender" checked>Laki-laki
                    <input type="radio" value="perempuan" name="gender"> Perempuan
                </td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>
                    <?php
                    echo "<select name=\"prodi\"> ";
                    foreach ($prodi as $prod) {
                        echo "<option value = \"$prod\">" . $prod . "</option>";
                    }
                    echo "</select>";
                    ?>
                    <!-- <select name="prodi">
                        <option value="Kedokteran">Kedokteran</option>
                        <option value="Akuntansi">Akuntansi</option>
                        <option selected value="Sistem Informasi">Sistem Informasi</option>
                        <option value="Informatika">Informatika</option>
                        <option value="Arsitektur dan Desain">Arsitektur dan Desain</option>
                        <option value="Bio Teknologi">Bio Teknologi</option>
                        <option value="Humaniora">Humaniora</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="Manajemen">Manajemen</option>
                        <option value="Desain Produk">Desain Produk</option>
                        <option value="Filsafat Keilahian">Filsafat Keilahian</option>
                    </select> -->
                </td>
            </tr>
            <tr>
                <td>Matakuliah Favorite</td>
                <td>
                    <?php
                    foreach ($favorite as $fav) {
                        echo "<input type=\"checkbox\" value=\"$fav\">" . $fav;
                    }
                    ?>
                    <!-- <input type="checkbox" name="mata[]" value="DDP"> DDP
                    <input type="checkbox" name="mata[]" value="ASD"> ASD
                    <input type="checkbox" name="mata[]" value="ABD"> ABD
                    <input type="checkbox" name="mata[]" value="PBW"> PBW
                    <input type="checkbox" name="mata[]" value="API"> API
                    <input type="checkbox" name="mata[]" value="AGAMA"> AGAMA
                    <input type="checkbox" name="mata[]" value="SIMBAD"> SIMBAD -->
                </td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit"><input type="reset"></th>
            </tr>
        </table>
    </form>
</body>

</html>