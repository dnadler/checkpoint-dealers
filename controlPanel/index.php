<?php
     session_name("Darin");
     session_start();
     include '../includes/confirm-login.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php
          include '../includes/head-includes.php';
     ?>   

    <title>Purina CheckPoint Dealer Site || Control Panel</title>

   
  </head>

  <body>
     <header>
          <?php 
               include '../includes/header-logged-in.php';
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
        <div class="col-md-4">
          <h2>My Profile</h2>
          <p>Keep your contact information up-to-date by reviewing and/or modifying your profile.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/profile/" role="button">Profile &raquo;</a></p>
        </div>
        <div class="col-md-4">
          <h2>Producer List</h2>
          <p>Manage the mailing list we have on file for your customers. You can edit a customer's address, add a new producer, or delete a customer record just by clicking below.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/producers/" role="button">Producer List &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Marketing Message</h2>
          <p>Submit your custom marketing message in this section. Create your own, or choose from one of our generic messages. You can also keep track of the messages you've used in the past.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/message/" role="button">Marketing Message &raquo;</a></p>
        </div>
      </div>
       <div class="row">
        <div class="col-md-4">
          <h2>Invoice FAQ</h2>
          <p>Check hear for answers to your CheckPoint invoice-related questions.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/invoicing/" role="button">Invoice FAQ &raquo;</a></p>
        </div>
        <!--
        <div class="col-md-4">
          <h2>Producer List</h2>
          <p>Manage the mailing list we have on file for your customers. You can edit a customer's address, add a new producer, or delete a customer record just by clicking below.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/producers/" role="button">Producer List &raquo;</a></p>
       </div>
        <div class="col-md-4">
          <h2>Marketing Message</h2>
          <p>Submit your custom marketing message in this section. Create your own, or choose from one of our generic messages. You can also keep track of the messages you've used in the past.</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/message/" role="button">Marketing Message &raquo;</a></p>
        </div>
      -->
      </div>

      <hr>

      <?php
          include '../includes/footer.php';
     ?>
    </div> <!-- /container -->


 
  </body>
</html>
