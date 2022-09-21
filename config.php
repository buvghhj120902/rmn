<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "test";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn){
    die ("<script>alert('Kết nối thất bại')</script>");
}


?>