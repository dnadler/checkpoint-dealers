<?php
     session_name("Darin");
     session_start();
    if (isset($_SESSION['userMessageSession'])) {
      $messageBoxStatus = $_SESSION['userMessageSession']; 
    }
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
          include '../../includes/head-includes.php';
     ?>   

     <title>Purina CheckPoint Dealer Site || Reset Password</title>

</head>

<body>
     <header>
          <?php 
               //include $root . '/includes/header-index.php';
               include '../../includes/header-index.php';
          ?>
     </header>


     <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Reset Password</h1>
                    <p>Enter the email address and zip code associated with this location/account in the fields below. A new password will be emailed to the address you enter.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
     </div>
     <div class="container">
          <!-- Example row of columns -->
          <div class="row">
               <?php 
                     if ($messageBoxStatus == "success"){
                        echo "<div class='alert alert-success'>";
                        echo $_SESSION['successMsgSession'];
                        $_SESSION['successMsgSession']="reset";
                        $_SESSION['userMessageSession']="reset";
                        echo "</div>";
                    } else if ($messageBoxStatus == "error") {
                        echo "<div class='alert alert-danger'>";
                        echo $_SESSION['errorMsgSession'];
                        $_SESSION['successMsgSession']="reset";
                        $_SESSION['userMessageSession']="reset";
                        echo "</div>";
                    } else if ($messageBoxStatus == "reset") {
                        // do nothing
                    } else {
                        //do nothing
                    }

                   
               ?>
               

               
               <div class="col-md-12">
                    <h2>Enter Email Address and Zip Code</h2>
                    <p>If you don't receive a password, be sure to check any spam/junk folders, and then <a href="mailto:dnadler@purinacheckpoint.com">contact us</a>.</p>
                    <!--<p><a class="btn btn-default" target="_blank" href="http://www.purinacheckpoint.com/index.php?option=com_content&view=article&id=145" role="button">Sign up &raquo;</a></p>-->
                    <form  method="post" id="resetPassword" name="resetPW" action="email.php">
                  		<table border="0" align="left" cellpadding="5" cellspacing="0">
                  			<tr>
                  				<td class="TableText-BOD">Email Address associated with this account:</td>
                  				<td class="TableText-BOD">
                  					<input name="emailField" type="email" size="50" />
                  				</td>
                  			</tr>
                        <tr>
                          <td class="TableText-BOD">This location's zip code:</td>
                          <td class="TableText-BOD">
                            <input name="zipCodeField" type="text" size="25" />
                          </td>
                        </tr>
                  			<tr>
                  				<td class="TableText-BOD" colspan="2">
                  					<input name="submitResetPassword" type="submit" class="btn btn-primary" value="Submit" />
                  				</td>
                  			</tr>
                  		</table>
                 	</form>
               </div>
               
          </div>

          <hr>

          <?php 
               //include $root . '/includes/footer.php';
               include '../../includes/footer.php';
               //echo "<pre>";
               //var_dump($_SESSION);
               //echo "</pre>";
               //exit;
          ?>
     </div> <!-- /container -->
</body>
</html>


