<?php
	session_start();
	if(!isset($_SESSION['user'])){
		header("Location: formLoginUser.php") ;
	}
	include("../config/koneksi.php") ;
	
	$user = $_POST['user'] ;
	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;
	
	$sql_insert = "INSERT INTO `user`(`user`, `email`, `pass`) VALUES ('{$user}','{$email}','{$pass}')" ;
	
	$query_insert = mysqli_query($konek,$sql_insert) ;
	
	if($query_insert){
		echo '
		<script>
			alert("daftar sukses");
			window.location = "formLoginUser.php"
		</script>
		';
	
	}else{
		echo "Error: " . $sql_insert . "<br>" . mysqli_error($konek);
	}
	
?>
