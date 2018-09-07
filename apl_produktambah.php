<?php
include "apl_koneksi.php";
$nama = $_POST['nama'];


  

$query = "INSERT INTO `apl_produk` (`Id_Produk`, `Nama`, `Status`) VALUES (NULL, '".$nama."', '0')";
$sql = mysqli_query($conn, $query); 

if($sql){ 	
    header("location: apl_produk.php"); 
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='kuota.php'>Kembali Ke Form</a>";
}

?>