<?php
  require_once('koneksi.php');

  $id = mysqli_real_escape_string($db,$_GET['id']);

  $sql = "SELECT * from tbl_pengguna where id_pengguna = '$id' ";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

  $no = 1;

  $sql = "SELECT * FROM tbl_pertanyaan where id_pertanyaan >=1 and id_pertanyaan <=15";
  $result = mysqli_query($db,$sql);
  $jum_data = mysqli_num_rows($result);

  /*
  if(isset($_POST['submit'])){
    $v = $_POST['dom1'];

    
    $total = count($_POST['dom1']);
    $sum = 0;
    for ($i = 0; $i < $total; $i++) {
        $prod = $_POST['dom1'][$i];
        $sum = $sum + $prod;
    }

    $rata = $sum / $total;

    $query1 = "INSERT INTO tbl_pengguna(id_pengguna ,nama_perusahaan,alamat_perusahaan, telp_perusahaan,fax_perusahaan) 
            VALUES('$no_bk','$nama','$alamat','$telepon','$fax')";

      if ($db->query($query1) === TRUE ) {
        $query2 = "INSERT INTO tbl_penilaian(id_pengguna,id_domain,nilai_domain) 
            VALUES((Select id_pengguna from tbl_pengguna where id_pengguna = '$no_bk'),(Select id_domain from tbl_domain where id_domain = 'DOM1'),$rata)";    
        if($db->query($query2)){
          echo "<script>alert('Berhasil!','','success');</script>";
            echo "<script>location='end.php';</script>";
        }     
      }
      else{
        echo "INFORMASI ANDA SALAH!";
        echo "<script>location='index.php';</script>";
      }
    
  }
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
            <form method="post" action="kuisioner2.php?id=<?php echo $id;?>">
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
                  $satu = 1;
                  $dua = 2; 
                  $tiga = 3;
                  $empat = 4;
                    while($tampil = mysqli_fetch_array($result,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil['pertanyaan']?></td>
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
