<?php
	session_start();
	if(!isset($_SESSION['idUser'])){
		header("Location: formLoginUser.php") ;
	}
	include("../config/koneksi.php") ;
	$query = "SELECT max(idUser) as maxKode FROM user";
	$hasil = mysqli_query($konek,$query);
	$data = mysqli_fetch_array($hasil);
	$kodeUser = $data['maxKode'];
	 
	// mengambil angka atau bilangan dalam kode anggota terbesar,
	// dengan cara mengambil substring mulai dari karakter ke-1 diambil 6 karakter
	// misal 'BRG001', akan diambil '001'
	// setelah substring bilangan diambil lantas dicasting menjadi integer
	$noUrut = (int) substr($kodeUser, 3, 3);
	 
	// bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
	$noUrut++;
	 
	// membentuk kode anggota baru
	// perintah sprintf("%03s", $noUrut); digunakan untuk memformat string sebanyak 3 karakter
	// misal sprintf("%03s", 12); maka akan dihasilkan '012'
	// atau misal sprintf("%03s", 1); maka akan dihasilkan string '001'
	$char = "U";
	$kodeUser = $char . sprintf("%03s", $noUrut);


	$idUser = $kodeUser;
	$user = $_POST['user'] ;
	$email = $_POST['email'] ;
	$pass = $_POST['pass'] ;
	
	$sql_insert = "INSERT INTO `user`(`idUser`,`user`, `email`, `pass`) VALUES ('{$idUser}','{$user}','{$email}','{$pass}')" ;
	
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
