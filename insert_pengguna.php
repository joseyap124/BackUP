<?php
  require_once('koneksi.php');

  $sqll = "SELECT IFNULL(max(id_pengguna),1) AS nobk FROM tbl_pengguna ";
        $result_2 = mysqli_query($db,$sqll);
        $row_2 = mysqli_fetch_array($result_2,MYSQLI_ASSOC);
        $temp = $row_2['nobk'];

        if($temp > 0){
          $no_bk = "USR-1000001";
        }
        else{
          $awal = "USR-";
          $temp_pj = substr($temp,4);
          $tambah_no = $temp_pj+1;
          $no_bk = $awal.$tambah_no;
        }

  if(isset($_POST['btnsubmit'])){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $telepon = $_POST['telepon'];
    $fax = $_POST['fax'];
    $auditor = $_POST['nama_auditor'];

    $query1 = "INSERT INTO tbl_pengguna(id_pengguna ,nama_perusahaan,alamat_perusahaan, telp_perusahaan,fax_perusahaan,tanggal,code_kuisioner,nama_auditor) 
            VALUES('$no_bk','$nama','$alamat','$telepon','$fax',curdate(),CONCAT(SUBSTRING('$no_bk',5),curdate()),'$auditor')";

    if ($db->query($query1) === TRUE ) {
      echo "<script>alert('Berhasil!','','success');</script>";
      echo "<script>location='insert_pengguna.php';</script>";
    }
    else{
      echo "<script>alert('GAGAL!','','success');</script>";
      echo "<script>location='insert_pengguna.php';</script>";
    }
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

    <title>Insert Data Client</title>

    <link href="bootstrap.min.css" rel="stylesheet">

    <link href="dashboard.css" rel="stylesheet">

  </head>

  <body>
    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-9 col-sm-offset-3 col-md-6 col-md-offset-3 main">

          <div class="sub-header">
            <h4>Form Data Client</h4>
          </div>
          
          <div class="table-responsive">
            <br>
              <form method="post">
                <div class="form-group">
                  <p>Nama Client / Perusahaan</p>
                  <input type="text" class="form-control" placeholder="Nama" name="nama" required>
                </div>
                <br>
                <div class="form-group">
                  <p>Telepon</p>
                  <input type="text" class="form-control" placeholder="021-xxxxxxxx" name="telepon" onkeypress="return hanyaAngka(event)" required>
                </div>
                <br>
                <div class="form-group">
                  <p>Fax</p>
                  <input type="text" class="form-control" placeholder="021-xxxxxxxx" name="fax" onkeypress="return hanyaAngka(event)" required>
                </div>
                <br>
                <div class="form-group">
                  <p>Alamat</p>
                  <textarea class="form-control" name="alamat" required></textarea>
                </div>
                <br>
                <div class="form-group">
                  <p>Nama Auditor</p>
                  <input type="text" class="form-control" placeholder="Nama" name="nama_auditor" required>
                </div>
                <br>
                <button style="float: right; height:40px;" type="submit" class="btn btn-primary" name="btnsubmit"><span class="glyphicon glyphicon-chevron-right"></span></button>
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
