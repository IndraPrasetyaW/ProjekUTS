<?php

//include koneksi database
include('koneksimysql.php');

//get data dari form
$no_pendaftaran           = $_POST['no_pendaftaran'];
$nama = $_POST['nama'];
$alamat       = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];
$tahum_kelulusan = $_POST['tahun_kelulusan'];

//query insert data ke dalam database
$query = "INSERT INTO mahasiswa (no_pendaftaran, nama, alamat, asal_sekolah, tahun_kelulusan) VALUES ('$no_pendaftaran', '$nama', '$alamat', '$asal_sekolah', '$tahun_kelulusan')";

//kondisi 
if($connection->query($query)) {

    //redirect ke halaman data.php 
    header("location: data.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>