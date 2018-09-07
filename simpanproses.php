<?php
include "koneksi2.php";
$RFID = $_POST['RFID'];
$Nama = $_POST['Nama'];
$foto = $_FILES['foto']['name'];
$tmp = $_FILES['foto']['tmp_name'];
  
$fotobaru = date('dmYHis').$foto;
$path = "images/".$fotobaru;

if(move_uploaded_file($tmp, $path)){ 
  $query = "INSERT INTO peserta VALUES('".$RFID."', '".$Nama."', '0', '','".$fotobaru."')";
  $sql = mysqli_query($conn, $query); 

  if($sql){ 
    header("location: dashboard.php"); 
  }else{
    echo "Maaf, Terjadi kesalahan saat mencoba untuk menyimpan data ke database.";
    echo "<br><a href='pendaftaran2.php'>Kembali Ke Form</a>";
  }
}else{
  // Jika gambar gagal diupload, Lakukan :
  echo "Maaf, Gambar gagal untuk diupload.";
  echo "<br><a href='pendaftaran2.php'>Kembali Ke Form</a>";
}
?>