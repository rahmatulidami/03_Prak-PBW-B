<?php
    session_start();

    if(isset($_POST['logout'])){
        //bisa juga pake session_unset()
        //hapus session
        session_destroy();
        //hancurkan session
        session_unset();

        header("Location: login.php");
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

    <h1>Selamat datang di Beranda</h1>

    <h3>selamat datang <?= $username ?> </h3>
    <form action="dashboard.php" method="POST">
        <button type="submit" name="logout" > Logout </button>
    </form>

    <?php include "layout/footer.html" ?>
</body>
</html>