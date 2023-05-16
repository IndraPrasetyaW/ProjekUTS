<?php

//include koneksi database
include('koneksimysql.php');

//get data dari form
$no_pendaftaran     = $_POST['no_pendaftaran'];
$nama         = $_POST['nama'];
$alamat = $_POST['alamat'];
$asal_sekolah       = $_POST['asal_sekolah'];
$tahun_kelulusan = $_POST['tahun_kelulusan'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE mahasiswa SET nama = '$nama', alamat = '$alamat', asal_sekolah = '$asal_sekolah', tahun_kelulusan = '$tahun_kelulusan' WHERE no_pendaftaran = '$no_pendaftaran'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: data.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>