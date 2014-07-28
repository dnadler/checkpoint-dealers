<?php
    session_name("Darin");
    session_start();
    include '../../includes/confirm-login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
          include '../../includes/head-includes.php';
     ?>   

     <title>Purina CheckPoint Dealer Site || Admin || Mailing Lists || Dealer List</title>

    
     <style>
          tr:nth-child(odd) {
              background-color:#eee; 
          }
          tr:nth-child(even) {
               background-color:#fff; 
          }
          .add-producer-btn {
               margin-bottom:15px;
          }
     </style>
</head>

  <body>
     <a name="top">
     <header>
          <?php 
               include '../../includes/header-admin-logged-in.php';
               require_once('../../includes/setup-connection.php');
               
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-7">
                    <h1>Dealer Mailing List</h1>
                    <p></p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-12">
               <?php 
                    if ($_SESSION['userMessageSession']=="success"){
                        echo "<div class='alert alert-success'>";
                        echo $_SESSION['successMsgSession'];
                        $_SESSION['successMsgSession']="";
                        $_SESSION['userMessageSession']="";
                        echo "</div>";
                    } else if ($_SESSION['userMessageSession']=="error") {
                        echo "<div class='alert alert-danger'>";
                        echo $_SESSION['errorMsgSession'];
                        $_SESSION['successMsgSession']="";
                        $_SESSION['userMessageSession']="";
                        echo "</div>";
                    } else if ($_SESSION['userMessageSession']=="delete") {
                         echo "<div class='alert alert-info'>";
                         echo $_SESSION['deleteMsgSession'];
                         $_SESSION['deleteMsgSession']="";
                         $_SESSION['userMessageSession']="";
                         echo "</div>";
                    } else {
                        //do nothing
                    }
                   
               ?>
               <div id="producerList">
                    <?php 
                         $table = "messages";
                         $i=0;
                         $retrieveMessages = @mysqli_query($con,"SELECT * FROM $table WHERE Issue = '" . $currentIssue . "' ORDER BY DealerCode ASC"); 
                         while ($row = mysqli_fetch_array($retrieveMessages))
                         {
                              $currentMessages[$i] = $row['MarketingMessage'];
                              $i++;
                         }
                    
                         $table = "dealers";
                         $retrieveDealers = @mysqli_query($con,"SELECT * FROM $table ORDER BY DealerCode ASC");

                         echo "<table  border='0' align='center' cellpadding='5' cellspacing='0'>";
                         echo "<a class='btn btn-success add-producer-btn' href='add-producer/''>+ Export List</a>";
                         echo "<tbody>";
                         echo "
                         <tr>
                         <th class='Table-TH-BOD' align='left'><strong>Sub#</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>ContactFirst</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>ContactLast</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>BusinessName</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Address1</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Address2</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>City</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>State</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Zip</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>MarketingMessage</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerCode</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerName</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerAddress1</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerAddress2</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerCity</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerState</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>DealerZip</strong></th>
                         </tr>";



                         while ($row = mysqli_fetch_array($retrieveDealers))
                         {
                              if ($row['Contact2FirstName'] != "") {
                                   $contactFirst = $row['Contact1FirstName'] . " " . $row['Contact1LastName'] . " /";
                                   $contactLast = $row['Contact2FirstName'] . " " . $row['Contact2LastName'];
                              } else {
                                   $contactFirst = $row['Contact1FirstName'];
                                   $contactLast = $row['Contact1LastName'];
                              }   

                              $marketingMessage = "TBD";
                              $currentIssue = "V13N1";
                              $subCode = "PAN# " . $row['DealerCode'] . "-" . $currentIssue;

                              echo "<tr>";
                              echo "<td class='TableText-BOD'>" . $subCode . "</td>";
                              echo "<td class='TableText-BOD'>" . $contactFirst . "</td>";
                              echo "<td class='TableText-BOD'>" . $contactLast . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['DealerName'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['Address1'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['Address2'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['City'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['State'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['Zip'] . "</td>";

                              echo "<td class='TableText-BOD'>" . $marketingMessage . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['DealerCode'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['DealerName'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['Address1'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['Address2'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['City'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['State'] . "</td>";
                              echo "<td class='TableText-BOD'>" . $row['Zip'] . "</td>";
                              echo "</tr>";
                         }
                         echo "</tbody>";
                         echo "</table>";
                         echo "<div align='center'><a href='#top'><p>Top</p></a></div>";
                         
                         mysqli_close($con);
                    ?>
              
              
                </div>
            
          </div>
          
      </div>

      <hr>

     
     <?php 
          include '../../includes/footer.php';
          //echo "<pre>";
          //var_dump($_SESSION);
          //echo "</pre>";
          //exit;
     ?>
   

    </div> <!-- /container -->


   
  </body>
</html>
