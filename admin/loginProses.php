<?php
	session_start() ;
	include("config/koneksi.php") ;
	$email = $_POST['email'] ;
	$pasword = ($_POST['pass']) ;
	
	$sql_select = "SELECT * FROM `admin` WHERE `email`='{$email}' AND `pass`='{$pasword}'" ;
	
	$query_select = mysqli_query($konek,$sql_select) ;
	
	$row = mysqli_fetch_assoc($query_select) ;
	
	$jumlah = count($row) ;
	
	if($jumlah <= 0){
		echo "User dan Password Salah";
	}else{
		$_SESSION["idAdmin"] = $row_admin["idAdmin"] ;
		$_SESSION["nama"] = $row_admin["nama"] ;
		header("Location: admin.php") ;
	}

	
?>