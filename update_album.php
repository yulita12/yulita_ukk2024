<?php
include "koneksi.php";
session_start();

$albumid = $_POST['albumid'];
$namaalbum = $_POST['namaalbum'];
$diskripsi = $_POST['diskripsi'];

$sql = mysqli_query($conn, "update album set namaalbum='$namaalbum',diskripsi='$diskripsi' where albumid='$albumid'");

if ($sql) {
    echo "<script> 
                alert('ubah data berhasil');
                location.href='album.php';
                </script>";
} else {
    echo "<script> 
                alert('ubah data tidak berhasil');
                location.href='album.php';
                </script>";
}
