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

    <title>>Purina CheckPoint Dealer Site || Invoicing</title>

   
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
                    <h1>Invoicing</h1>
                    <p>If you have questions about your CheckPoint invoice, look no further. The sections below answer the questions we're asked most frequently. If you can't find the answer you're looking for, feel free to contact us. </p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      
       <div class="row">
        <div class="col-md-6">
          <h2>Can I Pay With Credit Card?</h2>
          <p>To fill out the credit card payment request form, please click below. A processing fee will apply. </p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/invoicing/cc-form.php" role="button">Pay with Credit Card &raquo;</a></p>
        </div>
        <div class="col-md-6">
          <h2>Can I Use Selling Support Funds?</h2>
          <p>All costs associated with CheckPoint are reimbursable through Selling Support Funds, up to balance of your account. Click below to download the Reimbursement Form. Remember to send a copy of your invoice!</p>
          <p><a class="btn btn-default" href="http://dealers.purinacheckpoint.com/invoicing/selling-support.pdf" role="button">Reimbursement Form &raquo;</a></p>
       </div>
        
      </div> <!-- /row -->

      <div class="row">
        <div class="col-md-6">
          <h2>What is the Payment Address?</h2>
          <p>Please send your payment to:</p>
          <p class="indent">Purina CheckPoint 2014 Postage<br>7113 W 135th St., #305<br>Overland Park, KS 66223</p>
        </div>
        <div class="col-md-6">
          <h2>To Whom Do I Write My Check?</h2>
          <p>When writing your check, please make it payable to: <br><span class="bold">PURINA ANIMAL NUTRITION POSTAGE</span></p>
        </div>
      </div> <!-- /row -->
      <div class="row">
        <div class="col-md-6">
          <h2>Can You Draft From My Account?</h2>
          <p>At this time, we're not able to draft CheckPoint expenses from your Purina account.</p>
          
        </div>
      <!--
        <div class="col-md-6">
          <h2>To Whom Do I Write My Check?</h2>
          <p>When writing your check, please make it payable to: <br><span class="bold">PURINA ANIMAL NUTRITION POSTAGE</span></p>
        </div>
      -->
      </div> <!-- /row -->
      <hr>

      <?php
          include '../includes/footer.php';
     ?>
    </div> <!-- /container -->


 
  </body>
</html>
