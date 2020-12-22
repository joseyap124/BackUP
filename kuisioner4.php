<?php
  require_once('koneksi.php');

  $id = mysqli_real_escape_string($db,$_GET['id']);

  $sql = "SELECT * from tbl_pengguna where id_pengguna = '$id' ";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $d1rata = $_POST['rata'];
  $sd1rata = $_POST['rata1'];
  $sd2rata = $_POST['rata2'];
  $sd3rata = $_POST['rata3'];

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

  $no = 1;

  $satu = 1;
  $dua = 2; 
  $tiga = 3;
  $empat = 4;

  $sql = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=52 and id_pertanyaan <=54";
  $result = mysqli_query($db,$sql);
  $jum_data = mysqli_num_rows($result);

  $sql2 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=55 and id_pertanyaan <=55";
  $result2 = mysqli_query($db,$sql2);
  $jum_data2 = mysqli_num_rows($result2);

  $sql3 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=56 and id_pertanyaan <=56";
  $result3 = mysqli_query($db,$sql3);
  $jum_data3 = mysqli_num_rows($result3);

  $sql4 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=57 and id_pertanyaan <=57";
  $result4 = mysqli_query($db,$sql4);
  $jum_data4 = mysqli_num_rows($result4);

  $sql5 = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=58 and id_pertanyaan <=58";
  $result5 = mysqli_query($db,$sql5);
  $jum_data5 = mysqli_num_rows($result5);

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
            <form method="post" action="proses4.php?id=<?php echo $id;?>" enctype="multipart/form-data">
              <input type="hidden" name="id" value="<?php echo $id; ?>" />
              <input type="hidden" name="rata7" value="<?php echo $sd7rata; ?>" />
              <input type="hidden" name="rata6" value="<?php echo $sd6rata; ?>" />
              <input type="hidden" name="rata5" value="<?php echo $sd5rata; ?>" />
              <input type="hidden" name="rata4" value="<?php echo $sd4rata; ?>" />
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
                    while($tampil = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil2['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil3['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil4 = mysqli_fetch_array($result4,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil4['pertanyaan']?></td>
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
                    }
                  ?>
                  <?php
                    while($tampil5 = mysqli_fetch_array($result5,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil5['pertanyaan']?></td>
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
                    }
                  ?>
                </tbody>
               </table>

              <div style="float: right;">
              File Pendukung
              <input type="file" name="berkas" required> 
              <br>
                <button style="float: right; height:40px;" type="submit" class="btn btn-primary" name="submit4"><span class="glyphicon glyphicon-chevron-right"></span></button>
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
