<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "pemebalajaran"; 

try {
    $con = mysqli_connect($host, $user, $pass, $db);
} catch (\Throwable $th) {
    echo "Koneksi gagal: " . $th->getMessage();
}

?>