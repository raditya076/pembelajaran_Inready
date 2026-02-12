<?php
include 'koneksi.php';

$id = $_GET["id"];

$query = mysqli_query($con, "SELECT * FROM `tes1` WHERE id = '$id'");

$data = mysqli_fetch_assoc($query);

if ($_SERVER["REQUEST_METHOD"] === "POST"){
    $nama = $_POST["nama"];
    $harga = $_POST["harga"];

    $query_update = mysqli_query($con, "UPDATE `tes1` SET `nama`='$nama',`harga`='$harga' WHERE id='$id'");

    if ($query_update){
        echo "<script>
        alert('Data berhasil di update');
        window.location.href = 'view.php';
        </script>";
    } else{
        echo "data gagal di simpan";
    }
}

?>

<form action="" method="post">
    <label for="nama"> Nama :</label>
    <input type="text" id="nama" name="nama" value="<?= $data["nama"] ?>">
    <br><br>
    <label for="harga"> Harga :</label>
    <input type="number" id="harga" name="harga" value="<?= $data["harga"] ?>">
    <br><br>
    <button type="submit">Simpan</button>
</form>