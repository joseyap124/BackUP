<?php
  require_once('koneksi.php');

  $sql_ag = "SELECT * FROM tbl_pengguna";
  $result_ag = mysqli_query($db,$sql_ag);

  if(isset($_POST['submitidx'])){
    $id = $_POST['pengguna'];
    $kode = $_POST['code'];
    
    $sql = "SELECT * FROM tbl_pengguna where id_pengguna = '$id'";
    $result = mysqli_query($db,$sql);
    $data = mysqli_fetch_array($result,MYSQLI_ASSOC);

    
    if($kode == $data['code_kuisioner']){

      echo "<script>alert('berhasil!','','success');</script>";
      echo "<script>location='kuisioner.php?id=$id'</script>";
      
    }
    else{
      echo "<script>alert('Gagal!','','success');</script>";
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

    <title>Kuisioner</title>

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
            <h4>Kuisioner Data Client</h4>
          </div>
          
          <div class="table-responsive">
            <br>
              <form method="post">
                <div class="form-group">
                  <p>Nama Client / Perusahaan</p>
                  <select class="form-control" name="pengguna">
                  <?php 
                    while($tampil_ag = mysqli_fetch_array($result_ag,MYSQLI_ASSOC)){
                  ?>  
                      <option value="<?php echo $tampil_ag['id_pengguna']; ?>"><?php echo $tampil_ag['nama_perusahaan'];?></option>
                  <?php 
                    }
                  ?>
                  </select>
                </div>
                <br>
                <div class="form-group">
                  <p>Kode</p>
                  <input type="password" class="form-control" placeholder="xxxxxxxxxx" name="code" required>
                </div>
                <br>
                <button style="float: right; height:40px;" type="submit" class="btn btn-primary" name="submitidx"><span class="glyphicon glyphicon-chevron-right"></span></button>
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
