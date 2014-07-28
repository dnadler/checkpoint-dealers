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
     <title>Purina CheckPoint Dealer Site || Update Password</title>
     <style>
          #passMatchNotify {
               padding-top:80px;
          }
     </style>
     <script>
          $(document).ready(function () {
               $("#submitProfileUpdateBtn").css("display","none");
          });          
          function checkPasswordMatch() {
               var password = $("#newPass").val();
               var confirmPassword = $("#confirmPass").val();

               if (password != confirmPassword) {
                    $("#passMatchNotify").html("<div class='alert alert-danger'><strong>Passwords Do NOT Match!</strong></div>");
                    $("#submitProfileUpdateBtn").css("display","none");
               } else { 
                    $("#passMatchNotify").html("<div class='alert alert-success'><strong>Passwords Match!</strong> Click the Submit button to save your new password.</div>");
                    $("#submitProfileUpdateBtn").css("display","block");
               }
          }

          $(document).ready(function () {
               $("#confirmPass").keyup(checkPasswordMatch);
          });
     </script>

</head>

<body>

     <header>
          <?php 
               include '../../includes/header-logged-in.php';
               require_once('../../includes/setup-connection.php');
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Update Password</h1>
                    <p>Please update your password below by typing your NEW password in the first field. Then, confirm your password by typing it again in the second field. (Make sure your Caps Lock isn't on!)</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
     </div>

     <div class="container">
           <!-- Example row of columns -->
          <div class="row">
               <div class="col-md-1">
                 <!--
                     <h2>Heading</h2>
                     <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                     <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                 -->
               </div>
               <div class="col-md-10">
                     <?php 
                         if ($_SESSION['userMessageSession']=="success"){
                             echo "<div class='alert alert-success'>";
                             echo $_SESSION['successMsgSession'];
                             $_SESSION['successMsgSession']="";
                             $_SESSION['userMessageSession']="";
                             echo "</div>";
                         } else if ($_SESSION['userMessageSession']=="error") {
                             echo "<div class='alert alert-danger'>";
                             echo $_SESSION['errorMsgSession'];
                             $_SESSION['successMsgSession']="";
                             $_SESSION['userMessageSession']="";
                             echo "</div>";
                         } else {
                             //do nothing
                         }

                     ?>
                   <div id="dealerInfo">
                         <h2>Update Password</h2>
                         <form  method="post" id="password" name="password" action="update-password.php">
                              <table border="0" align="left" cellpadding="5" cellspacing="0">
                                   <tr>
                                        <td class="TableText-BOD">New Password:</td>
                                        <td class="TableText-BOD"><input name="newPasswordField" id="newPass" type="password" size="40" placeholder="Password"/></td>
                                   </tr>
                                   <tr>
                                        <td class="TableText-BOD">Retype Password:</td>
                                        <td class="TableText-BOD"><input name="confirmPasswordField" id="confirmPass" type="password" size="40" placeholder="Confirm Password"/></td>
                                   </tr>
                              </table>
                              <div id="passMatchNotify"></div>
                              <input name="submitProfileUpdate" type="submit" id="submitProfileUpdateBtn" value="Update" />
                              <a href="http://dealers.PurinaCheckPoint.com/controlPanel">Cancel</a>
                         </form>
                    </div>
               </div>
               <div class="col-md-1">
                      <!--
                          <h2>Heading</h2>
                          <p>Donec sed odio dui. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Vestibulum id ligula porta felis euismod semper. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                          <p><a class="btn btn-default" href="#" role="button">View details &raquo;</a></p>
                      -->
               </div>
          </div>

          <hr>
          <?php
               include '../../includes/footer.php';
          ?>
          
     </div> <!-- /container -->


   
</body>
</html>
