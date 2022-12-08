<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM DINAMIS ARITMATIKA</title>
</head>
<body>
    <h2 align="center">KALKULATOR SEDERHANA</h2>
    <form action="form_kalkulator.php" method="POST">
        <table align="center" width="50%">
            <tr>
                <td>
                   Masukkan Nama Anda  : 
                   <input type="text" name="nama"></br>
                </td>
            </tr>
            <tr>
                <td>
                    Masukkan Angka Pertama (1-10) : 
                    <input type="text" name="angka1">
                </td>
            </tr>
            <tr>
                <td>
                    Masukkan Angka Kedua (1-10) : 
                    <input type="text" name="angka2">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="hitung" value="hitung">
                </td>
            </tr>
        </table>
    </form>
    </tr>
</body>
</html>

<?php

    if (isset($_POST['hitung'])) {
        $nama = $_POST['nama'];
        $angka1 = $_POST['angka1'];
        $angka2 = $_POST['angka2'];
        
        $tambah = $angka1 + $angka2;
        $kurang = $angka1 - $angka2;
        $perkalian = $angka1 * $angka2;
        $pembagian = $angka2 / $angka2;
        $modulus = $angka2 % $angka2;
        
        echo "<h3>Hasil Kalkulator</h3>";
        echo "Nama Saya : ".$nama;
        echo "</br><b>$angka1 + $angka2</b> = $tambah";
        echo "</br><b>$angka1 - $angka2</b> = $kurang";
        echo "</br><b>$angka1 * $angka2</b> = $perkalian";
        echo "</br><b>$angka1 / $angka2</b> = $pembagian";
        echo "</br><b>$angka1 % $angka2</b> = $modulus";
    }
?>

