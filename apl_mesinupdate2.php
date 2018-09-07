<?php 
 
include "apl_koneksi.php"; 
 
$id= $_POST['id']; 
$nama= $_POST['nama']; 
$status= $_POST['status']; 

$query = "UPDATE `apl_mesin` SET `Nama` = '".$nama."', `Status` = '".$status."' WHERE `apl_mesin`.`Id_Mesin` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data mesin !"); document.location="apl_mesin.php";</script>';

?>