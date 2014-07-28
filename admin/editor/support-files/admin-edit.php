<!DOCTYPE html>
<html>
<head>  

</head>

<div id="producerList">
     
     <?php   

          require_once('../../../includes/setup-connection.php');
          $vip=$_GET["vip"];
          
          $table = "producers";
          $sql = "SELECT * FROM $table WHERE VIP LIKE '".$vip."%' ORDER BY LastName ASC";
          
          $result = @mysqli_query($con,$sql);
          
          $row_cnt = mysqli_num_rows($result);
          echo "Matching records found: " . $row_cnt;
          echo $vip;
          if ($row_cnt == 0) {
               echo("No producer found with VIP #" . $vip . ".");
          } else {
               echo "<table  border='0' align='center' cellpadding='5' cellspacing='0'>";
               echo "<tbody>";
               echo "
               <tr>
               <th class='Table-TH-BOD' align='left'><strong>Edit</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>Delete</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>VIP</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>First Name</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>Last Name</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>Business Name</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>Address</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>City</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>State</strong></th>
               <th class='Table-TH-BOD' align='left'><strong>Zip Code</strong></th>
               </tr>";

               while ($row = mysqli_fetch_array($result))
               {
                    echo "<tr>";
                    echo "<td class='TableText-BOD'><a href='edit/index.php?vip=" . $row['VIP'] . "'>Edit</a>" . "</td>";
                    echo "<td class='TableText-BOD'><a class='deleteProducer' onclick='confirmDelete(" . $row['VIP'] . ")'>Delete</a>" . "</td>";
                    echo "<td class='TableText-BOD'>" . $row['VIP'] . "</td>";
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
          }
          mysqli_close($con);
     ?>
</div>
</body>
</html>