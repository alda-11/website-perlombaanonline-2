<?php
$id=$_GET['id'];
include "koneksi.php";
$sql=$koneksi->query("delete from daftar where ID_PESERTA='$id'");
header("location:tampil-daftar.php");
?>