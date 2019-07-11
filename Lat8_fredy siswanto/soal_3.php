<?php


// 1. Buatlah program yang melakukan perhitungan
// IPK, dengan kondisi sbb:
// Nilai A >= 8;
// Nilai 8 > B >= 6;
// Nilai C <= 6;

// Catatan: inputan berasal dari user.

// if (!$nilai = null) {
$nilai = $_POST['nilai'];
// }
$a = $nilai;
for ($a = $a; $a > 0; $a--) {
    for ($b = $a; $b > $a; $b--) {
        echo "$a";
    }
    echo ".<br> ";
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>

    <form action="#" method="POST">
        <fieldset>
            <legend>Perhitungan calkulator segi tiga | Soal 3</legend>
            <h2>Rumus Luas segitiga = 1/2 * alas * tinggi</h2>
            <p>
                <label>Nilai Alas:</label>
                <input type="number" name="alas" placeholder=" masukan nilai anda" />
            </p>
            <p>
                <label>Nilai Tinggi:</label>
                <input type="number" name="tinggi" placeholder=" masukan nilai anda" />
            </p>
            <button type="submit">
                check
            </button>
            <?php
            if (isset($_POST['submit'])) {
                $alas = $_POST['alas'];
                $tinggi = $_POST['tinggi'];

                $luas_segitiga = 1 / 2 * $alas * $tinggi; // Menghitung luas segitiga

                echo "Luas segitiga dengan alas : $alas, dan tinggi $tinggi <br>";
                echo "yaitu $luas_segitiga";
            }
            ?>
        </fieldset>
    </form>

</body>

</html>