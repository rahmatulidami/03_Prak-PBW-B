<?php 

$hostname = "localhost";
$username = "root";
$password = "";
$database = "db_name";

$db = mysqli_connect($hostname, $username, $password, $database);

// if(!$db){

//     die("Koneksi Rusak: " . mysqli_connect_error());
// }

if($db->connect_error){
    echo "Koneksi Rusak: " . $db->connect_error;
    die();
}

// echo "Koneksi Berhasil";

?>