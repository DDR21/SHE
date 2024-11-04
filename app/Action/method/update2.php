<?php
include '../../conn.php';
if (isset($_POST['update'])) {
    $ID = $_POST['id_gc'];
    $KRITEM = $_POST['kritem'];
    $KATEM = $_POST['katem'];
    $DETBHYA = $_POST['det_bhya'];
    $DETPRBKN = $_POST['det_prbkn'];
    $KDBHYA = $_POST['kd_bhya'];
    $STAT1 = $_POST['status'];
    $KET = $_POST['Keterangan'];

    $IMGFND = $_FILES['image_found'];
    $IMGF_good = $_FILES['image_found']['error'] == 0;
    $img_loc = $_FILES['image_found']['tmp_name'];
    $img_name = $_FILES['image_found']['name'];
    $img_des = "tmpatGmbr/" . $img_name;
    
    $IMGAFT = $_FILES['image_after'];
    $IMGA_good = $_FILES['image_after']['error'] == 0;
    $img_loc1 = $_FILES['image_after']['tmp_name'];
    $img_name1 = $_FILES['image_after']['name'];
    $img_des1 = "tmpatGmbr/" . $img_name1;
    if ($IMGF_good && $IMGA_good) {
        move_uploaded_file($img_loc, '../../tmpatGmbr/' . $img_name);
        move_uploaded_file($img_loc1, '../../tmpatGmbr/' . $img_name1);
        
        
        mysqli_query($conn, "UPDATE `gc` SET `kritem`='$KRITEM',`katem`='$KATEM',`det_bhya`='$DETBHYA',`det_prbkn`='$DETPRBKN',
                                            `kd_bhya`='$KDBHYA',`image_found`='$img_des',`image_after`='$img_des1',
                                            `status`='$STAT1',`Keterangan`='$KET' WHERE id_gc = $ID");

    } else if ($IMGF_good) {
        move_uploaded_file($img_loc, '../../tmpatGmbr/' . $img_name);
        
        mysqli_query($conn, "UPDATE `gc` SET `kritem`='$KRITEM',`katem`='$KATEM',`det_bhya`='$DETBHYA',`det_prbkn`='$DETPRBKN',
                                            `kd_bhya`='$KDBHYA',`image_found`='$img_des',`status`='$STAT1',`Keterangan`='$KET' WHERE id_gc = $ID");

    } else if ($IMGA_good) {
        move_uploaded_file($img_loc1, '../../tmpatGmbr/' . $img_name1);
        
        mysqli_query($conn, "UPDATE `gc` SET `kritem`='$KRITEM',`katem`='$KATEM',`det_bhya`='$DETBHYA',`det_prbkn`='$DETPRBKN',
                                            `kd_bhya`='$KDBHYA',`image_after`='$img_des1',`status`='$STAT1',`Keterangan`='$KET' WHERE id_gc = $ID");
                                            
    } else {
        mysqli_query($conn, "UPDATE `gc` SET `kritem`='$KRITEM',`katem`='$KATEM',`det_bhya`='$DETBHYA',`det_prbkn`='$DETPRBKN',
                                            `kd_bhya`='$KDBHYA',`status`='$STAT1',`Keterangan`='$KET' WHERE id_gc = $ID");
    }

    header("location:../../dashboard.php");
}
?>