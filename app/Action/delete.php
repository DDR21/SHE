<?php
include '../conn.php';
$ID = $_GET['id_sap'];


mysqli_query($conn,"DELETE FROM `sap1` WHERE id_sap=$ID");
header('location:../dashboardIns.php');


?>