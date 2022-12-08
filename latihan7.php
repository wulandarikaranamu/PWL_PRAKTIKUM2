<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menggunakan Variabel Dinamis</title>
</head>
<body>
    <form method="POST" action="latihan7.php" >
    Nama Anda : <input type="text" name="namaku"></br>
</br>
    Prodi Asal : <input type="text" name="prodiku"></br>
</br>
    Alamat Anda : <textarea name="alamatku"></textarea><br>
</br>
    <input type="submit" name="kirim" value="Kirim">
   </form>

<?php 
    if (isset($_POST ['kirim'])) {
        echo "Nama Anda : $_POST[namaku]<br>";
        echo "Prodi Anda : $_POST[prodiku]<br>";
        echo "Alamat Anda : $_POST[alamatku]<br>";
    }
?>
</body>
</html>