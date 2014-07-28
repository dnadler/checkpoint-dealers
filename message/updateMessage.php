<?php
     session_name("Darin");
     session_start();
     include '../includes/confirm-login.php';
     require_once('../includes/setup-connection.php');

     $messageType = mysqli_real_escape_string($con, $_POST['messageType']);
     $customMessage = mysqli_real_escape_string($con, $_POST['customMessage']);
     $genericMessage = mysqli_real_escape_string($con, $_POST['genericMessage']);
     $checkpointIssue = mysqli_real_escape_string($con, $_POST['checkpointIssue']);
     
     if(isset($_SERVER['HTTP_X_FORWARDED_FOR']) && $_SERVER['HTTP_X_FORWARDED_FOR'] != '') {
          $originatingIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
     } else {
          $originatingIP = $_SERVER['REMOTE_ADDR'];
     }
     
     if($customMessage != null && $customMessage != '') {
          $marketingMessage = $customMessage;
     } else {
          switch($genericMessage){
               case "gm1":
                    $marketingMessage="All Purina Feed and Minerals are Buy 12 Get 1 Free!";
                    break;
               case "gm2":
                    $marketingMessage="Bring this issue of CheckPoint in for 10% off your purchase!";
                    break;
               case "gm3":
                    $marketingMessage="Buy 12 Purina Mineral, Get 1 Free! Come see us today!";
                    break;
               case "gm4":
                    $marketingMessage="Call about our Mineral Truckload Sale!!";
                    break;
               case "gm5":
                    $marketingMessage="Contact us for your Wind & Rain, Accuration, Impact and Sup-R-Block products!";
                    break;
               case "gm6":
                    $marketingMessage="Contact Us to Learn More About all the New Purina Cattle Products";
                    break;
               case "gm7":
                    $marketingMessage="Good nutrition and management will help keep your livestock healthy, by the bag or bulk.";
                    break;
               case "gm8":
                    $marketingMessage="Let our feed team help your herd achieve optimum performance.";
                    break;
               case "gm9":
                    $marketingMessage="Stop in today to book your mineral and protein needs. Bring in CheckPoint for more savings!";
                    break;
               case "gm10":
                    $marketingMessage="We're proud to provide this issue of CheckPoint with our compliments.";
                    break;
               case "gm11":
                    $marketingMessage=">Wind & Rain Mineral sale! Call or stop by for this super buy!";
                    break;
               case "gm12":
                    $marketingMessage="Wind n Rain tubs. Convenient, Quality Minerals. Bring in this page for $5 off!!";
                    break;
          }
     }
     date_default_timezone_set('-21600');
     $updateTime = date("Y-m-d H:i",time());

//echo "Dealer Code: ".$dealerCode;
//echo "<br>";
//echo "Originating IP: ".$originatingIP;
//echo "<br>";
//echo "Post Date/Time: ".$updateTime;
//echo "<br>";
//echo "##########################";
//echo "<br>";
//$recordSaved="UPDATE producers
  //            SET MessageType='$messageType', MarketingMessage='$marketingMessage', Issue='$checkpointIssue', DatePosted='$updateTime', OriginatingIP='$originatingIP', State='$state', ZipCode='$zipCode', Email='$email', OperationType1='$op1BroodCow', OperationType2='$op2Stocker', OperationType3='$op3Finisher', OperationType4='$op4GeneticSupplier', HostingServer='$serverHost'
    //                        WHERE VIP='$vip'";


     $recordSaved="INSERT INTO messages (MessageType, MarketingMessage, Issue, DatePosted, OriginatingIP, DealerCode)
                    VALUES ('" . $messageType . "', '" . $marketingMessage . "', '" . $checkpointIssue . "', '" . $updateTime . "', '" . $originatingIP . "', '" . $dealerCode . "')";

//echo $recordSaved;
 
     if (mysqli_query($con, $recordSaved)===true){
         $userMessage = "success"; 
         $successMsg = "<strong>Success!</strong> Marketing Message Updated!";
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['successMsgSession'] = $successMsg;
     } else {
         $userMessage = "error";
         $errorMsg = "Error: %s\n" . mysqli_error($con);
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['errorMsgSession'] = $errorMsg;
         //printf("error: %s\n", mysqli_error($con));
     } 
     header("Location: http://dealers.PurinaCheckPoint.com/message");

     mysqli_close($con);
?>
