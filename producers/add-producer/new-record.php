<?php
     session_name("Darin");
     session_start();
     include '../../includes/confirm-login.php';
     require_once('../../includes/setup-connection.php');

     $vip = $_SESSION['vip'];
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

     $recordSaved="INSERT INTO producers (VIP, FirstName, LastName, BusinessName, Address, City, State, ZipCode, Email, OperationType1, OperationType2, OperationType3, OperationType4, DealerCode, UpdateTime, HostingServer) VALUES ('" . $vip . "', '" . $firstName . "', '" . $lastName . "', '" . $businessName . "', '" . $address . "', '" . $city . "', '" . $state . "', '" . $zipCode . "', '" . $email . "', '" . $op1BroodCow . "', '" . $op2Stocker . "', '" . $op3Finisher . "', '" . $op4GeneticSupplier . "', '" . $dealerCode . "', '" . $updateTime . "' , '" . $originatingIP . "')";
      
     if (mysqli_query($con, $recordSaved)===true){
         $userMessage = "success"; 
         $successMsg = "<strong>Success!</strong> Producer added!";
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['successMsgSession'] = $successMsg;
     } else {
         $userMessage = "error";
         $errorMsg = "Error: %s\n" . mysqli_error($con);
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['errorMsgSession'] = $errorMsg;
         //printf("error: %s\n", mysqli_error($con));
     } 
     header("Location: http://dealers.PurinaCheckPoint.com/producers");

     mysqli_close($con);
?>
