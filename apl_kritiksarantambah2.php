<?php
include "apl_koneksi.php";
$nama=$_POST['nama'];

$query2="select * from apl_user WHERE username='$nama'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$role = $data2['Id_User'];
}

$isi=$_POST['kritik'];


$query = "INSERT INTO `apl_kritiksaran` (`Id_KritikSaran`, `Id_User`, `KritikSaran`, `Tanggal`) VALUES (NULL, '$role', '$isi', NOW());";
$sql = mysqli_query($conn, $query); 

if($sql){ 
	
    header("location: apl_operatorkritiksaran.php"); 
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='apl_kritiksaran.php'>Kembali Ke Form</a>";
}
?>