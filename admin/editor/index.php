<?php
     session_name("Darin");
     session_start();
     include '../../includes/confirm-login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
          //$root = realpath($_SERVER["DOCUMENT_ROOT"]);
          //include $root . '/includes/head-includes.php';
          include '../../includes/head-includes.php';
          require_once('../../includes/setup-connection.php');
     ?>   

     <title>Purina CheckPoint Dealer Site || Administrator Access || Edit Producer List</title>
     
     <!--<link href="../../css/editor-data-display.css" rel="stylesheet" />-->
     <script src = "support-files/admin-edit.js"></script>
     <script>
          function confirmDelete(vip){
               var x=window.confirm("Confirm DELETE producer record:")
               if (x) {
                    location.href = "delete-record.php?vip="+vip;
               } else {

               }
          }
     </script>
</head>

<body>
     <header>
          <?php 
               //include $root . '/includes/header-index.php';
               include '../../includes/header-admin-logged-in.php';
          ?>
     </header>


     <!-- Main jumbotron for a primary marketing message or call to action -->
     <div class="jumbotron">
          <div class="container">
               <div class="col-md-7">
                    <h1>Edit Producer List</h1>
                    <p>Type in the producer's VIP number below to access the database record. Click EDIT to modify the record, or click DELETE to remove the producer from the database.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
          </div>
     </div>

     <div class="container">
         
          <div class="row">
               <?php 
                    include '../../includes/success-msg.php';
/* ##############################               
               if ((isset($_SESSION['userMessageSession'])) && (!empty($_SESSION['userMessageSession']))) 
               {
                    if ($_SESSION['userMessageSession'] == "success"){
                        echo "<div class='alert alert-success'>";
                        echo $_SESSION['successMsgSession'];
                        $_SESSION['successMsgSession'] = "";
                        $_SESSION['userMessageSession'] = "";
                        echo "</div>";
                    } else if ($_SESSION['userMessageSession'] == "error") {
                        echo "<div class='alert alert-danger'>";
                        echo $_SESSION['errorMsgSession'];
                        $_SESSION['successMsgSession'] = "";
                        $_SESSION['userMessageSession'] = "";
                        echo "</div>";
                    } else if ($_SESSION['userMessageSession'] == "delete") {
                         echo "<div class='alert alert-info'>";
                         echo $_SESSION['deleteMsgSession'];
                         $_SESSION['deleteMsgSession'] = "";
                         $_SESSION['userMessageSession'] = "";
                         echo "</div>";
                    } else {
                        //do nothing
                    }
               }
################################ */                   
               ?>
          </div>
          <div class="row">


               <form action="" method="post">
                    <input name="vip" id="vip" onChange="evalVIP(this.value)">
                   <!-- <input name="submitVIP" type="submit" id="submitVIPbtn" value="Submit &raquo;">-->
                    <!--<p><a class="btn btn-primary btn-sm" role="button">Submit &raquo;</a></p>-->
               </form>
               <div id="dataGrid"></div>


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
