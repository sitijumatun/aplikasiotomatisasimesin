<?php 
 
include "apl_koneksi.php"; 
 
$id= $_GET['Id_KritikSaran']; 

$query = "DELETE FROM apl_kritiksaran WHERE Id_KritikSaran='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_kritiksaran.php";</script>';

?>