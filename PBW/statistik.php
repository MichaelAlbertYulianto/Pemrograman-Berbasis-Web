<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    if (!isset($_GET["bil"])) {
        $_SESSION["cacah"] = 0;
        $_SESSION["jum"] = 0;
        $_SESSION["min"] = 90000;
        $_SESSION["max"] = 0;
        $_SESSION["rata"] = 0;
    } else {
        $_SESSION["cacah"]++;
        $_SESSION["jum"] = $_SESSION["jum"] + $_GET["bil"];
        if ($_SESSION["max"] < $_GET["bil"])
            $_SESSION["max"] = $_GET["bil"];
        if ($_SESSION["min"] > $_GET["bil"])
            $_SESSION["min"] = $_GET["bil"];
        $_SESSION["rata"] = $_SESSION["jum"] / $_SESSION["cacah"];
    }
    ?>
    <form>
        <table border="1" width="300px" align="center">
            <caption>Statistik</caption>
            <tr>
                <td>Masukan Data</td>
                <td><input type="text" name="bil" size="3"></td>
            </tr>
            <tr>
                <td>Banyak Data</td>
                <td>
                    <?= $_SESSION["cacah"] ?>
                </td>
            </tr>
            <tr>
                <td>Jumlah Data</td>
                <td>
                    <?= $_SESSION["jum"] ?>
                </td>
            </tr>
            <tr>
                <td>Data Terkecil</td>
                <td>
                    <?= $_SESSION["min"] ?>
                </td>
            </tr>
            <tr>
                <td>Data Terbesar</td>
                <td>
                    <?= $_SESSION["max"] ?>
                </td>
            </tr>
            <tr>
                <td>Rata-rata</td>
                <td>
                    <?= $_SESSION["rata"] ?>
                </td>
            </tr>
            <tr>
                <th colspan="2"><input type="submit"><input type="reset"></th>
            </tr>

        </table>
    </form>
</body>

</html>