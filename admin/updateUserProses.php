<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location: admin.php") ;
	}
	include("../config/koneksi.php") ;
	
	$user = $_POST['user'] ;
	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;
	
	$sql_update = "UPDATE `user` SET `user`='{$user}',`email`='{$email}',`pass`='{$pass}' WHERE `user`='{$user}'" ;
	
	$query_update = mysqli_query($konek,$sql_update) ;
	
	if($query_update){
		echo '
		<script>
			alert("update daftar sukses");
			window.location = "admin.php"
		</script>
		';
	
	}else{
		echo "Error: " . $sql_update . "<br>" . mysqli_error($konek);
	}
	
?>
