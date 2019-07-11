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

    <form action="#" method="post">
        <fieldset>
            <legend>Perhitungan Nilai | Soal 1</legend>
            <p>
                <label>Nilai anda:</label>
                <input type="number" name="nilai" placeholder=" masukan nilai anda" />
            </p>
            <button type="submit">
                check
            </button>
        </fieldset>
    </form>

</body>

</html>