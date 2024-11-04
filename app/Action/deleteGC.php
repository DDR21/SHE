<?php
include '../conn.php';
$ID = $_GET['id_gc'];

mysqli_query($conn,"DELETE FROM `gc` WHERE id_gc=$ID");
header('location:../dashboard.php');

?>