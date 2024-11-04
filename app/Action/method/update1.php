<?php
    include '../../conn.php';
    if(isset($_POST['update'])){
        $ID = $_POST['id_sap'];
        $A = $_POST['a'];
        $B = $_POST['b'];
        $C = $_POST['c'];
        $D = $_POST['d'];
        $E = $_POST['e'];
        $F = $_POST['f'];
        $G = $_POST['g'];
        $H = $_POST['h'];
        $I = $_POST['i'];
        $J = $_POST['j'];
        $K = $_POST['k'];
        $L = $_POST['l'];
        $M = $_POST['m'];
        $N = $_POST['n'];
        $O = $_POST['o'];
        $P = $_POST['p'];
        $Q = $_POST['q'];
        $R = $_POST['r'];
        $S = $_POST['s'];
        $T = $_POST['t'];
        $U = $_POST['u'];
        $V = $_POST['v'];
        $W = $_POST['w'];
        $X = $_POST['x'];
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
        $L1 = $_POST['l1'];
        $M1 = $_POST['m1'];
        $N1 = $_POST['n1'];
        $O1 = $_POST['o1'];
        $P1 = $_POST['p1'];
        $Q1 = $_POST['q1'];
        $R1 = $_POST['r1'];
        $S1 = $_POST['s1'];
        $T1 = $_POST['t1'];
        $U1 = $_POST['u1'];
        $V1 = $_POST['v1'];
        $W1 = $_POST['w1'];
        $X1 = $_POST['x1'];
        $STAT1=$_POST['stat1'];
        $STAT2=$_POST['stat2'];
        $KET=$_POST['Keterangan'];

        mysqli_query($conn,"UPDATE `sap1` SET `a`='$A',`b`='$B',`c`='$C',`d`='$D',`e`='$E',
                                    `f`='$F',`g`='$G',`h`='$H',`i`='$I',`j`='$J',`k`='$K',
                                    `l`='$L',`m`='$M',`n`='$N',`o`='$O',`p`='$P',`q`='$Q',
                                    `r`='$R',`s`='$S',`t`='$T',`u`='$U',`v`='$V',`w`='$W',`x`='$X',
                                    `a1`='$A1',`b1`='$B1',`c1`='$C1',`d1`='$D1',`e1`='$E1',
                                    `f1`='$F1',`g1`='$G1',`h1`='$H1',`i1`='$I1',`j1`='$J1',`k1`='$K1',
                                    `l1`='$L1',`m1`='$M1',`n1`='$N1',`o1`='$O1',`p1`='$P1',`q1`='$Q1',`r1`='$R1',`s1`='$S1',
                                    `t1`='$T1',`u1`='$U1',`v1`='$V1',`w1`='$W1',`x1`='$X1',`stat1`='$STAT1',`stat2`='$STAT2',`Keterangan`='$KET' WHERE id_sap = $ID");
        header("location:../../dashboardIns.php");
    }
?>