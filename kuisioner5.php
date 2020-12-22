<?php
  require_once('koneksi.php');

  $nama = $_POST['nama'];
  $alamat = $_POST['alamat'];
  $telepon = $_POST['telepon'];
  $fax = $_POST['fax'];
  $d1rata = $_POST['rata'];
  $sd1rata = $_POST['rata1'];
  $sd2rata = $_POST['rata2'];
  $sd3rata = $_POST['rata3'];
  $sd4rata = $_POST['rata4'];
  $sd5rata = $_POST['rata5'];
  $sd6rata = $_POST['rata6'];
  $sd7rata = $_POST['rata7'];

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
            <h4>Kuisioner</h4>
          </div>
          
          <div class="table-responsive">
            <br>
            <form method="post">
              <input type="hidden" name="rata7" value="<?php echo $sd7rata; ?>" />
              <input type="hidden" name="rata6" value="<?php echo $sd6rata; ?>" />
              <input type="hidden" name="rata5" value="<?php echo $sd5rata; ?>" />
              <input type="hidden" name="rata4" value="<?php echo $sd4rata; ?>" />
              <input type="hidden" name="rata3" value="<?php echo $sd3rata; ?>" />
              <input type="hidden" name="rata2" value="<?php echo $sd2rata; ?>" />
              <input type="hidden" name="rata1" value="<?php echo $sd1rata; ?>" />
              <input type="hidden" name="rata" value="<?php echo $d1rata; ?>" />
              <input type="hidden" name="nama" value="<?php echo $nama; ?>" />
              <input type="hidden" name="alamat" value="<?php echo $alamat; ?>" />
              <input type="hidden" name="telepon" value="<?php echo $telepon; ?>" />
              <input type="hidden" name="fax" value="<?php echo $fax; ?>" />
            
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
