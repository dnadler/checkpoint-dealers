 <?php 
   if ((isset($_SESSION['userMessageSession'])) && (!empty($_SESSION['userMessageSession']))) 
   {
        if ($_SESSION['userMessageSession'] == "success"){
            echo "<div class='alert alert-success'>";
            echo $_SESSION['successMsgSession'];
            $_SESSION['successMsgSession'] = "";
            $_SESSION['userMessageSession'] = "";
            echo "</div>";
        } else if ($_SESSION['userMessageSession'] == "error") {
            echo "<div class='alert alert-danger'>";
            echo $_SESSION['errorMsgSession'];
            $_SESSION['successMsgSession'] = "";
            $_SESSION['userMessageSession'] = "";
            echo "</div>";
        } else if ($_SESSION['userMessageSession'] == "delete") {
             echo "<div class='alert alert-info'>";
             echo $_SESSION['deleteMsgSession'];
             $_SESSION['deleteMsgSession'] = "";
             $_SESSION['userMessageSession'] = "";
             echo "</div>";
        } else {
            //do nothing
        }
   }
                   
?>