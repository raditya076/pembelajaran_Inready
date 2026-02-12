<?php
include 'koneksi.php';

$query = mysqli_query($con, "SELECT * FROM `tes1`")

?>

<table border="1" cellpadding="10px" cellspacing="0px">
    <thead>
        <tr>
            <th>Nomor</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php
        if ($query->num_rows > 0):
        ?>

        <?php
        $i = 1;
        ?>

        <?php
        while($data = mysqli_fetch_assoc($query)):
        ?>
        <tr>
            <th><?= $i++ ?></th>
            <th><?= $data["nama"] ?></th>
            <th><?= $data["harga"] ?></th>
            <th>
                <a href="update.php?id=<?= $data["id"] ?>">Edit</a>
                <a href="hapus.php?id=<?= $data["id"] ?>"
                onclick="confirm('serius?')">Hapus</a>
            </th>
        </tr>
        <?php endwhile ?>

        <?php else : ?>
            <tr>
                <td colspan="3">data tidak ada</td>
            </tr>
        <?php endif ?>
    </tbody>
</table>