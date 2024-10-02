<?php
    include "services/database.php";
    // session_start();

    if (isset($_SESSION['isLogin'])) {
        header("Location: dashboard.php");
    }

    if (isset($_POST['login'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $hash_password = password_hash("sha256", $password);

        $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$hash_password'";

        //eksekusi query
        $result = $db->query($sql);

        //kalo hasilnya lebih dari 0, berarti ada data yang ditemukan
        //username dan password benar
        if ($result->num_rows > 0) {
            //keluarin data user dan tampung di variabel $data
            $data = $result->fetch_assoc();

            //buat session
            // $_SESSION['username'] = $data['username'];
            // $_SESSION['isLogin'] = true;

            header("Location: dashboard.php");
            //echo "Login berhasil, selamat datang " . $data['username'];
            //echo "Login berhasil";
        } else {
            echo "Akun tidak ditemukan";
        }
    }
    $db->close();
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include "layout/header.html" ?>

    <h1> selamat Datang di Website</h1>

    <h1>Login</h1>
    <form action="services/login.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Login">
    </form>

    <?php include "layout/footer.html" ?>

</body>
</html>