<?php 
 
include "apl_koneksi.php"; 
 
$id= $_POST['id']; 
$nama= $_POST['nama']; 
$status= $_POST['status']; 

$query = "UPDATE `apl_produk` SET `Nama` = '".$nama."', `Status` = '".$status."' WHERE `apl_produk`.`Id_Produk` = '".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data mesin !"); document.location="apl_produk.php";</script>';

?>