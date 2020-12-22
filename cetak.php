<?php
//Menggabungkan dengan file koneksi yang telah kita buat
include 'koneksi.php';

$id = mysqli_real_escape_string($db,$_GET['id']);
 $sql = "SELECT * from tbl_pengguna where id_pengguna = '$id' ";
  $result = mysqli_query($db,$sql);
  $row = mysqli_fetch_array($result,MYSQLI_ASSOC);

$tgl_cetak = date("Y-m-d");

header("Content-type: application/vnd.ms-word");
header("Content-Disposition: attachment;Filename=LaporanArsipSeluruh".$tgl_cetak.".doc");

			        $no = 1;
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<div align="center">
		<h2>Hasil Kuisioner <?php echo $row['nama_perusahaan']?> Tanggal Cetak <?= $tgl_cetak; ?></h2>
		
		<table border="1">
	    	<thead>
	    		<tr>
					<th><b>No</b></th>
					<th><b>Domain</b></th>
					<th><b>Response</b></th>
				</tr>
	    	</thead>
	    	<tbody>
				<?php
				$sql1 = "SELECT * from tbl_penilaian join tbl_domain on tbl_penilaian.id_domain = tbl_domain.id_domain where id_pengguna = '$id'";
  $result1 = mysqli_query($db,$sql1);
  $jum_data1 = mysqli_num_rows($result1);

  $sql2 = "SELECT * from tbl_penilaian join tbl_subdomain on tbl_penilaian.id_subdomain = tbl_subdomain.id_subdomain where id_pengguna = '$id'";
  $result2 = mysqli_query($db,$sql2);
  $jum_data2 = mysqli_num_rows($result2);

  $sql3 = "SELECT * from tbl_penilaian join tbl_subsubdomain on tbl_penilaian.id_subsubdomain = tbl_subsubdomain.id_subsubdomain where id_pengguna = '$id'";
  $result3 = mysqli_query($db,$sql3);
  $jum_data3 = mysqli_num_rows($result3);
                    while($tampil1 = mysqli_fetch_array($result1,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil1['nama_domain']?></td>
                    <td><?php echo $tampil1['nilai_domain']?></td>
                  </tr>
                  <?php
                    }
                  ?>
                  <?php
                    while($tampil2 = mysqli_fetch_array($result2,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil2['nama_subdomain']?></td>
                    <td><?php echo $tampil2['nilai_subdomain']?></td>
                  </tr>
                  <?php
                    }
                  ?>
                  <?php
                    while($tampil3 = mysqli_fetch_array($result3,MYSQLI_ASSOC)){
                  ?>
                  <tr>
                    <td><?php echo $no++;?></td>
                    <td><?php echo $tampil3['nama_subsubdomain']?></td>
                    <td><?php echo $tampil3['nilai_subsubdomain']?></td>
                  </tr>
                  <?php
                    }
                  ?>
			    ?>
	    	</tbody>
	    </table>
    </div>
 
</body>
</html>