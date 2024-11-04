<?php
    include '../../conn.php';
    if(isset($_POST['update'])){
        $ID = $_POST['id_step'];
        $A1 = $_POST['a1'];
        $B1 = $_POST['b1'];
        $C1 = $_POST['c1'];
        $D1 = $_POST['d1'];
        $E1 = $_POST['e1'];
        $F1 = $_POST['f1'];
        $G1 = $_POST['g1'];
        $H1 = $_POST['h1'];
        $I1 = $_POST['i1'];
        $J1 = $_POST['j1'];
        $K1 = $_POST['k1'];
        $STAT1=$_POST['stat_spv'];
        $KET=$_POST['Keterangan'];

        mysqli_query($conn,"UPDATE `sap` SET `a1`='$A1',`b1`='$B1',`c1`='$C1',`d1`='$D1',`e1`='$E1',`f1`='$F1',`g1`='$G1',`h1`='$H1',`i1`='$I1',`j1`='$J1',`k1`='$K1',`stat_spv`='$STAT1',`Keterangan`='$KET' WHERE id_step = $ID");
        header("location:../../dashboardSAP.php");
    }
?>