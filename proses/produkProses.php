<?php
	include("../config/koneksi.php");
?>
<?php

	$idProduk = $_POST['idProduk'];
	$nama = $_POST['nama'];
	$gambar = $_FILES['gambar']['name'];
	$tmp = $_FILES['gambar']['tmp_name'];
	$ukuran = $_POST['ukuran'];
	$keterangan = $_POST['keterangan'];
	$kategori = $_POST['kategori'];
	$harga = $_POST['harga'];
	$stok = $_POST['stok'];

	// Rename nama fotonya dengan menambahkan tanggal dan jam upload
	$gambarbaru = date('dmYHis').$gambar;

	$path = "image/".$gambarbaru;

	// Proses upload
	if(move_uploaded_file($tmp, $path)){ // Cek apakah gambar berhasil diupload atau tidak  // Proses simpan ke Database  
		$query_upload = "INSERT INTO tabel_produk VALUES('".$idProduk."', '".$nama."', '".$ukuran."', '".$keterangan."', '".$kategori."', '".$harga."', '".$stok."', '".$gambarbaru."')";  
		$sql_upload = mysqli_query($konek, $query_upload); 
		// Eksekusi/ Jalankan query dari variabel $query 
	if($query_upload){
		echo '
		<script>
			alert("daftar sukses");
			window.location = "user.php"
		</script>
		';
	
	}else{
		echo "Error: " . $sql_upload . "<br>" . mysqli_error($konek);
	}
	} 
?>