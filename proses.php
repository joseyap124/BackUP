<?php
  require_once('koneksi.php');

    $id = mysqli_real_escape_string($db,$_GET['id']);


        $name = $_FILES['berkas']['name'];
        $lokasi = $_FILES['berkas']['tmp_name'];
        move_uploaded_file($lokasi, "file/".$name);

    $total = count($_POST['dom1']);
    $sum = 0;
    for ($i = 0; $i < $total; $i++) {
      $prod = $_POST['dom1'][$i];
      $sum = $sum + $prod;
    }
    //rata domain 1
    $d1rata = $sum / $total;

    //domain 2
    $total1 = count($_POST['sdom1']);
    $sum1 = 0;
    for ($i1 = 0; $i1 < $total1; $i1++) {
        $prod1 = $_POST['sdom1'][$i1];
        $sum1 = $sum1 + $prod1;
    }
    $sd1rata = $sum1 / $total1;

    $total2 = count($_POST['sdom2']);
    $sum2 = 0;
    for ($i2 = 0; $i2 < $total2; $i2++) {
        $prod2 = $_POST['sdom2'][$i2];
        $sum2 = $sum2 + $prod2;
    }
    $sd2rata = $sum2 / $total2;

    $total3 = count($_POST['sdom3']);
    $sum3 = 0;
    for ($i3 = 0; $i3 < $total3; $i3++) {
        $prod3 = $_POST['sdom3'][$i3];
        $sum3 = $sum3 + $prod3;
    }
    $sd3rata = $sum3 / $total3;

    $total4 = count($_POST['sdom4']);
    $sum4 = 0;
    for ($i4 = 0; $i4 < $total4; $i4++) {
        $prod4 = $_POST['sdom4'][$i4];
        $sum4 = $sum4 + $prod4;
    }
    $sd4rata = $sum4 / $total4;

    $total5 = count($_POST['sdom5']);
    $sum5 = 0;
    for ($i5 = 0; $i5 < $total5; $i5++) {
        $prod5 = $_POST['sdom5'][$i5];
        $sum5 = $sum5 + $prod5;
    }
    $sd5rata = $sum5 / $total5;

    $total6 = count($_POST['sdom6']);
    $sum6 = 0;
    for ($i6 = 0; $i6 < $total6; $i6++) {
        $prod6 = $_POST['sdom6'][$i6];
        $sum6 = $sum6 + $prod6;
    }
    $sd6rata = $sum6 / $total6;

    $total7 = count($_POST['sdom7']);
    $sum7 = 0;
    for ($i7 = 0; $i7 < $total7; $i7++) {
        $prod7 = $_POST['sdom7'][$i7];
        $sum7 = $sum7 + $prod7;
    }
    $sd7rata = $sum7 / $total7;

    //rata domain 2
    $d2rata = ($sd1rata + $sd2rata + $sd3rata + $sd4rata + $sd5rata + $sd6rata + $sd7rata)/7;
    //end domain 2

    //domain3
    $total11 = count($_POST['ssdom1']);
    $sum11 = 0;
    for ($i11 = 0; $i11 < $total11; $i11++) {
        $prod11 = $_POST['ssdom1'][$i11];
        $sum11 = $sum11 + $prod11;
    }
    $ssd1rata = $sum11 / $total11;

    $total22 = count($_POST['ssdom2']);
    $sum22 = 0;
    for ($i22 = 0; $i22 < $total22; $i22++) {
        $prod22 = $_POST['ssdom2'][$i22];
        $sum22 = $sum22 + $prod22;
    }
    $ssd2rata = $sum22 / $total22;

    $total33 = count($_POST['ssdom3']);
    $sum33 = 0;
    for ($i33 = 0; $i33 < $total33; $i33++) {
        $prod33 = $_POST['ssdom3'][$i33];
        $sum33 = $sum33 + $prod33;
    }
    $ssd3rata = $sum33 / $total33;

    $total44 = count($_POST['ssdom4']);
    $sum44 = 0;
    for ($i44 = 0; $i44 < $total44; $i44++) {
        $prod44 = $_POST['ssdom4'][$i44];
        $sum44 = $sum44 + $prod44;
    }
    $ssd4rata = $sum44 / $total44;

    $total55 = count($_POST['ssdom5']);
    $sum55 = 0;
    for ($i55 = 0; $i55 < $total55; $i55++) {
        $prod55 = $_POST['ssdom5'][$i55];
        $sum55 = $sum55 + $prod55;
    }
    $ssd5rata = $sum55 / $total55;

    $total66 = count($_POST['ssdom6']);
    $sum66 = 0;
    for ($i66 = 0; $i66 < $total66; $i66++) {
        $prod66 = $_POST['ssdom6'][$i66];
        $sum66 = $sum66 + $prod66;
    }
    $ssd6rata = $sum66 / $total66;

    $total77 = count($_POST['ssdom7']);
    $sum77 = 0;
    for ($i77 = 0; $i77 < $total77; $i77++) {
        $prod77 = $_POST['ssdom7'][$i77];
        $sum77 = $sum77 + $prod77;
    }
    $ssd7rata = $sum77 / $total77;

    $total88 = count($_POST['ssdom8']);
    $sum88 = 0;
    for ($i88 = 0; $i88 < $total88; $i88++) {
        $prod88 = $_POST['ssdom8'][$i88];
        $sum88 = $sum88 + $prod88;
    }
    $ssd8rata = $sum88 / $total88;

    $total99 = count($_POST['ssdom9']);
    $sum99 = 0;
    for ($i99 = 0; $i99 < $total99; $i99++) {
        $prod99 = $_POST['ssdom9'][$i99];
        $sum99 = $sum99 + $prod99;
    }
    $ssd99rata = $sum99 / $total99;

    $total1010 = count($_POST['ssdom10']);
    $sum1010 = 0;
    for ($i1010 = 0; $i1010 < $total1010; $i1010++) {
        $prod1010 = $_POST['ssdom10'][$i1010];
        $sum1010 = $sum1010 + $prod1010;
    }
    $ssd10rata = $sum1010 / $total1010;

    $sd8rata = ($ssd1rata + $ssd2rata + $ssd3rata + $ssd4rata) / 4;
    $sd9rata = ($ssd5rata + $ssd6rata + $ssd7rata + $ssd8rata + $ssd9rata + $ssd10rata) / 6;
    $d3rata = ($sd8rata + $sd9rata) / 2; // rata domain 3
    //end domain 3

    //domain 4
    $total10 = count($_POST['sdom10']);
    $sum10 = 0;
    for ($i10 = 0; $i10 < $total10; $i10++) {
        $prod10 = $_POST['sdom10'][$i10];
        $sum10 = $sum10 + $prod10;
    }
    $sd10rata = $sum10 / $total10;

    $total11 = count($_POST['sdom11']);
    $sum11 = 0;
    for ($i11 = 0; $i11 < $total11; $i11++) {
        $prod11 = $_POST['sdom11'][$i11];
        $sum11 = $sum11 + $prod11;
    }
    $sd11rata = $sum11 / $total11;

    $total12 = count($_POST['sdom12']);
    $sum12 = 0;
    for ($i3 = 0; $i12 < $total12; $i12++) {
        $prod12 = $_POST['sdom12'][$i12];
        $sum12 = $sum12 + $prod12;
    }
    $sd12rata = $sum12 / $total12;

    $total13 = count($_POST['sdom13']);
    $sum13 = 0;
    for ($i13 = 0; $i13 < $total13; $i13++) {
        $prod13 = $_POST['sdom13'][$i13];
        $sum13 = $sum13 + $prod13;
    }
    $sd13rata = $sum13 / $total13;

    $total14 = count($_POST['sdom14']);
    $sum14 = 0;
    for ($i14 = 0; $i14 < $total14; $i14++) {
        $prod14 = $_POST['sdom14'][$i14];
        $sum14 = $sum14 + $prod14;
    }
    $sd14rata = $sum14 / $total14;

    $d4rata = ($sd10rata + $sd11rata + $sd12rata + $sd13rata + $sd14rata) / 5;
    // end domain 4

    //domain 5
    $td5 = count($_POST['dom5']);
    $sd5 = 0;
    for ($id5 = 0; $id5 < $td5; $id5++) {
      $pd5 = $_POST['dom5'][$id5];
      $sd5 = $sd5 + $pd5;
    }
    $d5rata = $sd5 / $td5;
    // end domain 5

    //domain 6
    $td6 = count($_POST['dom6']);
    $sd6 = 0;
    for ($id6 = 0; $id6 < $td6; $id6++) {
      $pd6 = $_POST['dom6'][$id6];
      $sd6 = $sd6 + $pd6;
    }
    $d6rata = $sd6 / $td6;
    // end domain 6

    //domain 7
    $total15 = count($_POST['sdom15']);
    $sum15 = 0;
    for ($i15 = 0; $i15 < $total15; $i15++) {
        $prod15 = $_POST['sdom15'][$i15];
        $sum15 = $sum15 + $prod15;
    }
    $sd15rata = $sum15 / $total15;

    $total1111 = count($_POST['ssdom11']);
    $sum1111 = 0;
    for ($i1111 = 0; $i1111 < $total1111; $i1111++) {
        $prod1111 = $_POST['ssdom11'][$i1111];
        $sum1111 = $sum1111 + $prod1111;
    }
    $ssd11rata = $sum1111 / $total1111;

    $total1212 = count($_POST['ssdom12']);
    $sum1212 = 0;
    for ($i1212 = 0; $i1212 < $total1212; $i1212++) {
        $prod1212 = $_POST['ssdom12'][$i1212];
        $sum1212 = $sum1212 + $prod1212;
    }
    $ssd12rata = $sum1212 / $total1212;

    $total1313 = count($_POST['ssdom13']);
    $sum1313 = 0;
    for ($i1313 = 0; $i1313 < $total1313; $i1313++) {
        $prod1313 = $_POST['ssdom13'][$i1313];
        $sum1313 = $sum1313 + $prod1313;
    }
    $ssd13rata = $sum1313 / $total1313;

    $total1414 = count($_POST['ssdom14']);
    $sum1414 = 0;
    for ($i1414 = 0; $i1414 < $total1414; $i1414++) {
        $prod1414 = $_POST['ssdom14'][$i1414];
        $sum11 = $sum1414 + $prod1414;
    }
    $ssd14rata = $sum1414 / $total1414;

    $total1515 = count($_POST['ssdom15']);
    $sum1515 = 0;
    for ($i1515 = 0; $i1515 < $total1515; $i1515++) {
        $prod1515 = $_POST['ssdom15'][$i1515];
        $sum1515 = $sum1515 + $prod1515;
    }
    $ssd15rata = $sum1515 / $total1515;

    $total1616 = count($_POST['ssdom16']);
    $sum1616 = 0;
    for ($i1616 = 0; $i1616 < $total1616; $i1616++) {
        $prod1616 = $_POST['ssdom16'][$i1616];
        $sum1616 = $sum1616 + $prod1616;
    }
    $ssd16rata = $sum1616 / $total1616;

    $sd16rata = ($ssd11rata + $ssd12rata + $ssd13rata + $ssd14rata + $ssd15rata + $ssd16rata) / 6;

    $d7rata = ($sd15rata + $sd16rata) / 2;
    //end domain7

    $query1 = "UPDATE tbl_pengguna SET file_upload = '$name' where id_pengguna = '$id'";

      if ($db->query($query1) === TRUE ) {
        // query 2 belum dibenerin
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
?>