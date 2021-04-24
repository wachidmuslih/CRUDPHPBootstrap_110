<?php 
$koneksi = mysqli_connect("localhost", "root", "Bismillah12", "mahasiswa");

if(mysqli_connect_errno()){
    echo "Koneksi database gagal. Pesan error : ".mysqli_connect_error();
}
?>