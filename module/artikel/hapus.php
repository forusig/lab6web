<?php
include_once 'koneksi.php';
$id = $_GET['id'];
$sql = "DELETE FROM form1 WHERE id = '{$id}'";
$result = mysqli_query($conn, $sql);
header('location: module/home.php');
?>