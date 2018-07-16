<?php
	session_start();
	include("header.php");
?>
<?php

	include("config/koneksi.php") ;
	$idUser = $_GET['user'] ;
	
	$sql_select_user = "SELECT  * FROM `user` WHERE `idUser`='{$idUser}'" ;
	
	$query_select_user = mysqli_query($konek,$sql_select_user) ;
	
	$row_user = mysqli_fetch_assoc($query_select_user) ;
?>
<h2>Update Data User </h2>
		<div class="container">
        <form action="updateUserProses.php" method="post">
          <div class="form-group">
            <label for="email">User Name:</label>
            <input type="text" class="form-control" name="user" value="<?php echo $row_user['user'] ?>" readonly="readonly">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="<?php echo $row_user['email'] ?>">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="text" class="form-control" name="pass" value="<?php echo $row_user['pass'] ?>">
          </div>

          <button type="submit" class="btn btn-primary">SIMPAN</button>
        </form>
        </div>
<?php
	include("../component/footer.php")
?>