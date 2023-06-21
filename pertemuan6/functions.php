<?php
function koneksi(){
    $ip = "localhost";
    $user = "root";
    $password = "";
    $database = "web_lanjut_a2";
    return mysqli_connect($ip,$user,$password,$database);
}