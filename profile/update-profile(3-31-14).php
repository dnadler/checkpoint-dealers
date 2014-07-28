<?php
     session_name("Darin");
     session_start();
     if($_SESSION['loggedIn'] != 1)// || (!isset($_SESSION['loggedIn']))
      {
        header("Location: http://dealers.PurinaCheckPoint.com/");
        exit;
      }
     
     $dealerCode = $_SESSION['dealerCodeSession'];

      require_once('../includes/setup-connection.php');

      
      $dealerName = mysqli_real_escape_string($con, $_POST['dealerNameField']);
      $firstName = mysqli_real_escape_string($con, $_POST['firstNameField']);
      $lastName = mysqli_real_escape_string($con, $_POST['lastNameField']);
      $address1 = mysqli_real_escape_string($con, $_POST['address1Field']);
      $address2 = mysqli_real_escape_string($con, $_POST['address2Field']);
      $city = mysqli_real_escape_string($con, $_POST['cityField']);
      $state = mysqli_real_escape_string($con, $_POST['stateField']);
      $zipCode = mysqli_real_escape_string($con, $_POST['zipCodeField']);
      $email = mysqli_real_escape_string($con, $_POST['emailField']);
      $phone = mysqli_real_escape_string($con, $_POST['phoneField']);
      $fax = mysqli_real_escape_string($con, $_POST['faxField']);
      $website = mysqli_real_escape_string($con, $_POST['websiteField']);
      $parentNumber = mysqli_real_escape_string($con, $_POST['parentNumberField']);
      $parentName = mysqli_real_escape_string($con, $_POST['parentNameField']);
     
      

$updateTime = date("d-m-Y_H-i",time());
$serverHost = $_SERVER['SERVER_NAME'];


$recordSaved="UPDATE dealers
              SET DealerName='$dealerName', ContactFirst='$firstName', ContactLast='$lastName', Address1='$address1', Address2='$address2', City='$city', State='$state', Zip='$zipCode', Phone='$phone', Fax='$fax', EmailAddress='$email', Website='$website', ParentNumber='$parentNumber', ParentName='$parentName', UpdateTime='$updateTime', HostingServer='$serverHost'
                            WHERE DealerCode='$dealerCode'";



 
if (mysqli_query($con, $recordSaved)===true){
    $userMessage = "success"; 
    $successMsg = "<strong>Success!</strong> Profile updated!";
    $_SESSION['userMessageSession']=$userMessage;
    $_SESSION['successMsgSession'] = $successMsg;
} else {
    $userMessage = "Error";
    $errorMsg = "Error: %s\n" . mysqli_error($con);
    $_SESSION['userMessageSession']=$userMessage;
    $_SESSION['errorMsgSession'] = $errorMsg;
    //printf("error: %s\n", mysqli_error($con));
} 
header("Location: http://dealers.PurinaCheckPoint.com/profile");
mysqli_close($con);
?>
