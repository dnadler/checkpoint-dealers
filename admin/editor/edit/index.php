<?php
     session_name("Darin");
     session_start();
     include '../../../includes/confirm-login.php';
     require_once('../../../includes/setup-connection.php');

     $vip = $_GET['vip'];
     $_SESSION['vipField'] = $vip;
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php
          include '../../../includes/head-includes.php';
     ?>   

    <title>Purina CheckPoint Dealer Site || Update Producer Record</title>

    
    <style>
    input {
          padding:2px;
    }
    </style>
  </head>

  <body>
     <header>
          <?php 
               include '../../../includes/header-admin-logged-in.php';
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-7">
                    <h1>Update Record</h1>
                    <p>Use the form below to correct spelling, update address information, or provide statistical data for your customer. As a reminder, we will never use customer information for any reason other than sending CheckPoint and related materials.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-12">
                
                    
         <div id="producerList">
          <form  method="post" id="update" name="update" action="update-record.php">
          <?php
               $table = "producers";
               $retrieveProducer = @mysqli_query($con,"SELECT * FROM $table WHERE VIP = '". $vip ."'");
               //echo "<form  method='post' id='update' name='update' action='updateRecord.php'>  "
               echo "<table width='750' border='0' align='center' cellpadding='5' cellspacing='0'>";

               while ($row = mysqli_fetch_array($retrieveProducer))
               {
                    $dealerCodeField = $row['DealerCode'];
                    $_SESSION['dealerCodeField'] = $dealerCodeField;
                    echo "<tr>";
                    echo "<td class='TableText-BOD'>VIP:</td>
                    <td class='TableText-BOD'><input name='vipField' disabled='disabled' type='text' size='40' value='". $vip ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>First Name:</td>
                    <td class='TableText-BOD'><input name='firstNameField' type='text' size='40' value='". $row['FirstName'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>Last Name:</td>
                    <td class='TableText-BOD'><input name='lastNameField' type='text' size='40' value='". $row['LastName'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>Business Name:</td>
                    <td class='TableText-BOD'><input name='businessNameField' type='text' size='40' value='". $row['BusinessName'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>Address:</td>
                    <td class='TableText-BOD'><input name='addressField' type='text' size='40' value='". $row['Address'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>City:</td>
                    <td class='TableText-BOD'><input name='cityField' type='text' size='40' value='". $row['City'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>State:</td>
                    <td class='TableText-BOD'><input name='stateField' type='text' size='40' value='". $row['State'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>Zip Code:</td>
                    <td class='TableText-BOD'><input name='zipCodeField' type='text' size='40' value='". $row['ZipCode'] ."'/></td>";
                    echo "<tr>
                    <td class='TableText-BOD'>Email Address:</td>
                    <td class='TableText-BOD'><input name='emailField' placeholder='Email Address' type='email' size='40' value='". $row['Email'] ."'/></td>";


                    if ($row['OperationType1']=="1" || $row['OperationType1']=="BroodCow") {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 1 (Brood Cow):</td>
                         <td class='TableText-BOD'><input name='op1BroodCowField' type='checkbox' value='BroodCow' checked /></td>";
                    } else {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 1 (Brood Cow):</td>
                         <td class='TableText-BOD'><input name='op1BroodCowField' type='checkbox' value='BroodCow' /></td>";
                    }
                    if ($row['OperationType2']=="2" || $row['OperationType2']=="Stocker") {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 2 (Stocker):</td>
                         <td class='TableText-BOD'><input name='op2StockerField' type='checkbox' value='Stocker' checked /></td>";
                    } else {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 2 (Stocker):</td>
                         <td class='TableText-BOD'><input name='op2StockerField' type='checkbox' value='Stocker' /></td>";
                    }
                    if ($row['OperationType3']=="3" || $row['OperationType3']=="Finisher") {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 3 (Finisher):</td>
                         <td class='TableText-BOD'><input name='op3FinisherField' type='checkbox' value='Finisher' checked /></td>";
                    } else {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 3 (Finisher):</td>
                         <td class='TableText-BOD'><input name='op3FinisherField' type='checkbox' value='Finisher'/></td>";
                    }
                    if ($row['OperationType4']=="4" || $row['OperationType4']=="GeneticSupplier") {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 4 (Genetic Supplier):</td>
                         <td class='TableText-BOD'><input name='op4GeneticSupplierField' type='checkbox' value='GeneticSupplier' checked/></td>";
                    } else {
                         echo "<tr>
                         <td class='TableText-BOD'>Operation Type 4 (Genetic Supplier):</td>
                         <td class='TableText-BOD'><input name='op4GeneticSupplierField' type='checkbox' value='GeneticSupplier'/></td>";
                    }

                    echo "<tr>
                    <td class='TableText-BOD'>Dealer PAN Account Number:</td>
                    <td class='TableText-BOD'><input name='dealerCodeField' disabled='disabled' type='text' size='40' value='". $dealerCodeField ."'/></td>";
                    echo "</tr></table>";
                 
               }

               mysqli_close($con);
          ?>
              <input name="submitUpdate" type="submit" id="submitUpdateBtn" value="Update" />
              <a href="http://dealers.purinacheckpoint.com/admin/editor">Cancel</a>
            </form>
                   
              
          </div>
               </div>
        
      </div>

      <hr>

     <?php
          include '../../../includes/footer.php';
     ?>
    </div> <!-- /container -->


  </body>
</html>
