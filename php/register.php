<?php
    include "services/database.php";
    // session_start();

    // if (isset($_SESSION['isLogin'])) {
    //     header("Location: dashboard.php");
    // }

    //$register_pesan = "";

    if(isset($_POST['register'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        //ini buat hash password, hash password itu contoh: $2y$10$
        //$hash_password = password_hash("sha256", $password);

        // try {
        //     $sql = "INSERT INTO users (username, password) VALUES ('$username', '$hash_password')";

        // if($db->query($sql)){
        //     //$register_pesan = "Register berhasil";
        //     echo "Register berhasil";
        // } else {
        //     //$register_pesan = "Register gagal";
        //     echo "Register gagal";
        // }
        // } catch (Exception $e) {
        //     // $register_pesan = "Terjadi kesalahan";
        //     echo "Terjadi kesalahan";
        //     die();
        // }
        

        //masuin ke database
        $sql = "INSERT INTO users (username, password) VALUES ('$username', '$password')";

        if($db->query($sql)){
            //$register_pesan = "Register berhasil";
            echo "Register berhasil";
        } else {
            //$register_pesan = "Register gagal";
            echo "Register gagal";
        }

        //header("Location: dashboard.php");

        $db->close();
    }
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

    <h1>Register</h1>

    <!-- <p><?= $register_pesan ?></p> -->

    <form action="register.php" method="POST">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="submit" value="Register">
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>