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
      background-image: url("../images/h1.jpg");     
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
        <li><a href="logoutUser.php"><span class="glyphicon glyphicon-user"></span> Logout</a></li>
      </ul>
    </div>
  </div>
</nav>
  <h2>TAMBAH PRODUK </h2>
        <div class="container">
        <form action="produkProses.php" method="post">
          <div class="form-group">
            <label for="usr">ID PRODUK:</label>
            <input type="text" class="form-control" name="idProduk">
          </div>
          <div class="form-group">
            <label for="usr">NAMA:</label>
            <input type="text" class="form-control" name="nama">
          </div>
          <div class="form-group">
            <label for="usr">GAMBAR:</label>
            <input type="file" class="form-control" name="gambar">
          </div>
          <div class="form-group">
            <label for="SEL1">UKURAN:</label>
                <select class="form-control" id="sel1" name="ukuran">
                  <option>S</option>
                  <option>M</option>
                  <option>L</option>
                  <option>XL</option>
                </select>
          </div>
          <div class="form-group">
            <label for="usr">KETERANGAN:</label>
            <input type="text" class="form-control" name="keterangan">
          </div>
          <div class="form-group">
            <label for="SEL1">KATEGORI:</label>
                <select class="form-control" id="sel1" name="kategori">
                  <option>k 1</option>
                  <option>k 2</option>
                  <option>k 3</option>
                  <option>k 4</option>
                </select>
          </div>
          <div class="form-group">
            <label for="usr">HARGA:</label>
            <input type="number" class="form-control" name="stok">
          </div>
          <div class="form-group">
            <label for="usr">STOK:</label>
            <input type="number" class="form-control" name="stok">
          </div>
          


          <button type="submit" class="btn btn-primary" name="upload">TAMBAH</button>
        </form>
        </div>

<footer class="container-fluid text-center">
  <p>Copyright Baju Batik Online</p>  
 
</footer>

</body>
</html>
