<?php
	session_start() ;
	include("../config/koneksi.php") ;
	$email = $_POST['email'] ;
	$pasword = ($_POST['pass']) ;
	
	$sql_select = "SELECT * FROM `user` WHERE `email`='{$email}' AND `pass`='{$pasword}'" ;
	
	$query_select = mysqli_query($konek,$sql_select) ;
	
	$row = mysqli_fetch_assoc($query_select) ;
	
	$jumlah = count($row) ;
	
	if($jumlah <= 0){
		echo '
			<script>
				alert("email atau password salah");
				window.location = "formLoginUser.php"
			</script>
		';

	}else{
		$_SESSION["user"] = $row_user["user"] ;
	
		header("Location: user.php") ;
	}

	
?>