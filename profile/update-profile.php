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
      $firstName1 = mysqli_real_escape_string($con, $_POST['firstName1Field']);
      $lastName1 = mysqli_real_escape_string($con, $_POST['lastName1Field']);
      $firstName2 = mysqli_real_escape_string($con, $_POST['firstName2Field']);
      $lastName2 = mysqli_real_escape_string($con, $_POST['lastName2Field']);
      $address1 = mysqli_real_escape_string($con, $_POST['address1Field']);
      $address2 = mysqli_real_escape_string($con, $_POST['address2Field']);
      $city = mysqli_real_escape_string($con, $_POST['cityField']);
      $state = mysqli_real_escape_string($con, $_POST['stateField']);
      $zipCode = mysqli_real_escape_string($con, $_POST['zipCodeField']);
      $email1 = mysqli_real_escape_string($con, $_POST['email1Field']);
      $email2 = mysqli_real_escape_string($con, $_POST['email2Field']);
      $phone = mysqli_real_escape_string($con, $_POST['phoneField']);
      $fax = mysqli_real_escape_string($con, $_POST['faxField']);
      $website = mysqli_real_escape_string($con, $_POST['websiteField']);

     
      

$updateTime = date("d-m-Y_H-i",time());
$serverHost = $_SERVER['SERVER_NAME'];


$recordSaved="UPDATE dealers
              SET DealerName='$dealerName', Contact1FirstName='$firstName1', Contact1LastName='$lastName1', Contact2FirstName='$firstName2', Contact2LastName='$lastName2', Address1='$address1', Address2='$address2', City='$city', State='$state', Zip='$zipCode', Phone='$phone', Fax='$fax', Email1='$email1', Email2='$email2', Website='$website', UpdateTime='$updateTime', HostingServer='$serverHost'
                            WHERE DealerCode='$dealerCode'";



 
if (mysqli_query($con, $recordSaved)===true){
    $userMessage = "success"; 
    $successMsg = "<strong>Success!</strong> Profile updated!";
    $_SESSION['userMessageSession']=$userMessage;
    $_SESSION['successMsgSession'] = $successMsg;
} else {
    $userMessage = "error";
    $errorMsg = "Error: %s\n" . mysqli_error($con);
    $_SESSION['userMessageSession']=$userMessage;
    $_SESSION['errorMsgSession'] = $errorMsg;
    //printf("error: %s\n", mysqli_error($con));
} 
header("Location: http://dealers.PurinaCheckPoint.com/profile");
mysqli_close($con);
?>
