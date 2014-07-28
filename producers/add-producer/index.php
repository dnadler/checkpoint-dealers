<?php
     session_name("Darin");
     session_start();
     include '../../includes/confirm-login.php';
     require_once('../../includes/setup-connection.php');
     $table="producers";
     $lastProducer = @mysqli_query($con,"SELECT * FROM $table ORDER BY VIP DESC LIMIT 1");
     
     while ($row = mysqli_fetch_array($lastProducer))
     {
           $lastVIP = $row['VIP'];
           $nextVIP = $lastVIP + 1;
     }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
     <?php
          include '../../includes/head-includes.php';
     ?>   

    <title>Purina CheckPoint Dealer Site || Add Producer</title>

   
    <style>
    input {
          padding:2px;
    }
    </style>
  </head>

  <body>
     <header>
          <?php 
               include '../../includes/header-logged-in.php';
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
          <div class="col-md-7">
               <h1>Add Producer</h1>
               <p>To add a new customer to your mail list, please fill out the form below. Operation Types 1-4 are not required, however these statistics are very helpful as we decide what types of content to develop for upcoming issues of CheckPoint.</p>
               <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
          </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-12">
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
              <div id="producerList">
      <form  method="post" id="update" name="update" action="new-record.php">
          <?php
               echo "<table width='750' border='0' align='center' cellpadding='5' cellspacing='0'>";
                  
                 // ### Don't think I need this -->  $_SESSION['dealerCodeField'] = $dealerCode;
                $_SESSION['vip'] = $nextVIP;
                 echo "<tr>";
                 echo "<td class='TableText-BOD'>VIP:</td>
                 <td class='TableText-BOD'><input name='vipField' disabled='disabled' type='text' size='40' value='". $nextVIP ."'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>First Name:</td>
                 <td class='TableText-BOD'><input name='firstNameField' type='text' size='40' value='' placeholder='First Name'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Last Name:</td>
                 <td class='TableText-BOD'><input name='lastNameField' type='text' size='40' value='' placeholder='Last Name'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Business Name:</td>
                 <td class='TableText-BOD'><input name='businessNameField' type='text' size='40' value='' placeholder='Business Name'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Address:</td>
                 <td class='TableText-BOD'><input name='addressField' type='text' size='40' value='' placeholder='Address'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>City:</td>
                 <td class='TableText-BOD'><input name='cityField' type='text' size='40' value='' placeholder='City'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>State:</td>
                 <td class='TableText-BOD'><input name='stateField' type='text' size='40' value='' placeholder='State'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Zip Code:</td>
                 <td class='TableText-BOD'><input name='zipCodeField' type='text' size='40' value='' placeholder='Zip Code'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Email Address:</td>
                 <td class='TableText-BOD'><input name='emailField' placeholder='Email Address' type='email' size='40' value=''/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Operation Type 1 (Brood Cow):</td>
                 <td class='TableText-BOD'><input name='op1BroodCowField' type='checkbox' value='BroodCow'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Operation Type 2 (Stocker):</td>
                 <td class='TableText-BOD'><input name='op2StockerField' type='checkbox' value='Stocker'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Operation Type 3 (Finisher):</td>
                 <td class='TableText-BOD'><input name='op3FinisherField' type='checkbox' value='Finisher'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Operation Type 4 (Genetic Supplier):</td>
                 <td class='TableText-BOD'><input name='op4GeneticSupplierField' type='checkbox' value='GeneticSupplier'/></td>";
                 echo "<tr>
                 <td class='TableText-BOD'>Dealer PAN Account Number:</td>
                 <td class='TableText-BOD'><input name='dealerCodeField' disabled='disabled' type='text' size='40' value='". $dealerCode ."'/></td>";
                 echo "</tr></table>";
                 
          ?>
              <input name="submitNew" type="submit" id="submitNewBtn" value="Add Producer" />
               <a href="http://dealers.PurinaCheckPoint.com/producers">Cancel</a>
            </form>
                   
              
          </div>
               </div>
        
      </div>

      <hr>

     <?php
          include '../../includes/footer.php';
     ?>
    </div> <!-- /container -->


  </body>
</html>
