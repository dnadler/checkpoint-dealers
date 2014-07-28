<?php
     session_name("Darin");
     session_start();
     include '../includes/confirm-login.php';
     require_once('../includes/setup-connection.php');
    
    
     $vip = mysqli_real_escape_string($con, $_GET['vip']);
     $_SESSION['vipField'] = $vip;


     $deleteProducer = mysqli_query($con,"DELETE FROM producers WHERE VIP=$vip");


     if ($deleteProducer === true){
         $userMessage = "delete"; 
         $deleteMsg = "Customer Record " . $vip . " Deleted";
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['deleteMsgSession'] = $deleteMsg;
     } else {
         $userMessage = "error";
         $errorMsg = "Error: %s\n" . mysqli_error($con);
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['errorMsgSession'] = $errorMsg;
         //printf("error: %s\n", mysqli_error($con));
     } 
     header("Location: http://dealers.PurinaCheckPoint.com/producers");

    mysqli_close($con);
     //$DBH = null;
?>
