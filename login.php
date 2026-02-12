<?php
    session_start();

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if ($_POST["username"] === 'admin' && $_POST["password"] === '1234') {
            $_SESSION['loggedin'] = "login";

            header("Location: dashboard.php");
        } else {
            echo "<script>alert('Username atau password salah');</script>";
        }
    }

?>

<form method="POST">
    <label for="username">Username:</label>
    <input type="text" id="username" name="username">
    <br><br>
    <label for="password">Password:</label>
    <input type="password" id="password" name="password">
    <br><br>
    <button type="submit" value="Login">Login</button>
</form>