<?php 
 
include "apl_koneksi.php"; 
 
$id= $_GET['Id_Mesin']; 

$query = "DELETE FROM apl_mesin WHERE Id_Mesin='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_mesin.php";</script>';

?>