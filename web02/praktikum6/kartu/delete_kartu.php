<?php require_once('../dbkoneksi.php');
$_iddel = $_GET['iddel'];
$sql = "DELETE FROM kartu WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$_iddel]);
header('location:list_kartu.php');
