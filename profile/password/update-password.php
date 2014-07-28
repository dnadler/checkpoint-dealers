<?php
     session_name("Darin");
     session_start();
     if($_SESSION['loggedIn'] != 1)// || (!isset($_SESSION['loggedIn']))
      {
        header("Location: http://dealers.PurinaCheckPoint.com/");
        exit;
      }
     
     $dealerCode = $_SESSION['dealerCodeSession'];

      require_once('../../includes/setup-connection.php');

      
      $newPass = mysqli_real_escape_string($con, $_POST['newPasswordField']);
      $encodedPassword = sha1($newPass);
      
     
      

$updateTime = date("d-m-Y_H-i",time());
$serverHost = $_SERVER['SERVER_NAME'];


$recordSaved="UPDATE dealers
              SET PW='$encodedPassword', UpdateTime='$updateTime', HostingServer='$serverHost'
                            WHERE DealerCode='$dealerCode'";



 
if (mysqli_query($con, $recordSaved)===true){
    $userMessage = "success"; 
    $successMsg = "<strong>Success!</strong> Password updated!";
    $_SESSION['userMessageSession']=$userMessage;
    $_SESSION['successMsgSession'] = $successMsg;
} else {
    $userMessage = "error";
    $errorMsg = "Error: %s\n" . mysqli_error($con) . "Email dnadler@nadlerassociates.com for assistance";
    $_SESSION['userMessageSession']=$userMessage;
    $_SESSION['errorMsgSession'] = $errorMsg;
    //printf("error: %s\n", mysqli_error($con));
} 
header("Location: http://dealers.PurinaCheckPoint.com/profile");
mysqli_close($con);
?>
