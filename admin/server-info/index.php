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

    <title>Purina CheckPoint Dealer Site || Administrator Access || Server Information</title>

   
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
                    <h1>Welcome, Dealers!</h1>
                    <p>Each issue of CheckPoint brings your customers nutrition and management information to help keep their cows in condition, their calves growing, and their bottom line healthy. Choose from either the menu above or the options below to manage your account.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
      	<?php
			phpinfo();
		?>
      </div> <!-- /row -->

      <hr>

      <?php
          include '../../includes/footer.php';
     ?>
    </div> <!-- /container -->


 
  </body>
</html>

