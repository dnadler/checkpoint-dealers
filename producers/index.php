<?php
    session_name("Darin");
    session_start();
    include '../includes/confirm-login.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
     <?php
          include '../includes/head-includes.php';
     ?>   

     <title>Purina CheckPoint Dealer Site || Producer List</title>

    
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
     <script>
          function confirmDelete(vip){
               var x=window.confirm("Confirm DELETE producer record:")
               if (x) {
                    location.href = "delete-record.php?vip="+vip;
               } else {

               }
          }
     </script>    
</head>

  <body>
     <a name="top">
     <header>
          <?php 
               include '../includes/header-logged-in.php';
               require_once('../includes/setup-connection.php');
               
          ?>
     </header>
    

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
      <div class="container">
        <div class="col-md-7">
                    <h1>Producer List</h1>
                    <p>The list below is the one we have on file for your location. From this page, you can add a new customer to the mailing list, edit the information of an existing customer, or delete an out-of-date record.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
      </div>
    </div>

    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        
        <div class="col-md-12">
               <?php 
                    include '../includes/success-msg.php';
               ?>
               <div id="producerList">
                    
                    <?php
                         $table = "producers";
                         $retrieveProducers = @mysqli_query($con,"SELECT * FROM $table WHERE DealerCode = '".$dealerCode."' ORDER BY LastName ASC");

                         echo "<table  border='0' align='center' cellpadding='5' cellspacing='0'>";
                         echo "<a class='btn btn-success add-producer-btn' href='add-producer/''>+ Add Producer</a>";
                         echo "<tbody>";
                         echo "
                         <tr>
                         <th class='Table-TH-BOD' align='left'><strong>Edit</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Delete</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>First Name</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Last Name</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Business Name</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Address</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>City</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>State</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Zip Code</strong></th>
                         </tr>";

                         while ($row = mysqli_fetch_array($retrieveProducers))
                         {
                           echo "<tr>";
                           echo "<td class='TableText-BOD'><a href='edit/index.php?vip=" . $row['VIP'] . "'>Edit</a>" . "</td>";
                           echo "<td class='TableText-BOD'><a class='deleteProducer' onclick='confirmDelete(" . $row['VIP'] . ")'>Delete</a>" . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['FirstName'] . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['LastName'] . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['BusinessName'] . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['Address'] . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['City'] . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['State'] . "</td>";
                           echo "<td class='TableText-BOD'>" . $row['ZipCode'] . "</td>";
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
          include '../includes/footer.php';
          //echo "<pre>";
          //var_dump($_SESSION);
          //echo "</pre>";
          //exit;
     ?>
   

    </div> <!-- /container -->


   
  </body>
</html>
