<?php

include '../connection.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $harga = $_POST['harga'];

    $query = "INSERT INTO barang (nama, harga) VALUES ('$nama', '$harga')";
    $result = mysqli_query($koneksi, $query);

    header('Location: index.php');
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Barang</title>
</head>

<body>
    <h1>Tambah Barang</h1>
    <a href="<?= dirname($_SERVER['PHP_SELF']) ?>/index.php">Kembali</a>
    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Barang</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>Harga Barang</td>
                <td><input type="text" name="harga"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="submit" value="Tambah"></td>
            </tr>
        </table>
</body>

</html>