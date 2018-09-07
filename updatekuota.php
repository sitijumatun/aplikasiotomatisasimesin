<?php
include "koneksi2.php";
$kuota = $_POST['kuota'];

  

  $query = " UPDATE `kuota` SET `kuota` = '".$kuota."' WHERE `kuota`.`id` = 1";
  $sql = mysqli_query($conn, $query); 

  if($sql){ 
  ?>
	<script language="JavaScript">alert('Data Berhasil Di Tambahkan !');
	
 <?php
    header("location: apl_mesin.php"); 
  }else{
	?>
	<script language="JavaScript">alert('Data Gagal di Tambahkan !');
	<?php
    header("location: apl_mesin.php");
  }
?>