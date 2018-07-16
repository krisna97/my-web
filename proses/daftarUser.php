<?php
  session_start();
  include("index.php") ;

?>

        <div class="container">
        <form action="daftar.php" method="post">
          <div class="form-group">
            <label for="email">User Name:</label>
            <input type="text" class="form-control" name="user">
          </div>
          <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" name="pass">
          </div>

          <button type="submit" class="btn btn-primary" name="submit">Daftar</button>
        </form>
        </div>
<?php

  include("../component/footer.php");
?>