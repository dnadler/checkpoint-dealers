<?php
     session_name("Darin");
     session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
          //$root = realpath($_SERVER["DOCUMENT_ROOT"]);
          //include $root . '/includes/head-includes.php';
          include 'includes/head-includes.php';
     ?>   

     <title>Purina CheckPoint Dealer Site || Marketing Message</title>

</head>

<body>
     <header>
          <?php 
               //include $root . '/includes/header-index.php';
               include 'includes/header-index.php';
          ?>
     </header>


     <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Welcome, Dealers!</h1>
                    <p>CheckPoint&reg; is the cattle nutrition and health information service provided by Purina Animal Nutrition, on your behalf, for your beef cattle customers and prospects. To manage your CheckPoint account, sign in above.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
     </div>

     <div class="container">
          <!-- Example row of columns -->
          <div class="row">
               <?php 
                    if ($_SESSION["loginMsg"] == "Incorrect") {
                         $_SESSION["loginMsg"] = "";
                         echo "
                         <div class=\"alert alert-danger\">
                              <strong>Incorrect User Credentials.</strong> Try again or request new credentials by sending an email to <a href=\"mailto:dnadler@purinacheckpoint.com\">dnadler@purinacheckpoint.com</a>.
                         </div>     ";
                    }
               ?>
               

               <div class="col-md-4">
                    <h2>Sign up for CheckPoint</h2>
                    <p>Dealers and Cooperatives can sign up here for the CheckPoint program. If you need to review a customer list we currently have on file, please send an email with your Purina account number and the name of your dealership to Darin Nadler, Production Manager (<a href="mailto:dnadler@purinacheckpoint.com">dnadler@PurinaCheckPoint.com</a>, 913-324-5961).</p>
                    <p><a class="btn btn-default"  href="renew/signup.php" role="button">Sign up! &raquo;</a></p>
               </div>
               <div class="col-md-4">
                    <h2>Customer List Template</h2>
                    <p>Download the Customer List Template (Excel format) to enter your customer list. Once you're enrolled and we've sent you user credentials, you can edit your list on this website.</p>
                    <p><a class="btn btn-default" target="_blank" href="renew/customer-list-template.xls" role="button">Download Template &raquo;</a></p>
               </div>
               <div class="col-md-4">
                    <h2>Submit Customer List</h2>
                    <p>Are you ready to submit your customer list? Click below to send it in! (Note: If you have received credentials for this website, please login above and modify your list online.)</p>
                    <p><a class="btn btn-default" href="renew/submit.php" role="button">Submit Customer List &raquo;</a></p>
               </div>
          </div>

          <hr>

          <?php 
               //include $root . '/includes/footer.php';
               include 'includes/footer.php';
               //echo "<pre>";
               //var_dump($_SESSION);
               //echo "</pre>";
               //exit;
          ?>
     </div> <!-- /container -->
</body>
</html>
