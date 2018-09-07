<?php
include "apl_koneksi.php";
$nama = $_POST['nama'];

$query = "INSERT INTO `apl_mesin` (`Id_Mesin`, `Nama`, `Status`) VALUES (NULL, '".$nama."', '0')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
	
    header("location: apl_mesin.php"); 
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='apl_mesin.php'>Kembali Ke Form</a>";
}

?>