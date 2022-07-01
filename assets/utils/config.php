<?php

$server = 'localhost';
$username = 'root';
$password = '';
$db = 'petshopqu';

$conn = mysqli_connect($server, $username, $password, $db);

if (!$conn){
    die("<script>alert('connection failed.')</script>");
}

?>