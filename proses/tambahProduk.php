<?php
	include("../config/koneksi.php");
	 $UploadDir = 'image/';

  if(isset($_POST['upload'])){

    $datenow = Date('Y-m-d h:i:sa');
    $filename = md5(($_FILES['foto']['name']).$datenow);
    $tmpName = $_FILES['foto']['tmp_name'];
    $fileSize = $_FILES['foto']['size'];
    $fileType = $_FILES['foto']['type'];
    $filePath = $UploadDir . $filename;
    $result = move_uploaded_file($tmpName, $filePath);
    $nama = $_POST['nama'];
    $keterangan = $_POST['keterangan'];
    $harga = $_POST['harga'];
    $kategori = $_POST['kategori'];
    $ukuran = $_POST['ukuran'];
    $stock = $_POST['stock'];

    $query = mysqli_query($konek, "INSERT INTO tabel_produk (nama, gambar, ukuran, keterangan, kategori, harga, stock, path, size) VALUES ('$nama', '$filename', '$ukuran', '$keterangan', '$kategori', '$harga', '$stock', '$filePath', '$fileSize')");

      if (!get_magic_quotes_gpc()) {
      $filename = addslashes($filename);
      $filePath = addslashes($filePath);
    }

    if($query){
      echo '
           <script>
             alert("Produk ditambahkan");
             window.location = "user.php"
           </script>
         ';
    }else{
      echo '
     <script>
         alert("Format Gambar Tidak Di Dukung (Format Harus .JPG, .JPEG, .PNG, dan .GIF)");
         window.location="user.php"
       </script>
     ';
    }
 
  }



?>