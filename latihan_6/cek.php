<?php

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat = $_POST['tempat'];
$kelamin = $_POST['kelamin'];
$usia = $_POST['usia'];


if ($nama == "" && $alamat == "" && $tempat == "" &&  $usia == "" && $kelamin == "") {

    header("location:form.php?nama=kosong");
} else {

    echo "Nama anda adalah : " . $nama . "\n";
    echo "Alamat anda adalah : " . $alamat . "\n";
    echo "tempat anda adalah : " . $tempat . "\n";
    echo "Jenis kelamin anda adalah : " . $kelamin . "\n";
    echo "Usia anda adalah : " . $usia . "\n";
}
