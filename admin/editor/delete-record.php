<?php
     session_name("Darin");
     session_start();
     include '../../includes/confirm-login.php';
     require_once('../../includes/setup-connection.php');

     
     $vip = mysqli_real_escape_string($con, $_GET['vip']);
     $_SESSION['vipField'] = $vip;

          
     //$table = "producers";
     $sql =  "DELETE FROM producers WHERE VIP=$vip";
    
    $deleteProducer = mysqli_query($con,$sql);


     //if (mysqli_query($con, $deleteProducer)===true){
    if ($deleteProducer === true) {
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
     header("Location: http://dealers.PurinaCheckPoint.com/admin/editor");

     mysqli_close($con);
?>
