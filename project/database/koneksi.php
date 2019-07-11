<?php

$server = "localhost";
$user = "root";
$password = "";
$nama_database = "dts_project";

$db = mysqli_connect($server, $user, $password, $nama_database);

// if (!$db) {
//     die("gagal terhubung ke database : " . mysqli_connect_error());
// } else {
//     echo "berhasil terkoneksi";
// }

// 4 cara mengambil data dari database 
// mysqli_fetch_row();  =>>> mengembalikan nilai array numerik
// mysqli_fetch_assoc(); 
// mysqli_fetch_array();
// mysqli_fetch_object();

function query($query)
{
    global $db;
    $result = mysqli_query($db, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


// $result = mysqli_query($db, "SELECT * FROM barang");
// while ($data = mysqli_fetch_assoc($result)) {
//     // var_dump($data);

// }
// die();
