<?php 
 
include "apl_koneksi.php"; 
 
$id= $_GET['Id_User']; 

$query = "DELETE FROM apl_user WHERE Id_User='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_user.php";</script>';

?>