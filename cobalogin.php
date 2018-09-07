<?php
	$host = "localhost";
	$user = "root";
	$password = "";
	$dbname = "apl_stanley";	
	$conn = mysqli_connect($host, $user, $password, $dbname);	
	$username2 = $_POST['username'];
	$password2 = $_POST['password'];
	$sqlnama = "SELECT * FROM apl_user WHERE username='$username2' && password='$password2'";
			$resultnama = mysqli_query($conn,$sqlnama);
			if(mysqli_num_rows($resultnama)>0){
					while($row = mysqli_fetch_assoc($resultnama)){
							$username = $row['Username'];
							$password = $row ['Password'];
							$role = $row['Id_Role'];
							echo $username;
							echo $password;
							echo $role;
					}
			}
	
	
	
	
	
	
	
	
	
	
	

?>




