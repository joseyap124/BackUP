<?php
  require_once('koneksi.php');

  $id = mysqli_real_escape_string($db,$_GET['id']);

  $sql = "SELECT * from tbl_pengguna where id_pengguna = '$id' ";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
  
  $total = count($_POST['dom1']);
  $sum = 0;
  for ($i = 0; $i < $total; $i++) {
      $prod = $_POST['dom1'][$i];
      $sum = $sum + $prod;
  }
  $d1rata = $sum / $total;

  $no = 1;

  $satu = 1;
  $dua = 2; 
  $tiga = 3;
  $empat = 4;

  $sql = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=16 and id_pertanyaan <=20";
  $result = mysqli_query($db,$sql);
  $jum_data = mysqli_num_rows($result);

  $sql2 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=21 and id_pertanyaan <=27";
  $result2 = mysqli_query($db,$sql2);
  $jum_data2 = mysqli_num_rows($result2);

  $sql3 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=28 and id_pertanyaan <=34";
  $result3 = mysqli_query($db,$sql3);
  $jum_data3 = mysqli_num_rows($result3);


    /*
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

    $d2rata = ($sd1rata+$sd2rata+$sd3rata)/3; //2 diganti dengan total sub domain
    */
  
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
            <form method="post" action="kuisioner3.php?id=<?php echo $id;?>">
              <input type="hidden" name="rata" value="<?php echo $d1rata; ?>" />
            
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
                    while($tampil = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil2['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil3['pertanyaan']?></td>
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
                    }
                  ?>
                </tbody>
               </table>

              <div style="float: right;">
                <button style="float: right; height:40px;" type="submit" class="btn btn-primary" name="submit2"><span class="glyphicon glyphicon-chevron-right"></span></button>
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
