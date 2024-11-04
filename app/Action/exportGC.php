<?php
include "../conn.php";

$filename = "Green Card_" . date('Y-m-d') . ".xls";
header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=\"$filename\"");

$output = '';

$qry = "SELECT * FROM gc";
$res = mysqli_query($conn, $qry);

if(mysqli_num_rows($res)>0)
{
    $output .= '
                <table border = "1" id="example"
                <thead>
                    <th style="width:200px;">Tanggal</th>
                    <th style="width:200px;">Nama</th>
                    <th style="width:200px;">NRP</th>
                    <th style="width:200px;">Dept</th>
                    <th style="width:200px;">PIC</th>
                    <th style="width:200px;">Jabatan</th>
                    <th style="width:200px;">Status</th>
                    <th style="width:200px;">Kriteria Temuan</th>
                    <th style="width:200px;">Kategori Temuan</th>
                    <th style="width:200px;">Detail Bahaya Diamati</th>
                    <th style="width:200px;">Detail Tindakan</th>
                    <th style="width:200px;">Kode Bahaya</th>
                    <th style="width:200px;">Gambar Temuan</th>
                    <th style="width:200px;">Gambar Perbaikan</th>
                </thead>
                <tbody>
            ';
    while($data=mysqli_fetch_array($res))
    {
        $tanggal = $data['tanggal'];
        $nama = $data['nama'];
        $nrp = $data['nrp'];
        $dept = $data['nama_dept'];
        $pic = $data['pic_dept'];
        $jabatan = $data['nama_jbtn'];
        $status = $data['stat1'];
        $kritem = $data['kritem'];
        $katem = $data['katem'];
        $detbhy = $data['det_bhya'];
        $detprbkn = $data['det_prbkn'];
        $kdbh = $data['kd_bhya'];
        @$imgfnd = $data['image_found'];
        @$imgaft = $data['image_after'];

        $output .= '
                <tr style="height:110px;">
                    <td>'.$tanggal.'</td>
                    <td>'.$nama.'</td>
                    <td>'.$nrp.'</td>
                    <td>'.$dept.'</td>
                    <td>'.$pic.'</td>
                    <td>'.$jabatan.'</td>
                    <td>'.$status.'</td>
                    <td>'.$kritem.'</td>
                    <td>'.$katem.'</td>
                    <td>'.$detbhy.'</td>
                    <td>'.$detprbkn.'</td>
                    <td>'.$kdbh.'</td>
                    <td><img src="http://10.13.210.15/SHE/app/'.$imgfnd.'" width="100px"
                    height="100px"></td>
                    <td><img src="http://10.13.210.15/SHE/app/'.$imgaft.'" width="100px"
                    height="100px"></td>
                    ';
    }
    $output .= '</tbody></table>';
	
    echo $output;
    
}
?>