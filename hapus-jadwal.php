<?php
//koneksi database
include('koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_jadwal WHERE id_jadwal = '$id'";

if($conn->query($query)) {
    header("location: loginpuasa.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>