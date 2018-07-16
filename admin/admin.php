<!DOCTYPE html>
<html lang="en">
<head>
  <title>Baju Batik Online</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
      background-image:url("../images/h1.jpg"); 
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
  </style>
</head>
<body>

<div class="jumbotron">

  <div class="container text-center">
    <h1>FASHION BAJU BATIK ONLINE</h1>      
    <p>Cari Baju Batik Lebih Mudah</p>
  </div>
</div>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="index.html">BajuBatikOnline</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Produk</a></li>
        <li><a href="#"></a></li>
        <li><a href="#">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="logoutAdmin.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      </ul>
    </div>
  </div>

</nav>


<?php
  include("config/koneksi.php");
  $sql_select = "SELECT * FROM user " ;
  
  $query_select = mysqli_query($konek, $sql_select) ;
?>

<h1>Daftar User</h1>
<table border="1" class="table table-bordered">
  <tr>
    <th>ID</th></th><th>USER</th> <th>EMAIL</th><th>PASSWORD</th>
    <th> OPERASI </th>
  </tr>
  <?php
  while($row_user = mysqli_fetch_assoc($query_select) ) {
    ?>
    <tr>
      <td><?php echo $row_user['idUser'] ?></td> 
      <td><?php echo $row_user['user'] ?></td> 
      <td><?php echo $row_user['email'] ?></td> 
      <td><?php echo $row_user['pass'] ?></td> 
      <td>
       <a href="updateUser.php?user=<?php echo $row_user['idUser'] ?>"> Update </a> 
       <a href="deleteUser.php?user=<?php echo $row_user['idUser'] ?>"> Delete </a> 
      </td>
    </tr>
    <?php
  }
  ?>
</table>

<footer class="container-fluid text-center">
  <p>Copyright Baju Batik Online</p>  
 
</footer>

</body>
</html>
