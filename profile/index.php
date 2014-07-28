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
     <title>Purina CheckPoint Dealer Site || Profile</title>
</head>

  <body>
     <header>
          <?php 
               include '../includes/header-logged-in.php';
               require_once('../includes/setup-connection.php');
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-7">
                    <h1>Profile</h1>
                    <p>Use the form below to be sure we have your most accurate contact information. Please check your email address, as that is our primary method of communication. Also, please verify that we have your street address as well as your mailing address.</p>
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
              <a href="password" role="button" class="btn btn-primary">Change Password >></a>
              <form  method="post" id="update" name="update" action="update-profile.php">
                  <?php
                       $table = "dealers";
                       $retrieveDealer = @mysqli_query($con,"SELECT * FROM $table WHERE DealerCode = '". $dealerCode ."'");
                       //echo "<form  method='post' id='update' name='update' action='updateRecord.php'>  "
                       echo "<table  border='0' align='center' cellpadding='5' cellspacing='0'>";

                       while ($row = mysqli_fetch_array($retrieveDealer))
                       {
                         echo "<tr>";
                         echo "<td class='TableText-BOD'>Dealer Code (PAN Customer Number):</td>
                         <td class='TableText-BOD'><input name='dealerCodeField' disabled='disabled' type='text' size='40' value='". $dealerCode ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Dealer Name:</td>
                         <td class='TableText-BOD'><input name='dealerNameField' type='text' size='40' value='". $row['DealerName'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Contact 1 First Name:</td>
                         <td class='TableText-BOD'><input name='firstName1Field' type='text' size='40' value='". $row['Contact1FirstName'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Contact 1 Last Name:</td>
                         <td class='TableText-BOD'><input name='lastName1Field' type='text' size='40' value='". $row['Contact1LastName'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Contact 2 First Name:</td>
                         <td class='TableText-BOD'><input name='firstName2Field' type='text' size='40' value='". $row['Contact2FirstName'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Contact 2 Last Name:</td>
                         <td class='TableText-BOD'><input name='lastName2Field' type='text' size='40' value='". $row['Contact2LastName'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Address 1 (Street Address):</td>
                         <td class='TableText-BOD'><input name='address1Field' type='text' size='40' value='". $row['Address1'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Address 2 (Mailing Address):</td>
                         <td class='TableText-BOD'><input name='address2Field' type='text' size='40' value='". $row['Address2'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>City:</td>
                         <td class='TableText-BOD'><input name='cityField' type='text' size='40' value='". $row['City'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>State:</td>
                         <td class='TableText-BOD'><input name='stateField' type='text' size='40' value='". $row['State'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Zip Code:</td>
                         <td class='TableText-BOD'><input name='zipCodeField' type='text' size='40' value='". $row['Zip'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Phone Number:</td>
                         <td class='TableText-BOD'><input name='phoneField' type='text' size='40' value='". $row['Phone'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Fax Number:</td>
                         <td class='TableText-BOD'><input name='faxField' type='text' size='40' value='". $row['Fax'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Email Address (Contact 1):</td>
                         <td class='TableText-BOD'><input name='email1Field' placeholder='Email Address' type='email' size='40' value='". $row['Email1'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Email Address (Contact 2):</td>
                         <td class='TableText-BOD'><input name='email2Field' placeholder='Email Address' type='email' size='40' value='". $row['Email2'] ."'/></td>";
                         echo "</tr>";

                         echo "<tr>
                         <td class='TableText-BOD'>Website:</td>
                         <td class='TableText-BOD'><input name='websiteField'  type='text' size='40' value='". $row['Website'] ."'/></td>";
                         echo "</tr></table>";
                       }
                       mysqli_close($con);
                    ?>
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
        include '../includes/footer.php';
      ?>
     
    </div> <!-- /container -->


   
  </body>
</html>
