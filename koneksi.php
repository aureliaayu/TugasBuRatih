<?php
$conn=mysqli_connect ('localhost','root','','login');
if (mysqli_connect_error()){
    printf("Koneksi anda gagal", mysqli_connect_error());
    exit();
}
?>