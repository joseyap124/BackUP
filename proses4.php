<?php
  require_once('koneksi.php');

    $id = mysqli_real_escape_string($db,$_GET['id']);


        $name = $_FILES['berkas']['name'];
        $lokasi = $_FILES['berkas']['tmp_name'];
        move_uploaded_file($lokasi, "file/".$name);

    $d1rata = $_POST['rata'];
    $sd1rata = $_POST['rata1'];
    $sd2rata = $_POST['rata2'];
    $sd3rata = $_POST['rata3'];
    $sd4rata = $_POST['rata4'];
    $sd5rata = $_POST['rata5'];
    $sd6rata = $_POST['rata6'];
    $sd7rata = $_POST['rata7'];

    $d2rata = ($sd1rata + $sd2rata + $sd3rata + $sd4rata + $sd5rata + $sd6rata + $sd7rata)/7;

    $total1 = count($_POST['ssdom1']);
    $sum1 = 0;
    for ($i1 = 0; $i1 < $total1; $i1++) {
        $prod1 = $_POST['ssdom1'][$i1];
        $sum1 = $sum1 + $prod1;
    }
    $ssd1rata = $sum1 / $total1;

    $total2 = count($_POST['ssdom2']);
    $sum2 = 0;
    for ($i2 = 0; $i2 < $total2; $i2++) {
        $prod2 = $_POST['ssdom2'][$i2];
        $sum2 = $sum2 + $prod2;
    }
    $ssd2rata = $sum2 / $total2;

    $total3 = count($_POST['ssdom3']);
    $sum3 = 0;
    for ($i3 = 0; $i3 < $total3; $i3++) {
        $prod3 = $_POST['ssdom3'][$i3];
        $sum3 = $sum3 + $prod3;
    }
    $ssd3rata = $sum3 / $total3;

    $total4 = count($_POST['ssdom4']);
    $sum4 = 0;
    for ($i4 = 0; $i4 < $total4; $i4++) {
        $prod4 = $_POST['ssdom4'][$i4];
        $sum4 = $sum4 + $prod4;
    }
    $ssd4rata = $sum4 / $total4;

    $total5 = count($_POST['ssdom5']);
    $sum5 = 0;
    for ($i5 = 0; $i5 < $total5; $i5++) {
        $prod5 = $_POST['ssdom5'][$i5];
        $sum5 = $sum5 + $prod5;
    }
    $ssd5rata = $sum5 / $total5;

    $sd8rata = ($ssd1rata + $ssd2rata + $ssd3rata + $ssd4rata) / 4;
    $sd9rata = $ssd5rata;
    $d3rata = ($sd8rata + $sd9rata) / 2;

    $query1 = "UPDATE tbl_pengguna SET file_upload = '$name' where id_pengguna = '$id'";

      if ($db->query($query1) === TRUE ) {
        $query2 = "INSERT INTO tbl_penilaian(id_pengguna,id_domain,nilai_domain,id_subdomain,nilai_subdomain,id_subsubdomain,nilai_subsubdomain) 
            VALUES('$id',(Select id_domain from tbl_domain where id_domain = 'DOM1'),$d1rata,NULL,NULL,NULL,NULL),
            ('$id',(Select id_domain from tbl_domain where id_domain = 'DOM2'),$d2rata,NULL,NULL,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM1'),$sd1rata,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM2'),$sd2rata,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM3'),$sd3rata,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM4'),$sd4rata,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM5'),$sd5rata,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM6'),$sd6rata,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM7'),$sd7rata,NULL,NULL),
            ('$id',(Select id_domain from tbl_domain where id_domain = 'DOM3'),$d3rata,NULL,NULL,NULL,NULL),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM8'),$sd8rata,NULL,NULL),
            ('$id',NULL,NULL,NULL,NULL,(Select id_subsubdomain from tbl_subsubdomain where id_subsubdomain = 'SSDOM1'),$ssd1rata),
            ('$id',NULL,NULL,NULL,NULL,(Select id_subsubdomain from tbl_subsubdomain where id_subsubdomain = 'SSDOM2'),$ssd2rata),
            ('$id',NULL,NULL,NULL,NULL,(Select id_subsubdomain from tbl_subsubdomain where id_subsubdomain = 'SSDOM3'),$ssd3rata),
            ('$id',NULL,NULL,NULL,NULL,(Select id_subsubdomain from tbl_subsubdomain where id_subsubdomain = 'SSDOM4'),$ssd4rata),
            ('$id',NULL,NULL,(Select id_subdomain from tbl_subdomain where id_subdomain = 'SDOM9'),$sd9rata,NULL,NULL),
            ('$id',NULL,NULL,NULL,NULL,(Select id_subsubdomain from tbl_subsubdomain where id_subsubdomain = 'SSDOM5'),$ssd5rata)";  

      if($db->query($query2)){
        echo "<script>alert('Berhasil!','','success');</script>";
        echo "<script>location='end.php?id=$id';</script>";
        }     
        else{
        echo "<script>alert('GAGAL!','','success');</script>";
        echo "<script>location='index.php';</script>";
      }
      }
      else{
        echo "<script>alert('GAGAL!','','success');</script>";
        echo "<script>location='index.php';</script>";
      }
      // NANTI UBAH QUERY KARENA PENGGUNA FORMNYA BEDA
?>