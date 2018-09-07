<?php
include "apl_koneksi.php";
$posisi=$_POST['posisi'];

$query2="select * from apl_role WHERE Role='$posisi'";
$hasil2=mysqli_query($conn, $query2);
while ($data2=mysqli_fetch_array($hasil2))
{
	$role = $data2['Id_Role'];
}

$username=$_POST['username'];
$password=$_POST['password'];

$query = "INSERT INTO `apl_user` (`Id_User`, `Username`, `Password`, `Id_Role`) VALUES (NULL, '$username', '$password', '$role')";
$sql = mysqli_query($conn, $query); 

if($sql){ 
	
    header("location: apl_user.php"); 
}else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='apl_user.php'>Kembali Ke Form</a>";
}
?>