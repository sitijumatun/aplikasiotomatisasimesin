<?php 
 
include "apl_koneksi.php"; 
 
$id= $_GET['Id_Produk']; 

$query = "DELETE FROM apl_produk WHERE Id_Produk='".$id."'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil menghapus data !"); document.location="apl_produk.php";</script>';

?>