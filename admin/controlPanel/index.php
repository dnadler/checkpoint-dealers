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

    <title>Purina CheckPoint Dealer Site || Administrator Access || Control Panel</title>

   
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
                    <h1>Welcome, Administrator!</h1>
                    <p>Choose from the sections below to maintain producer records, download mail lists or check the server status.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4">
          <h2>Create Mailing Lists</h2>
          <p></p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/lists" role="button">Mail Lists &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Database Maintenance</h2>
          <p>Select this option to correct addresses or delete producers. The VIP number is located on the mailing label.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/editor/" role="button">Database Maintenance &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Server Information</h2>
          <p>This website uses PHP and MySQL. Click below to access information about the server installation.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/admin/server-info/" role="button">Server Information &raquo;</a></p>
        </div>
      </div>

      <hr>

      <?php
          include '../../includes/footer.php';
     ?>
    </div> <!-- /container -->


 
  </body>
</html>
