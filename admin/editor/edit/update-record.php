<?php
     session_name("Darin");
     session_start();
     include '../../../includes/confirm-login.php';
     require_once('../../../includes/setup-connection.php');

     $vip = $_SESSION['vipField'];
     $firstName = mysqli_real_escape_string($con, $_POST['firstNameField']);
     $lastName = mysqli_real_escape_string($con, $_POST['lastNameField']);
     $businessName = mysqli_real_escape_string($con, $_POST['businessNameField']);
     $address = mysqli_real_escape_string($con, $_POST['addressField']);
     $city = mysqli_real_escape_string($con, $_POST['cityField']);
     $state = mysqli_real_escape_string($con, $_POST['stateField']);
     $zipCode = mysqli_real_escape_string($con, $_POST['zipCodeField']);
     $email = mysqli_real_escape_string($con, $_POST['emailField']);
     $op1BroodCow = mysqli_real_escape_string($con, $_POST['op1BroodCowField']);
     $op2Stocker = mysqli_real_escape_string($con, $_POST['op2StockerField']);
     $op3Finisher = mysqli_real_escape_string($con, $_POST['op3FinisherField']);
     $op4GeneticSupplier = mysqli_real_escape_string($con, $_POST['op4GeneticSupplierField']);

     $updateTime = date("d-m-Y_H-i",time());
     
     if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
          $originatingIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
     } else {
          $originatingIP = $_SERVER['REMOTE_ADDR'];
     }
     
     $recordSaved="UPDATE producers
              SET FirstName='$firstName', LastName='$lastName', BusinessName='$businessName', Address='$address', City='$city', State='$state', ZipCode='$zipCode', Email='$email', OperationType1='$op1BroodCow', OperationType2='$op2Stocker', OperationType3='$op3Finisher', OperationType4='$op4GeneticSupplier',UpdateTime='$updateTime', HostingServer='$originatingIP'
                            WHERE VIP='$vip'";

     if (mysqli_query($con, $recordSaved)===true){
         $userMessage = "success"; 
         $successMsg = "<strong>Success!</strong> Customer Record Updated!";
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['successMsgSession'] = $successMsg;
     } else {
         $userMessage = "Error";
         $errorMsg = "Error: %s\n" . mysqli_error($con);
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['errorMsgSession'] = $errorMsg;
         //printf("error: %s\n", mysqli_error($con));
     } 
     header("Location: ../../editor");

     mysqli_close($con);
?>
