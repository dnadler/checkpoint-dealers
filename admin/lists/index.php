<?php
     session_name("Darin");
     session_start();
     include '../../includes/confirm-login.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php
          include '../../includes/head-includes.php';
     ?>   

    <title>Admin: Create Mail Lists</title>

   
  </head>

  <body>
     <header>
          <?php 
               include '../../includes/header-admin-logged-in.php';
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Create Mail Lists</h1>
                    <p></p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Dealer Mail List</h2>
          <p></p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/lists/dealer-list.php" role="button">Mail Lists &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Producer Mail List</h2>
          <p></p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/lists/producer-list.php" role="button">Producer List &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Sales Mail List</h2>
          <p></p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/lists/sales-list.php" role="button">Marketing Message &raquo;</a></p>
        </div>
      </div>
       <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <h2>Personalized Mail List</h2>
          <p></p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/lists/personalized-list.php" role="button">Personalized List &raquo;</a></p>
       </div>
        <div class="col-md-4"></div>
      </div>

      <hr>

      <?php
          include '../../includes/footer.php';
     ?>
    </div> <!-- /container -->


 
  </body>
</html>
