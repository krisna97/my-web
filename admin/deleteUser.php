<?php
	session_start();
	include("config/koneksi.php") ;
	
	$id_nilai = $_GET['user'] ;
	
	$sql_delete = "DELETE FROM `user`" ;
	
	$query_delete = mysqli_query($konek,$sql_delete) ; ;
	
	if($query_delete){
		echo '
			<script>
				alert("Hapus data berhasil");
				window.location = "admin.php"
			</script>
		';
	}else{
		echo "Error: " . $sql_delete . "<br>" . mysqli_error($konek);
	}
?>