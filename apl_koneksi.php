<?php
$host = "localhost";
$user = "root";
$password = "";
$dbname = "apl_stanley";


$conn = mysqli_connect($host, $user, $password, $dbname);
if ($conn) {
	mysqli_select_db($conn, $dbname);
}
else{
	echo "koneksi gagal";
}
?>