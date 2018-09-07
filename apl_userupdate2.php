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
$id=$_POST['id'];
$password=$_POST['password'];

$query = "UPDATE `apl_user` SET `Username` = '$username', `Password` = '$password', `Id_Role` = '$role' WHERE `apl_user`.`Id_User` = '$id'"; 
$hasil = mysqli_query($conn,$query);
 
echo '<script language="javascript">alert("Anda berhasil mengupdate data mesin !"); document.location="apl_user.php";</script>';

?>