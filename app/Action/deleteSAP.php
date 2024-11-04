<?php
include '../conn.php';
$ID = $_GET['id_step'];

mysqli_query($conn,"DELETE FROM `sap` WHERE id_step=$ID");
header('location:../dashboardSAP.php');

?>