<?php
  require_once('koneksi.php');

  $id = mysqli_real_escape_string($db,$_GET['id']);

  $sql = "SELECT * from tbl_pengguna where id_pengguna = '$id'";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $sql = "SELECT distinct tbl_domain.nama_domain FROM tbl_pertanyaan 
  join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=1 and id_pertanyaan <=15";
  $result = mysqli_query($db,$sql);
  $jum_data = mysqli_num_rows($result);

  $sql1 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=16 and id_pertanyaan <=20
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=16 and id_pertanyaan <=51";
  $result1 = mysqli_query($db,$sql1);
  $jum_data1 = mysqli_num_rows($result1);

  $sql8 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=52 and id_pertanyaan <=71
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=52 and id_pertanyaan <=71
union
SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain 
on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain where id_pertanyaan >=52 and id_pertanyaan <=71
";
  $result8 = mysqli_query($db,$sql8);
  $jum_data8 = mysqli_num_rows($result8);

  $sql12 = "SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=72 and id_pertanyaan <=75
union
SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain where id_pertanyaan >=72 and id_pertanyaan <=75";
  $result12 = mysqli_query($db,$sql12);
  $jum_data12 = mysqli_num_rows($result12);

  $sql13 = "SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
where id_pertanyaan >=76 and id_pertanyaan <=105";
  $result13 = mysqli_query($db,$sql13);
  $jum_data13 = mysqli_num_rows($result13);

  $sql18 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=106 and id_pertanyaan <=130
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=106 and id_pertanyaan <=130";
  $result18 = mysqli_query($db,$sql18);
  $jum_data18 = mysqli_num_rows($result18);

  $sql23 = "SELECT distinct tbl_domain.nama_domain FROM tbl_pertanyaan 
  join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=131 and id_pertanyaan <=152";
  $result23 = mysqli_query($db,$sql23);
  $jum_data23 = mysqli_num_rows($result23);

  $sql25 = "SELECT distinct tbl_domain.nama_domain 
FROM tbl_pertanyaan 
join tbl_domain on tbl_pertanyaan.id_domain = tbl_domain.id_domain where id_pertanyaan >=153 and id_pertanyaan <=172
union
SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=153 and id_pertanyaan <=172";
  $result25 = mysqli_query($db,$sql25);
  $jum_data25 = mysqli_num_rows($result25);

  $sql26 = "SELECT distinct tbl_subdomain.nama_subdomain 
FROM tbl_pertanyaan 
join tbl_subdomain on tbl_pertanyaan.id_subdomain = tbl_subdomain.id_subdomain where id_pertanyaan >=173 and id_pertanyaan <=218
union
SELECT distinct tbl_subsubdomain.nama_subsubdomain 
FROM tbl_pertanyaan 
join tbl_subsubdomain on tbl_pertanyaan.id_subsubdomain = tbl_subsubdomain.id_subsubdomain 
where id_pertanyaan >=173 and id_pertanyaan <=218";
  $result26 = mysqli_query($db,$sql26);
  $jum_data26 = mysqli_num_rows($result26);

  $no = 1;

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
          <div class="sub-header" style="text-align: center;">
            <H1>THANK YOU <?php echo $row['nama_perusahaan']?></H1>
            <h3>Hasil Kuisioner</h3>
          </div>
          
          <div class="table-responsive">
            <br>
            <form method="post" action="proses.php?id=<?php echo $id;?>">
              <table class="table table-striped">
               <thead>
                  <tr>
                    <th>No</th>
                    <th>Domain</th>
                    <th>Response</th>
                  </tr>
                </thead>

                <tbody>
                  <?php
                    while($tampil = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  ?>
                        <tr>
                          <td><?php echo $no++;?></td>
                          <td><b><?php echo $tampil['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php                   
                    }
                  ?>

                  <?php
                    while($tampil1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                      if($no == 2){
                  ?>
                        <tr>
                          <td><?php echo $no++;?></td>
                          <td><b><?php echo $tampil1['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                      }
                      else{
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil1['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    while($tampil8 = mysqli_fetch_array($result8,MYSQLI_ASSOC)){
                      if($no == 10){
                  ?>
                        <tr>
                          <td><?php echo "3";?></td>
                          <td><b><?php echo $tampil8['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else if($no == 11){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil8['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                       else{
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil8['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    while($tampil12 = mysqli_fetch_array($result12,MYSQLI_ASSOC)){
                      if($no == 16){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil12['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil12['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    while($tampil13 = mysqli_fetch_array($result13,MYSQLI_ASSOC)){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil13['nama_subsubdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                    }
                  ?>

                  <?php
                    while($tampil18 = mysqli_fetch_array($result18,MYSQLI_ASSOC)){
                      if($no == 23){
                  ?>
                        <tr>
                          <td><?php echo "4";?></td>
                          <td><b><?php echo $tampil18['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil18['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    $nono = 5;
                    while($tampil23 = mysqli_fetch_array($result23,MYSQLI_ASSOC)){
                  ?>
                        <tr>
                          <td><?php echo $nono++;?></td>
                          <td><b><?php echo $tampil23['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                    }
                  ?>

                  <?php
                    while($tampil25 = mysqli_fetch_array($result25,MYSQLI_ASSOC)){
                      if($no == 31){
                  ?>
                        <tr>
                          <td><?php echo "7";?></td>
                          <td><b><?php echo $tampil25['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil25['nama_domain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>

                  <?php
                    while($tampil26 = mysqli_fetch_array($result26,MYSQLI_ASSOC)){
                      if($no == 32){
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil26['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                      else{
                  ?>
                        <tr>
                          <td></td>
                          <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><?php echo $tampil26['nama_subdomain']?></b></td>
                          <td></td>
                        </tr>
                  <?php
                        $no++;
                      }
                    }
                  ?>
                </tbody>
               </table>

              <div style="float: right;">
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
