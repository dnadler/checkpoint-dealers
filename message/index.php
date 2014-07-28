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

     <title>Purina CheckPoint Dealer Site || Marketing Message</title>

    
     <style>
          /*
          tr:nth-child(odd) {
              background-color:#eee; 
          }
          tr:nth-child(even) {
               background-color:#fff; 
          }
          */
          .Table-BOD {
               /*min-width:750px;*/
               width:95%;
               display: table;
          }
          .Table-TR-noBG {
               display:table-row;
          }
          .headerRow {
               border-bottom:#aaa 1px solid;
          }
          .Table-TR-BOD:nth-child(odd) {
               display:table-row;
               background-color:#eee; 
          }
          .Table-TR-BOD:nth-child(even) {
               display:table-row;
               background-color:#fff; 
          }
          .Table-TH-BOD {
               display:table-cell;
               background-color:#fff;
          }
          .Table-TD-BOD {
               display:table-cell;
               white-space: nowrap;
          }
          .bigCell {
               width:100%;
          }
          .zeroBottomMargin {
               margin-bottom:0px;
          }
     </style>
     
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
                    <h1>Marketing Message</h1>
                    <p>Use the form below to submit your custom Marketing Message. Write your own (must be 99 characters or less), or choose from one of our generic messages.</p>
                    <!--<p><a class="btn btn-primary btn-lg" role="button">Learn more &raquo;</a></p>-->
               </div>
      </div>
    </div>

    <div class="container">
      
              
          <div class="row">
                <?php 
                    include '../includes/success-msg.php';
               ?>
          </div> <!-- /row -->
              <!-- <div class="alert alert-info">Marketing messages for the Spring issue are now closed. The next issue is <strong>Summer 2014</strong>.</div>-->
               <div class="row">
                    <h2 class="zeroBottomMargin">Update Marketing Message</h2>
                    <form  method="post" id="update" name="update" action="updateMessage.php">
                         <table  class="Table-BOD" border="0" align="center" cellpadding="5" cellspacing="0">
                              <tr class="Table-TR-noBG headerRow">
                                   
                              </tr>
                              <tr class="Table-TR-noBG">
                                   <td class="Table-TD-BOD">CheckPoint Issue:</td>
                                   <td class="Table-TD-BOD">
                                        <select name="checkpointIssue">
                                            <!-- <option value="Spring 2014">Spring 2014</option> -->
                                            <!-- <option value="Summer 2014">Summer 2014</option> -->
                                             <option value="Fall 2014">Fall 2014</option>
                                             <option value="Winter 2015">Winter 2015</option>
                                        </select>
                                   </td>
                              </tr>
                              <tr class="Table-TR-noBG">
                                   <td class="Table-TD-BOD">Marketing Message:</td>
                              </tr>
                              <tr class="Table-TR-noBG">
                                   <td class="Table-TD-BOD"><input name="messageType" type="radio" value="Custom"/><label>Custom</label></td>
                                   <td class="Table-TD-BOD bigCell"><input name="customMessage" id="customMessage" type="text" value="" size="60" maxlength="99" placeholder="Custom Marketing Message"></td>
                              </tr>
                              <tr class="Table-TR-noBG">
                                   <td class="Table-TD-BOD"><input name="messageType" type="radio" value="Generic"/><label>Generic</label></td>
                                   <td class="Table-TD-BOD bigCell">
                                        <select name="genericMessage" id="genericChoices">
                                             <option value="gm1">All Purina Feed and Minerals are Buy 12 Get 1 Free!</option>
                                             <option value="gm2">Bring this issue of CheckPoint in for 10% off your purchase!</option>
                                             <option value="gm3">Buy 12 Purina Mineral, Get 1 Free! Come see us today!</option>
                                             <option value="gm4">Call about our Mineral Truckload Sale!!</option>
                                             <option value="gm5">Contact us for your Wind & Rain, Accuration, Impact and Sup-R-Block products!</option>
                                             <option value="gm6">Contact Us to Learn More About all the New Purina Cattle Products</option>
                                             <option value="gm7">Good nutrition and management will help keep your livestock healthy, by the bag or bulk.</option>
                                             <option value="gm8">Let our feed team help your herd achieve optimum performance.</option>
                                             <option value="gm9">Stop in today to book your mineral and protein needs. Bring in CheckPoint for more savings!</option>
                                             <option value="gm10">We're proud to provide this issue of CheckPoint with our compliments.</option>
                                             <option value="gm11">Wind & Rain Mineral sale! Call or stop by for this super buy!</option>
                                             <option value="gm12">Wind n Rain tubs. Convenient, Quality Minerals. Bring in this page for $5 off!!</option>
                                        </select>
                                   </td>
                              </tr>
                              <tr class="Table-TR-noBG">
                                   <td class="Table-TD-BOD">
                                        <input name="submitMessage" type="submit" id="submitMessageBtn" value="Update" />
                                        <a href="http://dealers.PurinaCheckPoint.com/controlPanel">Cancel</a>
                                   </td>
                              </tr>
                         </table>
                    </form>
               </div>
               <div class="row">
                    <h2 class="zeroBottomMargin">Previous Messages</h2>
                    <?php
                         $table = "messages";
                         $retrieveMessages = @mysqli_query($con,"SELECT * FROM $table WHERE DealerCode = '".$dealerCode."' ORDER BY DatePosted ASC");

                         echo "<table class='Table-BOD'  border='0' align='center' cellpadding='5' cellspacing='0'>
                         <tr class='Table-TR-noBG headerRow'>
                         <th class='Table-TH-BOD' align='left'><strong>Date Posted</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Issue</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Marketing Message</strong></th>
                         <th class='Table-TH-BOD' align='left'><strong>Custom/Generic</strong></th>
                         </tr>";

                         while ($row = mysqli_fetch_array($retrieveMessages))
                         {
                                echo "<tr class='Table-TR-BOD'>";
                                echo "<td class='Table-TD-BOD'>" . $row['DatePosted'] . "</td>";
                                echo "<td class='Table-TD-BOD'>" . $row['Issue'] . "</td>";
                                echo "<td class='Table-TD-BOD'>" . $row['MarketingMessage'] . "</td>";
                                echo "<td class='Table-TD-BOD'>" . $row['MessageType'] . "</td>";
                                echo "</tr>";
                         }
                         echo "</table>";
                         
                         
                         mysqli_close($con);
                    ?>
               </div>
         
          <!--
          <hr>
          
          <div class="row">
               <h2>Topics Covered in the Summer 2014 Issue</h2>
               <p>Each issue of CheckPoint® brings your customers nutrition and management information to help keep their cows in condition, their calves growing, and their bottom line healthy. </p>
          </div>
          <div class="row">
               <div class="col-md-6">
                    <h4><strong>Cover Crops, Good for Soil, Good for Livestock</strong></h4>
                    <p>The concept of a cover crop is simple. You plant a primary crop for harvest, then a cover crop at, or just before harvest to protect the soil from erosion and reduce loss of nutrients from leaching and runoff.  But cover crops can also be “just the ticket” for economical fall grazing of cattle.  Your cattle customers will learn the how and why.</p>
               </div>
               <div class="col-md-6">
                    <h4><strong>Reduce Stress in Weaning Pens to Produce Healthy, Marketable Calves</strong></h4>
                    <p>Learning to eat and drink, being separated from Mom, and adapting to a new environment make weaning one of the most stressful events in a calf’s life. Reducing that stress is crucial to calf health—and future performance and productivity. Warren Gill, Ph.D., director, School of Agribusiness and Agriscience at Middle Tennessee State University, talks about reducing stress, especially in weaning pens.</p>
               </div>
          </div>
          <div class="row">
               <div class="col-md-6">
                    <h4><strong>Produce Corn Silage to Enhance Your Feeding Program</strong></h4>
                    <p>If your producers want to produce high-quality corn silage, they must understand the silage process—and do an exceptional job growing, harvesting and preserving the crop.  By following the tips provided, they will be on the right track.</p>
               </div>
               <div class="col-md-6">
                    <h4><strong>K &amp; B Cattle Combines Farming with Cattle Feeding Operation</strong></h4>
                    <p>Until recently Scott Kill and Brent Blythe were primarily grain farmers, raising corn, soybeans and wheat on their farm in Spencerville, Ohio.  Then, through their partnership, K &amp; B Cattle, they launched a new endeavor. They began feeding out about 420 head of cattle a year.  They use Purina products, and stated, “We’ve had good luck achieving an average daily gain of 3 lbs. per day. . . .”</p>
               </div>
          </div>
          <div class="row">
               <div class="col-md-6">
                    <h4><strong>Multiple Endeavors Bring Success to the Gettinger Family Operation</strong></h4>
                    <p>For Larry and Jeff Gettinger, breeding and raising cattle isn’t just a business. It’s a way of life.  These two brothers own Gettinger Chiangus in Rushville, Ind., where they breed and raise show cattle and beef calves, plus grow corn and soybeans. They feed Purina products and claim, “The overall quality of the cattle has proven the Purina products do what they’re supposed to.”</p>
               </div>
               <div class="col-md-6">
                    <h4><strong>Six Easy Steps to Fall Cow Care</strong></h4>
                    <p>Dr. Larry Hollis, extension beef veterinarian and professor of beef cattle management at Kansas State University discusses the steps producers should take this fall to assure their cows continue to add to their bottom line.</p>
               </div>
          </div>
          
           <div class="row">
               <div align="center"><a href="#top"><p>Top</p></a></div>
           </div> <!-- /row -->

      <hr>

     <script type="text/javascript">
         function checkType(checkItem) {
             var checkElement,i;

             checkElement = document.getElementsByName(checkItem);      

           
             $('#genericChoices').css("display","none");
             $('#customMessage').css("display","block");

             for (i=0; i<checkElement.length; i++) {
              
               if (checkElement[i].addEventListener){
                   checkElement[i].addEventListener("click", handlerFor(checkElement[i]), true);
               } else { 
                   checkElement[i].attachEvent('onclick',handlerFor(checkElement[i]) );
               }
             }

             //if (checkElement.addEventListener){
               //    checkElement.addEventListener("click", handlerFor(checkElement), true);
             //} else { 
               //alert ("Darin");
               //checkElement.attachEvent('onclick',handlerFor(checkElement) );
             //}
         }

         function handlerFor(checkElement) {
             return function() {                 // return essentially "breaks" the function. Returns value and stops the function
               //checkCommentTrigger(checkItem, actionItem, triggerValue);
               if (checkElement.value==="Generic" && checkElement.checked) {
                    $('#genericChoices').css("display","block");
                    //actionElement.style.display="block";
                    $('#customMessage').css("display","none");
               } else if (checkElement.value==="Custom" && checkElement.checked) {
                    $('#genericChoices').css("display","none");
                    $('#customMessage').css("display","block");
               }
             }
           }

         checkType("messageType");


</script>
     <?php 
          include '../includes/footer.php';
     ?>
   

    </div> <!-- /container -->


  </body>
</html>
