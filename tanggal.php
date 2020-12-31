<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>contoh tanggal otomatis</h2>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Nama: <input type="text" name="nama">
        <br><br>
        <input type="text" name="tanggal" value="<?php echo date("d-m-Y"); ?>">
        <input type="submit" name="submit" value="Submit">
    </form>
    <?php
    $nama = "";
    $tanggal = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama = $_POST['nama'];
        $tanggal = $_POST['tanggal'];

        echo "<h2>Hasil:</h2>";
        echo "Nama : " . $nama;
        echo "<br>";
        echo "Tanggal Sekarang : " . $tanggal;
    }
    ?>
</body>
</html>