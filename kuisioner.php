<?php
  require_once('koneksi.php');

  $id = mysqli_real_escape_string($db,$_GET['id']);

  $sql = "SELECT * from tbl_pengguna ";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $satu = 1;
  $dua = 2; 
  $tiga = 3;
  $empat = 4;

  $sql = "SELECT distinct tbl_domain.nama_domain FROM tbl_pertanyaan 
  join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=1 and id_pertanyaan <=15 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=1 and id_pertanyaan <=15";
  $result = mysqli_query($db,$sql);
  $jum_data = mysqli_num_rows($result);

  $sql1 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=16 and id_pertanyaan <=20
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=16 and id_pertanyaan <=20
union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=16 and id_pertanyaan <=20";
  $result1 = mysqli_query($db,$sql1);
  $jum_data1 = mysqli_num_rows($result1);

  $sql2 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=21 and id_pertanyaan <=27 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=21 and id_pertanyaan <=27";
  $result2 = mysqli_query($db,$sql2);
  $jum_data2 = mysqli_num_rows($result2);

  $sql3 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=28 and id_pertanyaan <=34 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=28 and id_pertanyaan <=34";
  $result3 = mysqli_query($db,$sql3);
  $jum_data3 = mysqli_num_rows($result3);

  $sql4 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=35 and id_pertanyaan <=36 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=35 and id_pertanyaan <=36";
  $result4 = mysqli_query($db,$sql4);
  $jum_data4 = mysqli_num_rows($result4);

  $sql5 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=37 and id_pertanyaan <=45 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=37 and id_pertanyaan <=45";
  $result5 = mysqli_query($db,$sql5);
  $jum_data5 = mysqli_num_rows($result5);

  $sql6 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan = 46 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan = 46";
  $result6 = mysqli_query($db,$sql6);
  $jum_data6 = mysqli_num_rows($result6);

  $sql7 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=47 and id_pertanyaan <=51 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=47 and id_pertanyaan <=51";
  $result7 = mysqli_query($db,$sql7);
  $jum_data7 = mysqli_num_rows($result7);

  $sql8 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=52 and id_pertanyaan <=54
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=52 and id_pertanyaan <=54
union
SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain where id_pertanyaan >=52 and id_pertanyaan <=54
union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=52 and id_pertanyaan <=54";
  $result8 = mysqli_query($db,$sql8);
  $jum_data8 = mysqli_num_rows($result8);

  $sql9 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=55 and id_pertanyaan <=59 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=55 and id_pertanyaan <=59";
  $result9 = mysqli_query($db,$sql9);
  $jum_data9 = mysqli_num_rows($result9);

  $sql10 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=60 and id_pertanyaan <=64 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=60 and id_pertanyaan <=64";
  $result10 = mysqli_query($db,$sql10);
  $jum_data10 = mysqli_num_rows($result10);

  $sql11 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=65 and id_pertanyaan <=71 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=65 and id_pertanyaan <=71";
  $result11 = mysqli_query($db,$sql11);
  $jum_data11 = mysqli_num_rows($result11);

  $sql12 = "SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=72 and id_pertanyaan <=75
union
SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain where id_pertanyaan >=72 and id_pertanyaan <=75
union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=72 and id_pertanyaan <=75";
  $result12 = mysqli_query($db,$sql12);
  $jum_data12 = mysqli_num_rows($result12);

  $sql13 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=76 and id_pertanyaan <=83 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=76 and id_pertanyaan <=83";
  $result13 = mysqli_query($db,$sql13);
  $jum_data13 = mysqli_num_rows($result13);

  $sql14 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=84 and id_pertanyaan <=88 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=84 and id_pertanyaan <=88";
  $result14 = mysqli_query($db,$sql14);
  $jum_data14 = mysqli_num_rows($result14);

  $sql15 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=89 and id_pertanyaan <=93 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=89 and id_pertanyaan <=93";
  $result15 = mysqli_query($db,$sql15);
  $jum_data15 = mysqli_num_rows($result15);

  $sql16 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=94 and id_pertanyaan <=100 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=94 and id_pertanyaan <=100";
  $result16 = mysqli_query($db,$sql16);
  $jum_data16 = mysqli_num_rows($result16);

  $sql17 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=101 and id_pertanyaan <=105 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=101 and id_pertanyaan <=105";
  $result17 = mysqli_query($db,$sql17);
  $jum_data17 = mysqli_num_rows($result17);

  $sql18 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=106 and id_pertanyaan <=114
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=106 and id_pertanyaan <=114
union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=106 and id_pertanyaan <=114";
  $result18 = mysqli_query($db,$sql18);
  $jum_data18 = mysqli_num_rows($result18);

  $sql19 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=115 and id_pertanyaan <=120 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=115 and id_pertanyaan <=120";
  $result19 = mysqli_query($db,$sql19);
  $jum_data19 = mysqli_num_rows($result19);

  $sql20 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=121 and id_pertanyaan <=123 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=121 and id_pertanyaan <=123";
  $result20 = mysqli_query($db,$sql20);
  $jum_data20 = mysqli_num_rows($result20);

  $sql21 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=124 and id_pertanyaan <=125 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=124 and id_pertanyaan <=125";
  $result21 = mysqli_query($db,$sql21);
  $jum_data21 = mysqli_num_rows($result21);

  $sql22 = "SELECT distinct tbl_subdomain.nama_subdomain FROM tbl_pertanyaan 
  join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=126 and id_pertanyaan <=130 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=126 and id_pertanyaan <=130";
  $result22 = mysqli_query($db,$sql22);
  $jum_data22 = mysqli_num_rows($result22);

  $sql23 = "SELECT distinct tbl_domain.nama_domain FROM tbl_pertanyaan 
  join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=131 and id_pertanyaan <=134 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=131 and id_pertanyaan <=134";
  $result23 = mysqli_query($db,$sql23);
  $jum_data23 = mysqli_num_rows($result23);

  $sql24 = "SELECT distinct tbl_domain.nama_domain FROM tbl_pertanyaan 
  join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=135 and id_pertanyaan <=152 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=135 and id_pertanyaan <=152";
  $result24 = mysqli_query($db,$sql24);
  $jum_data24 = mysqli_num_rows($result24);

  $sql25 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=153 and id_pertanyaan <=172
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=153 and id_pertanyaan <=172
union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=153 and id_pertanyaan <=172";
  $result25 = mysqli_query($db,$sql25);
  $jum_data25 = mysqli_num_rows($result25);

  $sql26 = "
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=173 and id_pertanyaan <=182
union
SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain where id_pertanyaan >=173 and id_pertanyaan <=182
union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=173 and id_pertanyaan <=182";
  $result26 = mysqli_query($db,$sql26);
  $jum_data26 = mysqli_num_rows($result26);

  $sql27 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=183 and id_pertanyaan <=190 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=183 and id_pertanyaan <=190";
  $result27 = mysqli_query($db,$sql27);
  $jum_data27 = mysqli_num_rows($result27);

  $sql28 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=191 and id_pertanyaan <=199 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=191 and id_pertanyaan <=199";
  $result28 = mysqli_query($db,$sql28);
  $jum_data28 = mysqli_num_rows($result28);

  $sql29 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=200 and id_pertanyaan <=207 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=200 and id_pertanyaan <=207";
  $result29 = mysqli_query($db,$sql29);
  $jum_data29 = mysqli_num_rows($result29);

  $sql30 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=208 and id_pertanyaan <=211 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=208 and id_pertanyaan <=211";
  $result30 = mysqli_query($db,$sql30);
  $jum_data30 = mysqli_num_rows($result30);

  $sql31 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain FROM tbl_pertanyaan 
  join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
  where id_pertanyaan >=212 and id_pertanyaan <=218 
  union SELECT pertanyaan FROM tbl_pertanyaan where id_pertanyaan >=212 and id_pertanyaan <=218";
  $result31 = mysqli_query($db,$sql31);
  $jum_data31 = mysqli_num_rows($result31);

  if(isset($_POST['submit'])){
    
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="../../assets/ico/favicon.ico">

    <title>Kuisioner</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="dashboard.css" rel="stylesheet">

  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-3 main">
          <div class="sub-header">
            <h4 style="text-align: center;">Kuisioner <?php echo $row['nama_perusahaan'];?></h4>
            <p><?php echo $row['alamat_perusahaan'];?></p>
            <p>Telepon: <?php echo $row['telp_perusahaan'];?></p>
            <p>Fax: <?php echo $row['fax_perusahaan'];?></p>
            <p>Auditor: <?php echo $row['nama_auditor'];?></p>
          </div>
          
          <div class="table-responsive">
            <br>
            <form method="post" action="proses.php?id=<?php echo $id;?>">
              <table class="table table-striped">
               <thead>
                  <tr>
                    <th>No</th>
                    <th>Pertanyaan</th>
                    <th>Response</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    $no = 0;
                    while($tampil = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $tampil['nama_domain']?></td>
                          <td>
                            <select name="dom1[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil1['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else if($no == 1){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil1['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no-1;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil1['nama_domain']?></td>
                          <td>
                            <select name="sdom1[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil2['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil2['nama_subdomain']?></td>
                          <td>
                            <select name="sdom2[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil3['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil3['nama_subdomain']?></td>
                          <td>
                            <select name="sdom3[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil4['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil4['nama_subdomain']?></td>
                          <td>
                            <select name="sdom4[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil5['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil5['nama_subdomain']?></td>
                          <td>
                            <select name="sdom5[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil6 = mysqli_fetch_array($result6,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil6['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil6['nama_subdomain']?></td>
                          <td>
                            <select name="sdom6[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil7 = mysqli_fetch_array($result7,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil7['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil7['nama_subdomain']?></td>
                          <td>
                            <select name="sdom7[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil8 = mysqli_fetch_array($result8,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil8['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else if($no == 1){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil8['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                       else if($no == 2){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil8['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no-2;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil8['nama_domain']?></td>
                          <td>
                            <select name="ssdom1[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil9 = mysqli_fetch_array($result9,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil9['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil9['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom2[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil10 = mysqli_fetch_array($result10,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil10['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil10['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom3[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil11 = mysqli_fetch_array($result11,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil11['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil11['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom4[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil12 = mysqli_fetch_array($result12,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil12['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                       else if($no == 1){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil12['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no-1;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil12['nama_subdomain']?></td>
                          <td>
                            <select name="ssdom5[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil13 = mysqli_fetch_array($result13,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil13['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil13['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom6[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil14 = mysqli_fetch_array($result14,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil14['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil14['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom7[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil15 = mysqli_fetch_array($result15,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil15['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil15['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom8[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil16 = mysqli_fetch_array($result16,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil16['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil16['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom9[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil17 = mysqli_fetch_array($result17,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil17['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil17['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom10[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil18 = mysqli_fetch_array($result18,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil18['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else if($no == 1){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil18['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no-1;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil18['nama_domain']?></td>
                          <td>
                            <select name="sdom10[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil19 = mysqli_fetch_array($result19,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil19['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil19['nama_subdomain']?></td>
                          <td>
                            <select name="sdom11[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil20 = mysqli_fetch_array($result20,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil20['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil20['nama_subdomain']?></td>
                          <td>
                            <select name="sdom12[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil21 = mysqli_fetch_array($result21,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil21['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil21['nama_subdomain']?></td>
                          <td>
                            <select name="sdom13[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil22 = mysqli_fetch_array($result22,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil22['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil22['nama_subdomain']?></td>
                          <td>
                            <select name="sdom14[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                  $no = 0;
                    while($tampil23 = mysqli_fetch_array($result23,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil23['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $tampil23['nama_domain']?></td>
                          <td>
                            <select name="dom5[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                  $no = 0;
                    while($tampil24 = mysqli_fetch_array($result24,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil24['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td><?php echo $tampil24['nama_domain']?></td>
                          <td>
                            <select name="dom6[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil25 = mysqli_fetch_array($result25,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td><b><?php echo $tampil25['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else if($no == 1){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil25['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no-1;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil25['nama_domain']?></td>
                          <td>
                            <select name="sdom15[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil26 = mysqli_fetch_array($result26,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil26['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                       else if($no == 1){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil26['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no-1;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil26['nama_subdomain']?></td>
                          <td>
                            <select name="ssdom11[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil27 = mysqli_fetch_array($result27,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil27['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil27['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom12[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil28 = mysqli_fetch_array($result28,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil28['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil28['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom13[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil29 = mysqli_fetch_array($result29,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil29['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil29['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom14[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil30 = mysqli_fetch_array($result30,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil30['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil30['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom15[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $no = 0;
                    while($tampil31 = mysqli_fetch_array($result31,MYSQLI_ASSOC)){
                      if($no == 0){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil31['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td><?php echo $no;?></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo $tampil31['nama_subsubdomain']?></td>
                          <td>
                            <select name="ssdom16[]">
                              <option value="<?php echo $satu;?>">1</option>
                              <option value="<?php echo $dua;?>">2</option>
                              <option value="<?php echo $tiga;?>">3</option>
                              <option value="<?php echo $empat;?>">4</option>
                            </select>
                          </td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>
                </tbody>
               </table>

              <div style="float: right;">
                File Pendukung
                <input type="file" name="berkas" required>
                <button style="float: right; height:40px;" type="submit" class="btn btn-primary" name="submit"><span class="glyphicon glyphicon-chevron-right"></span></button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
    <script src="docs.min.js"></script>
  </body>
</html>
