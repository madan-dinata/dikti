<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan 6 | DTS 2019</title>
</head>
<header>
    <h2>
        Membuat form validation dengan PHP
    </h2>
</header>

<?php
if (isset($_GET['nama'])) {
    if ($_GET['nama'] == "kosong") {
        echo "<h4 style='color:red'> Nama Belum Dimasukan !!! </h4>";
    }
};
?>

<h4>Masukan nama Anda</h4>
<form action="cek.php" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" id="nama"></td>
        </tr>
        <tr>
            <td>alamat</td>
            <td><input type="text" name="alamat" id="alamat"></td>
        </tr>
        <tr>
            <td>tempat</td>
            <td><input type="text" name="tempat" id="tempat"></td>
        </tr>
        <tr>
            <td>kelamin</td>
            <td><input type="text" name="kelamin" id="kelamin"></td>
        </tr>
        <tr>
            <td>usia</td>
            <td><input type="text" name="usia" id="usia"></td>
        </tr>
        <td><input type="submit" value="Cek"></td>
    </table>
</form>

<body>

</body>

</html>