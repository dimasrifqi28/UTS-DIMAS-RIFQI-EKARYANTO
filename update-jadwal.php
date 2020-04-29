<?php

//include koneksi database
include('koneksi.php');

try {
	
	//get data dari form
$id_jadwal     = $_POST['id_jadwal'];
$rw         = $_POST['rw'];
$nama_lengkap = $_POST['nama_lengkap'];
$alamat       = $_POST['alamat'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_jadwal SET rw = '$rw', nama_lengkap = '$nama_lengkap', alamat = '$alamat' WHERE id_jadwal = '$id_jadwal'";
$stmt= $conn->prepare($query);

$stmt->bindParam(':id_jadwal', $_POST['id_jadwal'], PDO::PARAM_STR);    
$stmt->bindParam(':rw', $_POST['rw'], PDO::PARAM_STR); 
$stmt->bindParam(':nama_lengkap', $_POST['nama_lengkap'], PDO::PARAM_STR); 
$stmt->bindParam(':alamat', $_POST['alamat'], PDO::PARAM_STR);    

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($stmt->execute()) {
    //redirect ke halaman index.php 
    header("location: loginpuasa.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}
} catch (PDOException $e) {
	echo "eror";
}

?>