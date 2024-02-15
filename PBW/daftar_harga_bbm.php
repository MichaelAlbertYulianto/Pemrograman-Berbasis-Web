<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1><marquee>Selamat Datang di ntah dmn</marquee></h1>
    <table border="1" align="center" width="50%">
        <tr><td colspan="4" align="center"><font size="5" color="red" face="montserrat"><b> Harga BBM </b></font></td></tr>
        <tr bgcolor="yellow" align="center"><td>Liter</td><td>Solar</td><td>Pertalite</td><td>Pertamax</td></tr>
        <?php
            for($lt = 1 ; $lt < 6 ; $lt++){
                $sl = number_format($lt * 7000,0,",",".");
                $pr = number_format($lt * 10000,0,",",".");
                $pt = number_format($lt * 15000,0,",",".");
                echo "<tr align=\"left\"><td>$lt</td><td>$sl</td><td>$pr</td><td>$pt</td></tr>";
            }
        ?>
    </table>
</body>
</html>