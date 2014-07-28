<?php
     session_name("Darin");
     session_start();
    

     function generate_password() {
          $length=8;
          $chars = "abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789";
          $password = substr( str_shuffle( $chars ), 0, $length );
          return $password;
     }
     

     require_once('../../includes/setup-connection.php');

    
     $email = mysqli_real_escape_string($con, $_POST['emailField']);
     $zip = mysqli_real_escape_string($con, $_POST['zipCodeField']);

     $table = "dealers";
     $retrieveDealer = @mysqli_query($con,"SELECT * FROM $table WHERE Zip = '" . $zip . "' AND (Email1 = '" . $email . "' OR Email2 = '" . $email . "')");
     $num_rows = mysqli_num_rows($retrieveDealer);

     if ($num_rows < 1) {
         $userMessage = "error"; 
         $errorMsg = "An account matching the email address and zip code you entered could not be found. Please contact Darin Nadler (<a href='mailto:dnadler@purinacheckpoint.com'>dnadler@purinacheckpoint.com</a>, 913-324-5961) to request new credentials.";
         $_SESSION['userMessageSession']=$userMessage;
         $_SESSION['errorMsgSession'] = $errorMsg;
     } else {
          while ($row = mysqli_fetch_array($retrieveDealer)) {
            $dealerCode = $row['DealerCode'];
            $uid = $row['UID'];
          }
          
          $newPass = generate_password();
          $newPassSHA1 = sha1($newPass);
          $updateTime = date("d-m-Y_H-i",time());
          $serverHost = $_SERVER['SERVER_NAME'];

          $recordSaved="UPDATE dealers
                        SET PW='$newPassSHA1', UpdateTime='$updateTime', HostingServer='$serverHost'
                                      WHERE DealerCode='$dealerCode'";

          if (mysqli_query($con, $recordSaved)===true){
               $to = $email;
               $_SESSION['resetPasswordEmail'] = $to;
               
               
               $subject = 'Purina CheckPoint Dealer Website - Reset Password';
               $message = 'This is an automatically generated email from http://dealers.purinacheckpoint.com. A request was made to reset the account password associated with this email address.' . "\n" . 'If you did not make this request, please contact us (dnadler@purinacheckpoint.com, 913-324-5961).' . "\n" . "\n" . 'User ID: ' . $uid . "\n" . 'New Password: ' . $newPass . "\n" . "\n" . 'As a security precaution, we recommend you login to http://dealers.purinacheckpoint.com and change your password.';
               $headers = 'From: dnadler@purinacheckpoint.com' . "\r\n" . 'Reply-To: dnadler@purinacheckpoint.com';

               mail($to, $subject, $message, $headers);

               $subject = '[ADMIN COPY] -- Purina CheckPoint Dealer Website - Reset Password';
               $message = '[ADMIN COPY] -- This is an automatically generated email from http://dealers.purinacheckpoint.com. A request was made to reset the account password associated with this email address.' . "\n" . 'If you did not make this request, please contact us (dnadler@purinacheckpoint.com, 913-324-5961).' . "\n" . "\n" . 'User ID: ' . $uid . "\n" . 'New Password: ' . $newPass . "\n" . "\n" . 'As a security precaution, we recommend you login to http://dealers.purinacheckpoint.com and change your password.';
               $headers = 'From: dnadler@purinacheckpoint.com' . "\r\n" . 'Reply-To: dnadler@purinacheckpoint.com';
               $to = 'dnadler@purinacheckpoint.com';

               mail($to, $subject, $message, $headers);

               $userMessage = "success";
               $successMsg = "New account credentials have been sent to <strong>". $_SESSION['resetPasswordEmail'] ."</strong>.";
               $_SESSION['userMessageSession']=$userMessage;
               $_SESSION['successMsgSession'] = $successMsg;
          } else {
              $userMessage = "error";
              $errorMsg = "Error: %s\n" . mysqli_error($con);
              $_SESSION['userMessageSession']=$userMessage;
              $_SESSION['errorMsgSession'] = $errorMsg;
          }
     } 
     
     
     mysqli_close($con);
     header("Location: ../reset-password");
          
   
     
?>




