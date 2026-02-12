<?php
    session_start();

    if ($_SESSION['loggedin'] !== "login") {
        header("Location: login.php");
    }

?>

<h1>Selamat datang di Dashboard</h1>

<a href="index.php">tambah</a>
<br><br>
<a href="view.php">View</a>
<br><br>
<a href="logout.php">Logout</a>