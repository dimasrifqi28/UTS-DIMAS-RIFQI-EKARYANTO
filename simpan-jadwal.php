<?php

//include koneksi database
include('koneksi.php');

//get data dari form
$rw           = $_POST['rw'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_jadwal (rw, nama_lengkap, alamat) VALUES ('$rw', '$nama_lengkap', '$alamat')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($conn->query($query)) {

    //redirect ke halaman index.php 
    header("location: loginpuasa.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>