<?php
include "koneksi2.php";
$sqljumlahpeserta = "SELECT COUNT(*) as jumlahpeserta FROM peserta";
$resultjumlahpeserta= mysqli_query($conn,$sqljumlahpeserta);

									if(mysqli_num_rows($resultjumlahpeserta)>0){
											while($row = mysqli_fetch_assoc($resultjumlahpeserta)){
											echo $row["jumlahpeserta"];
											}
									}
?>