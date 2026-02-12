<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $query = mysqli_query($con, "INSERT INTO `tes1`(`nama`, `harga`) VALUES ('$nama','$harga')");

    if ($query){
        echo "data berhasil di simpan";
    } else{
        echo "data gagal di simpan";
    }
}

?>