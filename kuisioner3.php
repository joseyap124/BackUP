<?php
  require_once('koneksi.php');

  $id = mysqli_real_escape_string($db,$_GET['id']);

  $sql = "SELECT * from tbl_pengguna where id_pengguna = '$id' ";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $d1rata = $_POST['rata'];

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

  $no = 1;

  $satu = 1;
  $dua = 2; 
  $tiga = 3;
  $empat = 4;

  $sql4 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=35 and id_pertanyaan <=36";
  $result4 = mysqli_query($db,$sql4);
  $jum_data4 = mysqli_num_rows($result4);

  $sql5 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=37 and id_pertanyaan <=45";
  $result5 = mysqli_query($db,$sql5);
  $jum_data5 = mysqli_num_rows($result5);

  $sql6 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=46 and id_pertanyaan <=46";
  $result6 = mysqli_query($db,$sql6);
  $jum_data6 = mysqli_num_rows($result6);

  $sql7 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=47 and id_pertanyaan <=51";
  $result7 = mysqli_query($db,$sql7);
  $jum_data7 = mysqli_num_rows($result7);

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
            <form method="post" action="kuisioner4.php?id=<?php echo $id;?>">
              <input type="hidden" name="rata3" value="<?php echo $sd3rata; ?>" />
              <input type="hidden" name="rata2" value="<?php echo $sd2rata; ?>" />
              <input type="hidden" name="rata1" value="<?php echo $sd1rata; ?>" />
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
                    while($tampil4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil4['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil5['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil6 = mysqli_fetch_array($result6,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil6['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil7 = mysqli_fetch_array($result7,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil7['pertanyaan']?></td>
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
                    }
                  ?>
                </tbody>
               </table>

              <div style="float: right;">
                <button style="float: right; height:40px;" type="submit" class="btn btn-primary" name="submit3"><span class="glyphicon glyphicon-chevron-right"></span></button>
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
