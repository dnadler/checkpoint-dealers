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
          include '../includes/head-includes.php';
     ?>   

     <title>Purina CheckPoint Dealer Site || Administrator Access</title>

</head>

<body>
     <header>
          <?php 
               //include $root . '/includes/header-index.php';
               include '../includes/header-admin.php';
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
                    <h2>Renew CheckPoint</h2>
                    <p>Dealers wishing to renew their participation in the CheckPoint program need to login in at <a target="_blank" href="http://www.PurinaCheckPoint.com">www.PurinaCheckPoint.com</a>. If you are missing your login credentials, use the "Forgot Login" link to reset your password. Once logged in, click the appropriate link on the home page to start the renewal process.</p>
                    <p><a class="btn btn-default" target="_blank" href="http://www.PurinaCheckPoint.com" role="button">Renew &raquo;</a></p>
               </div>
               <div class="col-md-4">
                    <h2>Register for CheckPoint</h2>
                    <p>Dealers not enrolled in the CheckPoint (or Cattleman's Advisor) program in 2013 should register as a new dealer.</p>
                    <p><a class="btn btn-default" target="_blank" href="http://www.purinacheckpoint.com/index.php?option=com_content&view=article&id=145" role="button">Sign up &raquo;</a></p>
               </div>
               <div class="col-md-4">
                    <h2>Cattleman's Advisor</h2>
                    <p>Cooperatives who currently subscribe to Cattleman's Advisor and wish to participate in the CheckPoint program may click below to get started. An expanded version of CheckPoint will replace Cattleman's Advisor. CheckPoint brings more of the valuable information you've grown to expect, along with some information geared just for you. </p>
                    <p><a class="btn btn-default" target="_blank" href="http://www.purinacheckpoint.com/index.php?option=com_content&view=article&id=116" role="button">Switch to CheckPoint &raquo;</a></p>
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
