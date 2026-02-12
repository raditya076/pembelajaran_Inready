<?php
include 'koneksi.php';

$id = $_GET["id"];

$query = mysqli_query($con, "DELETE FROM `tes1` WHERE id = '$id'");

if ($query){
        echo "<script>
        alert('Data berhasil di hapus');
        window.location.href = 'view.php';
        </script>";
    } else{
        echo "data gagal di hapus";
    }