<?php
$host = "localhost" ;
$user = "root" ;
$pass = "" ;
$db	  = "batik" ;

$konek = mysqli_connect($host,$user,$pass,$db) ;

if(!$konek){
	 die("Connection failed: " . mysqli_connect_error());
}
/*
else{
	echo "Koneksi sukses <hr/>" ;
}
*/

?>