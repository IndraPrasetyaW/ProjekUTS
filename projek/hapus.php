<?php

include('koneksimysql.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM mahasiswa WHERE no_pendaftaran = '$id'";

if($connection->query($query)) {
    header("location: data.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>